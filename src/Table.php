<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager;

use LogicException;
use wpdb;
use Throwable;
use Closure;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use WPTechnix\WPTableManager\Interfaces\TableInterface;
use WPTechnix\WPTableManager\Schema\CreateTableSchema;
use WPTechnix\WPTableManager\Exceptions\SchemaException;

// phpcs:disable WordPress.DB.PreparedSQL -- SQL is safely constructed. Table and column names are dynamic but rigorously sanitized, which cannot be prepared by wpdb.

/**
 * Abstract Database Table Class.
 *
 * This class provides a robust and secure foundation for creating, migrating, and managing
 * database custom tables within a WordPress environment. It features a unified, high-compatibility
 * API for all index and column manipulations.
 *
 * Requires PHP: 8.0+
 * Requires MySQL: 5.7+ or MariaDB 10.2+
 */
abstract class Table implements TableInterface, LoggerAwareInterface
{
    use LoggerAwareTrait;


    /**
     * A standard, non-unique index.
     *
     * @var string
     */
    public const INDEX_TYPE_INDEX = 'INDEX';

    /**
     * A unique-key index, where all values in the index must be unique.
     *
     * @var string
     */
    public const INDEX_TYPE_UNIQUE = 'UNIQUE';

    /**
     * A full-text index for word-based searching.
     *
     * @var string
     */
    public const INDEX_TYPE_FULLTEXT = 'FULLTEXT';

    /**
     * A spatial index used for geographical data.
     *
     * @var string
     */
    public const INDEX_TYPE_SPATIAL = 'SPATIAL';

    /**
     * The base version number for a table that has not been installed yet.
     *
     * @var int
     */
    private const BASE_VERSION = 10000;

    /**
     * The target schema version for this table, as defined by the current plugin code.
     * Must be defined in the child class.
     *
     * @var int
     */
    protected int $schemaVersion = self::BASE_VERSION;

    /**
     * The table name, without WordPress or plugin prefixes.
     * Must be defined in the child class.
     *
     * @var string
     */
    protected string $tableName;

    /**
     * A short, unique alias for the table, primarily for use in complex SQL JOINs.
     * Must be defined in the child class.
     *
     * @var string
     */
    protected string $tableAlias;

    /**
     * The primary key column for this table.
     * Must be defined in the child class.
     *
     * @var string
     */
    protected string $primaryKeyColumn = 'id';

    /**
     * The name of this table's primary key when used as a foreign key in other tables.
     * Must be defined in the child class.
     *
     * @var string
     */
    protected string $foreignKeyName;

    /**
     * Determines if the table is shared across all sites in a multisite installation.
     * If true, `$wpdb->base_prefix` will be used instead of `$wpdb->prefix`.
     * Must be defined in the child class if a shared table is desired.
     *
     * @var bool
     */
    protected bool $multisiteShared = false;

    /**
     * The WordPress option name that stores all table schema versions for this plugin.
     *
     * @var string
     */
    protected string $tableVersionsOptionName;

    /**
     * A local cache for the array of table versions stored in the database.
     *
     * @var  array<string, int>
     */
    protected ?array $tableVersions = [];

    /**
     * The cached MySQL/MariaDB version number.
     *
     * @var string
     */
    private static string $mysqlServerVersion;

    /**
     * The cached check for whether the database is MariaDB.
     *
     * @var bool
     */
    private static bool $isMariaDbInstallation;

    /**
     * Get the version number being installed.
     *
     * @var int
     */
    protected int $versionBeingInstalled = 0;

    /**
     * The plugin prefix.
     *
     * @var string
     */
    protected string $pluginPrefix;

    /**
     * A cache for foreign key existence checks.
     *
     * @var array<string, bool>
     */
    protected array $fkExistsCached = [];

    /**
     * A cache for index existence checks.
     *
     * @var array<string,array{Non_unique: string, Key_name: string, Index_type: string}|false>
     */
    protected array $indexCached = [];

    /**
     * A cache for column existence checks.
     *
     * @var array<string, bool>
     */
    protected array $columnCached = [];

    /*
    |--------------------------------------------------------------------------
    | Constructor
    |--------------------------------------------------------------------------
    */

    /**
     * Table constructor.
     *
     * @param wpdb $wpdb The WordPress database object.
     * @param string|null $pluginPrefix The plugin prefix.
     */
    public function __construct(protected wpdb $wpdb, ?string $pluginPrefix = null)
    {
        if (empty($this->tableName) || empty($this->primaryKeyColumn) || empty($this->foreignKeyName)) {
            throw new LogicException(
                static::class . ' must declare the $tableName, $primaryKeyColumn, and $foreignKeyName properties.'
            );
        }

        if (!empty($pluginPrefix)) {
            $this->pluginPrefix = $pluginPrefix;
        }

        if (empty($this->pluginPrefix)) {
            throw new LogicException(
                static::class . ' must declare the $pluginPrefix property.'
            );
        }

        $pluginPrefix = Util::cleanSqlIdentifier($this->pluginPrefix);

        $this->tableVersionsOptionName = $this->pluginPrefix . '_table_versions';
    }

    /*
    |--------------------------------------------------------------------------
    | Public API Methods (from TableInterface)
    |--------------------------------------------------------------------------
    */

    /**
     * {@inheritdoc}
     */
    final public function getSchemaVersion(): int
    {
        return $this->schemaVersion;
    }

    /**
     * {@inheritdoc}
     */
    final public function getInstalledVersion(): int
    {
        $this->getTableVersions();
        return $this->tableVersions[static::class] ?? self::BASE_VERSION;
    }

    /**
     * {@inheritDoc}
     */
    final public function getTableName(bool $withWpPrefix = true): string
    {
        $baseName = $this->pluginPrefix . $this->tableName;
        if ($withWpPrefix) {
            $prefix = $this->isMultisiteShared() ? $this->wpdb->base_prefix : $this->wpdb->prefix;
            $baseName = $prefix . $baseName;
        }

        return Util::cleanSqlIdentifier($baseName);
    }

    /**
     * {@inheritdoc}
     */
    final public function getTableAlias(): string
    {
        return Util::cleanSqlIdentifier($this->tableAlias ?? '');
    }

    /**
     * {@inheritdoc}
     */
    final public function getPrimaryKey(): string
    {
        return $this->primaryKeyColumn;
    }

    /**
     * {@inheritdoc}
     */
    final public function getForeignKeyName(): string
    {
        return $this->foreignKeyName;
    }

    /**
     * {@inheritdoc}
     */
    final public function install(): void
    {
        // 1. Get the current and target schema versions.
        $installedVersion = $this->getInstalledVersion();
        $targetVersion = $this->getSchemaVersion();
        if (!$this->tableExists() && self::BASE_VERSION < $installedVersion) {
            $this->logger?->warning('Database table does not exist despite marked as installed.', [
                'table' => $this->getTableName(),
                'installed_version' => $installedVersion,
                'site_id' => $this->getCurrentSiteId()
            ]);
        }

        // 2. Check if a migration is necessary. If not, we're done.
        if ($installedVersion >= $targetVersion) {
            $this->logger?->info('Database table is already up to date. No migration needed.', [
                'table' => $this->getTableName(),
                'installed_version' => $installedVersion,
                'site_id' => $this->getCurrentSiteId()
            ]);
            return;
        }

        $this->logger?->info('Starting database migration process.', [
            'table' => $this->getTableName(),
            'from_version' => $installedVersion,
            'to_version' => $targetVersion,
            'site_id' => $this->getCurrentSiteId()
        ]);

        // 3. Loop through all potential version numbers from the last known good state
        //    to the target state.
        try {
            // We start from the number immediately following the installed version.
            for ($versionToMigrate = $installedVersion + 1; $versionToMigrate <= $targetVersion; $versionToMigrate++) {
                $methodName = 'migrateTo' . $versionToMigrate;
                // Check if a specific migration method exists (e.g., migrateTo10010).
                // This allows for gapped version numbers (e.g., 10010, 10020, 10030).
                if (method_exists($this, $methodName)) {
                    $this->versionBeingInstalled = $versionToMigrate;
                    $this->logger?->info("Running migration step: $methodName");
                    // Execute the migration defined in the child class.
                    $returned = $this->{$methodName}();
                    if (false === $returned) {
                        return;
                    }

                    // Update the database version only AFTER the step succeeds.
                    // This makes the migration process resumable if it fails halfway through.
                    $this->updateCurrentDbVersion($versionToMigrate);
                    $this->logger?->info("Successfully migrated table to version $versionToMigrate.", [
                        'site_id' => $this->getCurrentSiteId(),
                        'table' => $this->getTableName(),
                        'version' => $versionToMigrate
                    ]);
                }
            }
        } catch (Throwable $e) {
            // If ANY migration step throws an error, we must stop immediately to prevent
            // further damage or inconsistent state.
            $errorMessage = 'A critical error occurred during database migration. The process has been stopped.';
            $this->logger?->critical($errorMessage, [
                'table' => $this->getTableName(),
                'failed_at_version' => $this->versionBeingInstalled,
                'error_message' => $e->getMessage(),
                'error_file' => $e->getFile(),
                'error_line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
                'site_id' => $this->getCurrentSiteId()
            ]);
            // We exit the function here, leaving the db version at the last successful step.
            return;
        } finally {
            // 4. Cleanup.
            $this->versionBeingInstalled = 0;
            $this->fkExistsCached = [];
            $this->indexCached = [];
            $this->columnCached = [];
        }

        $this->logger?->info('Database migration process completed successfully.', [
            'table' => $this->getTableName(),
            'final_version' => $this->getInstalledVersion(),
            'site_id' => $this->getCurrentSiteId()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    final public function drop(): bool
    {
        $tableName = $this->getTableName();
        return false !== $this->wpdb->query("DROP TABLE IF EXISTS `$tableName`;");
    }

    /**
     * Create Table
     *
     * @param Closure $closure The closure that builds the table.
     *
     * @phpstan-param (Closure(CreateTableSchema): (CreateTableSchema|string)) $closure
     *
     * @throws SchemaException When CreateTableSchema Failed to generate SQL.
     */
    final protected function createTable(Closure $closure): bool
    {
        $builder = new CreateTableSchema($this->getTableName(), $this->wpdb);
        $builder->ifNotExists();
        $builder->id($this->primaryKeyColumn);
        $result = $closure($builder);
        $succeeded = false !== $this->wpdb->query($result instanceof CreateTableSchema ? $result->toSql() : $result);
        if (!$succeeded) {
            $this->logger?->error('Failed to create table.', [
                'table' => $this->getTableName(),
                'when_installing' => $this->versionBeingInstalled,
                'site_id' => $this->getCurrentSiteId(),
                'wpdb_error' => $this->wpdb->last_error,
            ]);
        }

        return $succeeded;
    }

    /*
    |--------------------------------------------------------------------------
    | Core Table & Migration Methods
   |--------------------------------------------------------------------------
    */

    /**
     * Checks if the current site is a multisite installation and the table is shared across all sites.
     *
     * @return bool True if the table is shared across all sites, false otherwise.
     */
    final protected function isMultisiteShared(): bool
    {
        return is_multisite() && $this->multisiteShared;
    }

    /**
     * Gets the current site ID.
     *
     * @return int The current site ID.
     */
    final protected function getCurrentSiteId(): int
    {
        if (!function_exists('get_current_blog_id')) {
            return 1;
        }
        return (int) get_current_blog_id();
    }

    /**
     * Returns the table prefix for the current database.
     *
     * @param bool $withWpdbPrefix Whether to include the WordPress prefix.
     * @param bool $withPluginPrefix Whether to include the plugin prefix.
     *
     * @return string The table prefix.
     */
    final protected function getTablePrefix(bool $withWpdbPrefix = true, bool $withPluginPrefix = true): string
    {
        $prefix = $withWpdbPrefix ? ($this->isMultisiteShared() ? $this->wpdb->base_prefix : $this->wpdb->prefix) : '';
        if ($withPluginPrefix) {
            $prefix .= $this->pluginPrefix;
        }
        return $prefix;
    }

    /**
     * Checks if the database table exists.
     *
     * @return bool True if the table exists, false otherwise.
     */
    final protected function tableExists(): bool
    {
        $tableName = $this->getTableName();
        return !empty($this->wpdb->get_var($this->wpdb->prepare('SHOW TABLES LIKE %s', $tableName)));
    }

    /**
     * Gets the database character set and collation string for use in SQL.
     *
     * @return string The charset and collate string, or an empty string if not available.
     */
    final protected function getDbCharsetCollate(): string
    {
        return $this->wpdb->get_charset_collate();
    }

    /**
     * Updates the stored database version for this specific table.
     *
     * @param int $version The new version number to store.
     */
    final protected function updateCurrentDbVersion(int $version): void
    {
        // Ensure current versions are loaded
        $this->getTableVersions();

        // Update version
        $this->tableVersions[static::class] = $version;

        // Persist updated versions
        if ($this->isMultisiteShared()) {
            update_site_option($this->tableVersionsOptionName, $this->tableVersions);
        } else {
            update_option($this->tableVersionsOptionName, $this->tableVersions, false);
        }

        // Log version update
        $this->logger?->info('Updated database schema version for table.', [
            'table' => $this->getTableName(),
            'version' => $version,
        ]);
    }


    /**
     * Retrieves the stored database table versions for the current site or network.
     *
     * @return array<string, int> Associative array of table versions.
     */
    final protected function getTableVersions(): array
    {
        $isShared = $this->isMultisiteShared();
        if (!isset($this->tableVersions)) {
            $optionValue = $isShared
                ? get_site_option($this->tableVersionsOptionName, [])
                : get_option($this->tableVersionsOptionName, []);
            $this->tableVersions = is_array($optionValue) ? $optionValue : [];
        }

        return $this->tableVersions;
    }

    /*
    |--------------------------------------------------------------------------
    | Column Management Methods
    |--------------------------------------------------------------------------
    */

    /**
     * Checks if a specific column exists in this table.
     *
     * @param string $columnName The name of the column to check.
     * @return bool True if the column exists, false otherwise.
     */
    final protected function columnExists(string $columnName): bool
    {
        $columnName = Util::cleanSqlIdentifier($columnName);
        if ('' === $columnName) {
            return false;
        }

        if (isset($this->columnCached[$columnName])) {
            return $this->columnCached[$columnName];
        }

        $tableName = $this->getTableName();
        $result = $this->wpdb->get_var($this->wpdb->prepare("SHOW COLUMNS FROM `$tableName` LIKE %s", $columnName));
        $exists = !empty($result);

        $this->columnCached[$columnName] = $exists;

        return $exists;
    }

    /**
     * Adds a new column to the table.
     *
     * @param string $columnName The name of the column to add.
     * @param string $columnDefinition The SQL definition of the column (e.g., 'VARCHAR(191) NOT NULL').
     * @param string|null $afterColumn Optional. The name of the column after which to add the new column.
     * @return bool True on success or if the column already existed, false on failure.
     */
    final protected function addColumn(string $columnName, string $columnDefinition, ?string $afterColumn = null): bool
    {
        $columnName = Util::cleanSqlIdentifier($columnName);
        $tableName = $this->getTableName();
        if ($this->columnExists($columnName)) {
            $this->logger?->notice('Skipped adding column because it already exists.', [
                'table' => $tableName,
                'column' => $columnName,
                'when_installing' => $this->versionBeingInstalled,
                'site_id' => $this->getCurrentSiteId()
            ]);
            return true;
        }

        $sql = "ALTER TABLE `$tableName` ADD COLUMN `$columnName` $columnDefinition";
        if (!empty($afterColumn)) {
            $sql .= ' AFTER `' . Util::cleanSqlIdentifier($afterColumn) . '`';
        }

        $hasAdded = false !== $this->wpdb->query($sql);
        if ($hasAdded) {
            $this->columnCached[$columnName] = true;
        }

        return $hasAdded;
    }

    /**
     * Drops a column from the table.
     *
     * @param string $columnName The name of the column to drop.
     * @return bool True on success or if the column didn't exist, false on failure.
     */
    final protected function dropColumn(string $columnName): bool
    {
        $columnName = Util::cleanSqlIdentifier($columnName);
        $tableName = $this->getTableName();
        if (!$this->columnExists($columnName)) {
            $this->logger?->notice('Skipped dropping column because it does not exist.', [
                'table' => $tableName,
                'column' => $columnName,
                'when_installing' => $this->versionBeingInstalled,
                'site_id' => $this->getCurrentSiteId()
            ]);
            return true;
        }

        $hasDropped = false !== $this->wpdb->query("ALTER TABLE `$tableName` DROP COLUMN `$columnName`");
        if ($hasDropped) {
            $this->columnCached[$columnName] = false;
        }
        return $hasDropped;
    }

    /**
     * Modifies an existing column's definition (e.g., changing its data type or nullability).
     *
     * @param string $columnName The name of the column to modify.
     * @param string $newColumnDefinition The new SQL definition for the column.
     * @return bool True on success, false on failure (e.g., if the column does not exist).
     */
    final protected function modifyColumn(string $columnName, string $newColumnDefinition): bool
    {
        $columnName = Util::cleanSqlIdentifier($columnName);
        $tableName = $this->getTableName();
        if (!$this->columnExists($columnName)) {
            $this->logger?->warning('Failed to modify column because it does not exist.', [
                'table' => $tableName,
                'column' => $columnName,
                'when_installing' => $this->versionBeingInstalled,
                'site_id' => $this->getCurrentSiteId()
            ]);
            return false;
        }

        $query = "ALTER TABLE `$tableName` MODIFY COLUMN `$columnName` $newColumnDefinition";

        $hasModified = false !== $this->wpdb->query($query);
        if ($hasModified) {
            $this->columnCached[$columnName] = true;
        }
        return $hasModified;
    }

    /**
     * Safely renames an existing column without altering its definition.
     *
     * @param string $oldColumnName The current name of the column.
     * @param string $newColumnName The new name for the column.
     * @return bool True on success, false on failure.
     */
    final protected function renameColumn(string $oldColumnName, string $newColumnName): bool
    {
        if ($oldColumnName === $newColumnName) {
            return true;
        }

        $tableName = $this->getTableName();
        if (!$this->columnExists($oldColumnName)) {
            $this->logger?->warning('Failed to rename column: old column does not exist.', [
                'table' => $tableName,
                'old_column' => $oldColumnName,
                'new_column' => $newColumnName,
                'when_installing' => $this->versionBeingInstalled,
                'site_id' => $this->getCurrentSiteId()
            ]);
            return false;
        }
        if ($this->columnExists($newColumnName)) {
            $this->logger?->warning('Failed to rename column: new column name already exists.', [
                'table' => $tableName,
                'old_column' => $oldColumnName,
                'new_column' => $newColumnName,
                'when_installing' => $this->versionBeingInstalled,
                'site_id' => $this->getCurrentSiteId()
            ]);
            return false;
        }

        // Use modern syntax if available for performance and safety.
        if (
            $this->isMysqlAtLeast('8.0.3') ||
            $this->isMariaDbAtLeast('10.5.2')
        ) {
            $oldColumnName = Util::cleanSqlIdentifier($oldColumnName);
            $newColumnName = Util::cleanSqlIdentifier($newColumnName);
            $query = "ALTER TABLE `$tableName` RENAME COLUMN `$oldColumnName` TO `$newColumnName`";
            $hasRenamed = false !== $this->wpdb->query($query);
            if ($hasRenamed) {
                // Update the cache to reflect the new column name.
                $this->columnCached[$oldColumnName] = false;
                $this->columnCached[$newColumnName] = true;
            }
            return $hasRenamed;
        }

        // Fallback for older MySQL/MariaDB versions.
        $definition = $this->getColumnDefinitionForChange($oldColumnName);
        if ('' === $definition) {
            $this->logger?->error('Failed to rename column: could not retrieve column definition for fallback.', [
                'table' => $tableName,
                'column' => $oldColumnName,
                'when_installing' => $this->versionBeingInstalled,
                'site_id' => $this->getCurrentSiteId()
            ]);
            return false;
        }

        return $this->changeColumn($oldColumnName, $newColumnName, $definition);
    }

    /**
     * Renames a column and simultaneously changes its definition.
     *
     * @param string $oldColumnName The current name of the column.
     * @param string $newColumnName The new name for the column.
     * @param string $newColumnDefinition The new SQL definition for the renamed column.
     * @return bool True on success, false on failure.
     */
    final protected function changeColumn(
        string $oldColumnName,
        string $newColumnName,
        string $newColumnDefinition
    ): bool {
        $oldColumnName = Util::cleanSqlIdentifier($oldColumnName);
        $newColumnName = Util::cleanSqlIdentifier($newColumnName);
        if (!$this->columnExists($oldColumnName)) {
            return false;
        }
        if ($oldColumnName !== $newColumnName && $this->columnExists($newColumnName)) {
            return false;
        }

        $tableName = $this->getTableName();
        $query = "ALTER TABLE `$tableName` CHANGE COLUMN `$oldColumnName` `$newColumnName` $newColumnDefinition";
        $hasChanged = false !== $this->wpdb->query($query);
        if ($hasChanged) {
            // Update the cache to reflect the new column name.
            $this->columnCached[$oldColumnName] = false;
            $this->columnCached[$newColumnName] = true;
        }

        return $hasChanged;
    }

    /**
     * Fetches the full SQL definition of a column for use in a CHANGE COLUMN statement.
     *
     * @param string $columnName The name of the column.
     * @return string The column's full definition string or an empty string on failure.
     */
    private function getColumnDefinitionForChange(string $columnName): string
    {
        $tableName = $this->getTableName();
        $row = $this->wpdb->get_row("SHOW CREATE TABLE `$tableName`", ARRAY_A);
        $createTableSql = '';

        if (!empty($row)) {
            foreach ($row as $key => $value) {
                if (str_contains(strtolower((string) $key), 'create')) {
                    $createTableSql = $value;
                    break;
                }
            }
        }

        $lines = explode("\n", $createTableSql);
        foreach ($lines as $line) {
            if (str_starts_with(trim($line), '`' . $columnName . '`')) {
                // Remove the column name itself and the trailing comma.
                return rtrim(trim(substr(trim($line), strlen($columnName) + 2)), ',');
            }
        }

        return '';
    }

    /*
    |--------------------------------------------------------------------------
    | Index Management Methods
    |--------------------------------------------------------------------------
    */

    /**
     * Checks if an index exists on the table by its name only, regardless of type.
     *
     * @param string $indexName The name of the index to check.
     * @return bool True if an index with that name exists, false otherwise.
     */
    final protected function indexExists(string $indexName): bool
    {

        $tableName = $this->getTableName();
        $indexName = Util::cleanSqlIdentifier($indexName);

        if (isset($this->indexCached[$indexName])) {
            return !empty($this->indexCached[$indexName]);
        }

        $query = $this->wpdb->prepare("SHOW INDEX FROM `$tableName` WHERE Key_name = %s", $indexName);
        $result = $this->wpdb->get_row($query, ARRAY_A);

        $this->indexCached[$indexName] = empty($result) ? false : [
            'Non_unique' => $result['Non_unique'] ?? '0',
            'Key_name' => $result['Key_name'] ?? $indexName,
            'Index_type' => $result['Index_type'] ?? 'BTREE',
        ];

        return !empty($result);
    }

    /**
     * Checks if an index of a specific type exists on the table. This is the core checking method.
     *
     * @param string $indexName The name of the index to check.
     * @param string $indexType The type of index, using one of the self::INDEX_TYPE_* constants.
     * @return bool True if an index of the specified name and type exists, false otherwise.
     */
    final protected function indexExistsByType(
        string $indexName,
        string $indexType = self::INDEX_TYPE_INDEX
    ): bool {
        // 1. Ensure the cache is populated by calling indexExists first.
        if (!$this->indexExists($indexName)) {
            return false;
        }

        // 2. Now, reliably get the details from the cache.
        $indexName = Util::cleanSqlIdentifier($indexName);
        $indexInfo = $this->indexCached[$indexName];

        if (empty($indexInfo)) {
            return false; // Unlikely.
        }

        // 3. Perform the logic check on the cached data.
        return match ($indexType) {
            self::INDEX_TYPE_UNIQUE => '0' === $indexInfo['Non_unique'] && 'PRIMARY' !== $indexInfo['Key_name'],
            self::INDEX_TYPE_FULLTEXT => 'FULLTEXT' === $indexInfo['Index_type'],
            self::INDEX_TYPE_SPATIAL => 'SPATIAL' === $indexInfo['Index_type'],
            default => '0' !== $indexInfo['Non_unique'] && 'BTREE' === $indexInfo['Index_type'],
        };
    }

    /**
     * Adds an index of a specific type to the table. This is the core adding method.
     *
     * @param string|string[] $columns Column name or an array of column names.
     * @param string $indexType The type of index, using one of the self::INDEX_TYPE_* constants.
     * @param string|null $indexName Name of the index (optional for autogenerated name).
     *
     * @return bool True on success or if the index already existed, false on failure.
     */
    final protected function addIndex(
        string|array $columns,
        string $indexType = self::INDEX_TYPE_INDEX,
        ?string $indexName = null
    ): bool {
        $tableName = $this->getTableName();
        if (empty($indexName)) {
            $indexTypePrefix = match ($indexType) {
                self::INDEX_TYPE_UNIQUE => 'uniq',
                self::INDEX_TYPE_FULLTEXT => 'ft',
                self::INDEX_TYPE_SPATIAL => 'sp',
                default => 'idx',
            };

            $indexName = Util::generateSqlIndexName(
                $this->getTableName(false),
                $columns,
                $indexTypePrefix
            );
        }

        if ($this->indexExists($indexName)) {
            $this->logger?->notice('Skipped adding index because an index with that name already exists.', [
                'table' => $tableName,
                'index' => $indexName,
                'when_installing' => $this->versionBeingInstalled,
                'site_id' => $this->getCurrentSiteId()
            ]);
            return true;
        }

        $indexTypeUpper = strtoupper($indexType);
        $validIndexTypes = [
            self::INDEX_TYPE_INDEX,
            self::INDEX_TYPE_UNIQUE,
            self::INDEX_TYPE_FULLTEXT,
            self::INDEX_TYPE_SPATIAL
        ];
        if (!in_array($indexTypeUpper, $validIndexTypes, true)) {
            $this->logger?->warning('Failed to add index: invalid index type provided.', [
                'table' => $tableName,
                'index' => $indexName,
                'type' => $indexType,
                'when_installing' => $this->versionBeingInstalled,
                'site_id' => $this->getCurrentSiteId()
            ]);
            return false;
        }

        $columns = is_array($columns) ? $columns : [$columns];
        $columnList = array_map(fn($col) => '`' . Util::cleanSqlIdentifier($col) . '`', $columns);
        if (empty($columnList)) {
            return false;
        }

        $columnsSql = implode(',', $columnList);
        $typeKeyword = (self::INDEX_TYPE_INDEX === $indexTypeUpper) ? '' : $indexTypeUpper;
        $sqlStatement = "ALTER TABLE `$tableName` ADD $typeKeyword INDEX `$indexName` ($columnsSql)";

        $hasAdded = false !== $this->wpdb->query($sqlStatement);
        if ($hasAdded) {
            $btreeIndexType = [
                self::INDEX_TYPE_INDEX,
                self::INDEX_TYPE_UNIQUE,
            ];
            // Populate the cache with the known information to prevent a subsequent query.
            $this->indexCached[$indexName] = [
                'Non_unique' => ($indexTypeUpper === self::INDEX_TYPE_UNIQUE) ? '0' : '1',
                'Key_name' => $indexName,
                'Index_type' => in_array($indexTypeUpper, $btreeIndexType, true) ? 'BTREE' : $indexTypeUpper,
            ];
        }

        return $hasAdded;
    }

    /**
     * Drops any named index (INDEX, UNIQUE, FULLTEXT, SPATIAL) from the table.
     *
     * @param string $indexName The name of the index to drop.
     * @return bool True on success or if the index didn't exist, false on failure.
     */
    final protected function dropIndex(string $indexName): bool
    {
        $indexName = Util::cleanSqlIdentifier($indexName);
        if ('PRIMARY' === strtoupper($indexName)) {
            return $this->dropPrimaryKey();
        }

        $tableName = $this->getTableName();
        if (!$this->indexExists($indexName)) {
            $this->logger?->notice('Skipped dropping index because it does not exist.', [
                'table' => $tableName,
                'index' => $indexName,
                'when_installing' => $this->versionBeingInstalled,
                'site_id' => $this->getCurrentSiteId()
            ]);
            return true;
        }

        $query = "ALTER TABLE `$tableName` DROP INDEX `$indexName`";
        $hasDropped = false !== $this->wpdb->query($query);
        if ($hasDropped) {
            $this->indexCached[$indexName] = false;
        }
        return $hasDropped;
    }

    /**
     * Checks if a PRIMARY KEY exists on the table.
     *
     * @return bool True if a primary key exists, false otherwise.
     */
    final protected function primaryKeyExists(): bool
    {
        return $this->indexExists('PRIMARY');
    }

    /**
     * Adds a PRIMARY KEY to the table.
     *
     * @param string|string[] $columns Column name or an array of column names for a composite primary key.
     * @return bool True on success or if a PK already exists, false on failure.
     */
    final protected function addPrimaryKey(string|array $columns): bool
    {
        $tableName = $this->getTableName();
        if ($this->primaryKeyExists()) {
            $this->logger?->notice('Skipped adding PRIMARY KEY because one already exists.', [
                'table' => $tableName,
                'when_installing' => $this->versionBeingInstalled,
                'site_id' => $this->getCurrentSiteId()
            ]);
            return true;
        }

        $columns = is_array($columns) ? $columns : [$columns];
        $columnList = array_map(fn($col) => '`' . Util::cleanSqlIdentifier($col) . '`', $columns);
        if (empty($columnList)) {
            return false;
        }

        $query = "ALTER TABLE `$tableName` ADD PRIMARY KEY (" . implode(',', $columnList) . ')';
        $hasAdded = false !== $this->wpdb->query($query);
        if ($hasAdded) {
            $this->indexCached['PRIMARY'] = [
                'Non_unique' => '0',
                'Key_name' => 'PRIMARY',
                'Index_type' => 'BTREE'
            ];
        }
        return $hasAdded;
    }

    /**
     * Drops the PRIMARY KEY from the table.
     *
     * @return bool True on success or if no primary key exists, false on failure.
     */
    final protected function dropPrimaryKey(): bool
    {
        $tableName = $this->getTableName();
        if (!$this->primaryKeyExists()) {
            $this->logger?->notice('Skipped dropping PRIMARY KEY because one does not exist.', [
                'table' => $tableName,
                'when_installing' => $this->versionBeingInstalled,
                'site_id' => $this->getCurrentSiteId()
            ]);
            return true;
        }

        $hasDropped = false !== $this->wpdb->query("ALTER TABLE `$tableName` DROP PRIMARY KEY");
        if ($hasDropped) {
            $this->indexCached['PRIMARY'] = false;
        }
        return $hasDropped;
    }

    /**
     * A convenience wrapper to check if a UNIQUE index exists.
     *
     * @param string $indexName The name of the unique index.
     * @return bool True if the unique index exists, false otherwise.
     */
    final protected function uniqueKeyExists(string $indexName): bool
    {
        return $this->indexExistsByType($indexName, self::INDEX_TYPE_UNIQUE);
    }

    /**
     * A convenience wrapper to add a UNIQUE index.
     *
     * @param string|string[] $columns Column name or an array of column names.
     * @param string|null $indexName Name of the unique index (optional for autogenerated name).
     * @return bool True on success or if the index already existed, false on failure.
     */
    final protected function addUniqueKey(string|array $columns, ?string $indexName = null): bool
    {
        return $this->addIndex($columns, self::INDEX_TYPE_UNIQUE, $indexName);
    }

    /*
     |--------------------------------------------------------------------------
     | Foreign Key Management Methods
     |--------------------------------------------------------------------------
     */

    /**
     * Checks if a foreign key constraint with a specific name exists on this table.
     *
     * This method queries the information_schema, which is the standard and most reliable
     * way to check for the existence of constraints across MySQL and MariaDB.
     *
     * @param string $fkName The name of the foreign key constraint to check.
     * @return bool True if the foreign key exists, false otherwise.
     */
    final protected function foreignKeyExists(string $fkName): bool
    {
        $fkName = Util::cleanSqlIdentifier($fkName);
        if ('' === $fkName) {
            return false;
        }

        if (isset($this->fkExistsCached[$fkName])) {
            // If we have a cached result, return it immediately.
            return $this->fkExistsCached[$fkName];
        }

        $query = $this->wpdb->prepare(
            'SELECT COUNT(*) FROM `information_schema`.`REFERENTIAL_CONSTRAINTS`
				WHERE `CONSTRAINT_SCHEMA` = DATABASE()
				AND `TABLE_NAME` = %s
				AND `CONSTRAINT_NAME` = %s',
            $this->getTableName(),
            $fkName
        );

        $count = $this->wpdb->get_var($query);
        $this->fkExistsCached[$fkName] = !empty($count);

        return $this->fkExistsCached[$fkName];
    }

    /**
     * Adds a foreign key by referencing another TableInterface object using conventions.
     *
     * This is the simplest way to create a foreign key. It:
     * 1. Determines the foreign key column name in THIS table by calling `$referencedTable->getForeignKeyName()`.
     * 2. Determines the referenced column name by calling `$referencedTable->getPrimaryKey()`.
     * 3. Generates a standard name for the foreign key constraint.
     *
     * For more complex scenarios (e.g., linking to a non-primary key), use `addForeignKey()`.
     *
     * @param TableInterface $referencedTable The Table object for the table being referenced.
     * @param string         $onDelete        Optional. The action to take on DELETE. Defaults to 'RESTRICT'.
     * @param string         $onUpdate        Optional. The action to take on UPDATE. Defaults to 'RESTRICT'.
     * @param string|null    $constraintName  Optional. The name for the foreign key constraint. If null, a name
     *                                        will be generated automatically based on conventions.
     *
     * @return bool True on success or if the constraint already existed, false on failure.
     */
    final protected function addForeignKeyToTable(
        TableInterface $referencedTable,
        string $onDelete = 'RESTRICT',
        string $onUpdate = 'RESTRICT',
        ?string $constraintName = null
    ): bool {
        // 1. Get all necessary names from the referenced table object based on conventions.
        $localColumnName = $referencedTable->getForeignKeyName();
        $refTableName = $referencedTable->getTableName();
        $refColumnName = $referencedTable->getPrimaryKey();

        // 2. Delegate the actual work to the primitive string-based method.
        //    The constraint name is auto-generated by addForeignKey if not provided.
        return $this->addForeignKey(
            $localColumnName,
            $refTableName,
            $refColumnName,
            $constraintName,
            $onDelete,
            $onUpdate
        );
    }

    /**
     * Adds a foreign key constraint to this table using explicit string identifiers.
     *
     * This is the flexible, primitive method for creating foreign keys.
     *
     * @param string      $columnName           The name of the column in this table that will be the foreign key.
     * @param string      $referencedTableName  The full name of the table being referenced.
     * @param string      $referencedColumnName The name of the column in the referenced table.
     * @param string|null $constraintName       Optional. The name for the foreign key constraint. If null, a name
     *                                          will be generated automatically.
     * @param string      $onDelete             Optional. The action to take on DELETE. Defaults to 'RESTRICT'.
     * @param string      $onUpdate             Optional. The action to take on UPDATE. Defaults to 'RESTRICT'.
     *
     * @return bool True on success or if the constraint already existed, false on failure.
     */
    final protected function addForeignKey(
        string $columnName,
        string $referencedTableName,
        string $referencedColumnName,
        ?string $constraintName = null,
        string $onDelete = 'RESTRICT',
        string $onUpdate = 'RESTRICT'
    ): bool {

        // 1. Sanitize and validate all identifiers and actions.
        $thisTableName = $this->getTableName();
        $columnName = Util::cleanSqlIdentifier($columnName);
        $refTableName = Util::cleanSqlIdentifier($referencedTableName);
        $refColumnName = Util::cleanSqlIdentifier($referencedColumnName);
        $constraintName = Util::cleanSqlIdentifier($constraintName ?? Util::generateSqlIndexName(
            $this->getTableName(false),
            $columnName,
            'fk'
        ));

        if (empty($columnName) || empty($refTableName) || empty($refColumnName) || empty($constraintName)) {
            $this->logger?->warning(
                'Could not add foreign key due to one or more empty identifiers.',
                [
                    'table' => $thisTableName,
                    'column' => $columnName,
                    'ref_table' => $referencedTableName,
                    'when_installing' => $this->versionBeingInstalled,
                    'site_id' => $this->getCurrentSiteId(),
                ]
            );
            return false;
        }

        $validActions = ['RESTRICT', 'CASCADE', 'SET NULL', 'NO ACTION'];
        $onDeleteAction = strtoupper($onDelete);
        $onUpdateAction = strtoupper($onUpdate);
        if (!in_array($onDeleteAction, $validActions, true) || !in_array($onUpdateAction, $validActions, true)) {
            $this->logger?->error('Could not add foreign key due to invalid ON DELETE or ON UPDATE action.', [
                'table' => $thisTableName,
                'constraint' => $constraintName,
                'on_delete' => $onDelete,
                'on_update' => $onUpdate,
            ]);
            return false;
        }

        // 2. Make the operation idempotent by checking for existence first.
        if ($this->foreignKeyExists($constraintName)) {
            $this->logger?->notice(
                'Skipped adding foreign key because a constraint with that name already exists.',
                [
                    'table' => $thisTableName,
                    'fk_name' => $constraintName,
                    'when_installing' => $this->versionBeingInstalled,
                    'site_id' => $this->getCurrentSiteId(),
                ]
            );
            return true;
        }

        // 3. Construct and execute the SQL query.
        $sql = "ALTER TABLE `$thisTableName`
				ADD CONSTRAINT `$constraintName`
				FOREIGN KEY (`$columnName`)
				REFERENCES `$refTableName` (`$refColumnName`)
				ON DELETE $onDeleteAction
				ON UPDATE $onUpdateAction";

        $hasAdded = false !== $this->wpdb->query($sql);

        if ($hasAdded) {
            $this->fkExistsCached[$constraintName] = true;
        }

        return $hasAdded;
    }

    /**
     * Drops a foreign key constraint from this table.
     *
     * Note: In MySQL, the `$fkName` refers to the constraint's symbol/name, not an index name.
     * Dropping a foreign key does not automatically drop the underlying index that may have been
     * created with it. If the index is no longer needed, it should be dropped separately
     * using `dropIndex()`.
     *
     * @param string $fkName The name of the foreign key constraint to drop.
     * @return bool True on success or if the constraint did not exist, false on failure.
     */
    final protected function dropForeignKey(string $fkName): bool
    {
        $constraintName = Util::cleanSqlIdentifier($fkName);
        if (empty($constraintName)) {
            return false;
        }

        $tableName = $this->getTableName();
        // Make the operation idempotent.
        if (!$this->foreignKeyExists($constraintName)) {
            $this->logger?->notice('Skipped dropping foreign key because it does not exist.', [
                'table' => $tableName,
                'fk_name' => $constraintName,
                'when_installing' => $this->versionBeingInstalled,
                'site_id' => $this->getCurrentSiteId()
            ]);
            return true;
        }

        $query = "ALTER TABLE `$tableName` DROP FOREIGN KEY `$constraintName`";
        $hasDropped = false !== $this->wpdb->query($query);

        if ($hasDropped) {
            $this->fkExistsCached[$constraintName] = false;
        }

        return $hasDropped;
    }

    /*
    |--------------------------------------------------------------------------
    | MySQL & MariaDB Compatibility Methods
    |--------------------------------------------------------------------------
    */

    /**
     * Check if the current database server is MariaDB.
     *
     * @return bool True if the server is MariaDB, false if it's MySQL or another variant.
     */
    final protected function isMariaDb(): bool
    {
        if (!isset(self::$isMariaDbInstallation)) {
            $infoString = strtolower((string) $this->wpdb->get_var('SELECT @@version_comment'));
            self::$isMariaDbInstallation = str_contains($infoString, 'mariadb');
        }

        return self::$isMariaDbInstallation;
    }

    /**
     * Get the MySQL-compatible server version number.
     *
     * @return string Server version number (e.g., "8.0.36", "10.11.6").
     */
    final protected function getMysqlOrMariaDbVersion(): string
    {
        if (!isset(self::$mysqlServerVersion)) {
            $versionString = strtolower((string) $this->wpdb->get_var('SELECT @@version'));
            self::$mysqlServerVersion = (string) preg_replace('/[^0-9.].*/', '', $versionString);
        }

        return self::$mysqlServerVersion;
    }

    /**
     * Check if the current MySQL server version is at least the specified version.
     *
     * @param string $version The minimum version number to check.
     * @return bool True if the server is MySQL and its version is at least the specified version.
     */
    final protected function isMysqlAtLeast(string $version): bool
    {
        $currentVersion = $this->getMysqlOrMariaDbVersion();
        return !$this->isMariaDb() && !empty($currentVersion) && version_compare($currentVersion, $version, '>=');
    }

    /**
     * Check if the current MariaDB server version is at least the specified version.
     *
     * @param string $version The minimum version number to check.
     * @return bool True if the server is MariaDB and its version is at least the specified version.
     */
    final protected function isMariaDbAtLeast(string $version): bool
    {
        $currentVersion = $this->getMysqlOrMariaDbVersion();
        return $this->isMariaDb() && !empty($currentVersion) && version_compare($currentVersion, $version, '>=');
    }
}
