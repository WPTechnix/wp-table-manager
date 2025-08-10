<?php

/**
 * A fluent interface for building MySQL CREATE TABLE statements.
 */

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Schema;

use WPTechnix\WPTableManager\Exceptions\SchemaException;
use WPTechnix\WPTableManager\Util;
use wpdb;

/**
 * Class CreateTableSchema
 *
 * A fluent interface for building MySQL CREATE TABLE statements.
 */
class CreateTableSchema
{
    /**
     * The columns to be added to the table.
     *
     * @var array<int, ColumnDefinition>
     */
    protected array $columns = [];

    /**
     * The indexes to be added to the table.
     *
     * @var array<int, IndexDefinition>
     */
    protected array $indexes = [];

    /**
     * The foreign keys to be added to the table.
     *
     * @var array<int, ForeignKeyDefinition>
     */
    protected array $foreignKeys = [];

    /**
     * The primary key columns.
     *
     * @var array<int, string>
     */
    protected array $primaryKey = [];

    /**
     * The storage engine for the table.
     *
     * @var string
     */
    protected string $engine = 'InnoDB';

    /**
     * The character set for the table.
     *
     * @var string
     */
    protected string $charset = 'utf8mb4';

    /**
     * The collation for the table.
     *
     * @var string
     */
    protected string $collation = 'utf8mb4_unicode_ci';

    /**
     * The table comment.
     *
     * @var string|null
     */
    protected ?string $comment = null;

    /**
     * Whether the table should be created if not exists.
     *
     * @var bool
     */
    protected bool $ifNotExists = false;

    /**
     * Whether the table should be temporary.
     *
     * @var bool
     */
    protected bool $temporary = false;

    /**
     * Auto increment starting value.
     *
     * @var int|null
     */
    protected ?int $autoIncrement = null;

    /**
     * Table row format.
     *
     * @var string|null
     */
    protected ?string $rowFormat = null;

    /**
     * Constructor.
     *
     * @param string $tableName The table name without wpdb prefix.
     * @param wpdb   $wpdb       The WordPress database object.
     */
    public function __construct(
        protected string $tableName,
        protected wpdb $wpdb
    ) {
        // Set defaults from wpdb if available.
        if (!empty($this->wpdb->charset)) {
            $this->charset = $this->wpdb->charset;
        }
        if (!empty($this->wpdb->collate)) {
            $this->collation = $this->wpdb->collate;
        }
    }

    /**
     * Get table name with or without $wpdb prefix.
     *
     * @param bool $withWpdbPrefix Whether to include $wpdb prefix.
     * @return string The table name with or without prefix.
     */
    public function getTableName(bool $withWpdbPrefix = true): string
    {
        $tableName = $this->tableName;

        if (! $withWpdbPrefix) {
            if (str_starts_with($tableName, $this->wpdb->prefix)) {
                $tableName = substr($tableName, strlen($this->wpdb->prefix));
            } elseif (str_starts_with($tableName, $this->wpdb->base_prefix)) {
                $tableName = substr($tableName, strlen($this->wpdb->base_prefix));
            }
        }

        return $tableName;
    }

    /**
     * Add a column and set the schema reference.
     *
     * @param ColumnDefinition $column The column to add.
     *
     * @return ColumnDefinition
     */
    protected function addColumn(ColumnDefinition $column): ColumnDefinition
    {
        $column->setSchema($this);
        $this->columns[] = $column;
        return $column;
    }

    /**
     * Set the table to be created only if it doesn't exist.
     *
     * @return $this
     */
    public function ifNotExists(): self
    {
        $this->ifNotExists = true;
        return $this;
    }

    /**
     * Set the table as temporary.
     *
     * @return $this
     */
    public function temporary(): self
    {
        $this->temporary = true;
        return $this;
    }

    /**
     * Add an auto-incrementing BIGINT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function id(string $column = 'id'): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'BIGINT');
        $definition->unsigned()->autoIncrement()->primary();
        $this->primaryKey[] = $column;
        return $this->addColumn($definition);
    }

    /**
     * Add a BIGINT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function bigInteger(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'BIGINT');
        return $this->addColumn($definition);
    }

    /**
     * Add an INT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function integer(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'INT');
        return $this->addColumn($definition);
    }

    /**
     * Add a TINYINT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function tinyInteger(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'TINYINT');
        return $this->addColumn($definition);
    }

    /**
     * Add a SMALLINT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function smallInteger(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'SMALLINT');
        return $this->addColumn($definition);
    }

    /**
     * Add a MEDIUMINT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function mediumInteger(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'MEDIUMINT');
        return $this->addColumn($definition);
    }

    /**
     * Add a VARCHAR column.
     *
     * @param string   $column Column name.
     * @param int|null $length Column length.
     *
     * @return ColumnDefinition
     */
    public function string(string $column, ?int $length = 191): ColumnDefinition
    {
        $type = sprintf('VARCHAR(%d)', $length);
        $definition = new ColumnDefinition($column, $type);
        return $this->addColumn($definition);
    }

    /**
     * Add a CHAR column.
     *
     * @param string   $column Column name.
     * @param int|null $length Column length.
     *
     * @return ColumnDefinition
     */
    public function char(string $column, ?int $length = 1): ColumnDefinition
    {
        $type = sprintf('CHAR(%d)', $length);
        $definition = new ColumnDefinition($column, $type);
        return $this->addColumn($definition);
    }

    /**
     * Add a TEXT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function text(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'TEXT');
        return $this->addColumn($definition);
    }

    /**
     * Add a TINYTEXT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function tinyText(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'TINYTEXT');
        return $this->addColumn($definition);
    }

    /**
     * Add a MEDIUMTEXT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function mediumText(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'MEDIUMTEXT');
        return $this->addColumn($definition);
    }

    /**
     * Add a LONGTEXT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function longText(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'LONGTEXT');
        return $this->addColumn($definition);
    }

    /**
     * Add a DECIMAL column.
     *
     * @param string $column Column name.
     * @param int    $total  Total digits.
     * @param int    $places Decimal places.
     *
     * @return ColumnDefinition
     */
    public function decimal(string $column, int $total = 8, int $places = 2): ColumnDefinition
    {
        $type = sprintf('DECIMAL(%d,%d)', $total, $places);
        $definition = new ColumnDefinition($column, $type);
        return $this->addColumn($definition);
    }

    /**
     * Add a FLOAT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function float(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'FLOAT');
        return $this->addColumn($definition);
    }

    /**
     * Add a DOUBLE column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function double(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'DOUBLE');
        return $this->addColumn($definition);
    }

    /**
     * Add a BOOLEAN column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function boolean(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'BOOLEAN');
        return $this->addColumn($definition);
    }

    /**
     * Add a DATE column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function date(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'DATE');
        return $this->addColumn($definition);
    }

    /**
     * Add a DATETIME column.
     *
     * @param string   $column    Column name.
     * @param int|null $precision Fractional seconds precision.
     *
     * @return ColumnDefinition
     */
    public function datetime(string $column, ?int $precision = null): ColumnDefinition
    {
        $type = $precision !== null ? sprintf('DATETIME(%d)', $precision) : 'DATETIME';
        $definition = new ColumnDefinition($column, $type);
        return $this->addColumn($definition);
    }

    /**
     * Add a TIMESTAMP column.
     *
     * @param string   $column    Column name.
     * @param int|null $precision Fractional seconds precision.
     *
     * @return ColumnDefinition
     */
    public function timestamp(string $column, ?int $precision = null): ColumnDefinition
    {
        $type = $precision !== null ? sprintf('TIMESTAMP(%d)', $precision) : 'TIMESTAMP';
        $definition = new ColumnDefinition($column, $type);
        return $this->addColumn($definition);
    }

    /**
     * Add a TIME column.
     *
     * @param string   $column    Column name.
     * @param int|null $precision Fractional seconds precision.
     *
     * @return ColumnDefinition
     */
    public function time(string $column, ?int $precision = null): ColumnDefinition
    {
        $type = $precision !== null ? sprintf('TIME(%d)', $precision) : 'TIME';
        $definition = new ColumnDefinition($column, $type);
        return $this->addColumn($definition);
    }

    /**
     * Add a YEAR column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function year(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'YEAR');
        return $this->addColumn($definition);
    }

    /**
     * Add a JSON column.
     *
     * Note: JSON column type requires MySQL 5.7.8+ or MariaDB 10.2.7+
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function json(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'JSON');
        return $this->addColumn($definition);
    }

    /**
     * Add a BLOB column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function blob(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'BLOB');
        return $this->addColumn($definition);
    }

    /**
     * Add a TINYBLOB column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function tinyBlob(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'TINYBLOB');
        return $this->addColumn($definition);
    }

    /**
     * Add a MEDIUMBLOB column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function mediumBlob(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'MEDIUMBLOB');
        return $this->addColumn($definition);
    }

    /**
     * Add a LONGBLOB column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function longBlob(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'LONGBLOB');
        return $this->addColumn($definition);
    }

    /**
     * Add a BINARY column.
     *
     * @param string $column Column name.
     * @param int    $length Column length.
     *
     * @return ColumnDefinition
     */
    public function binary(string $column, int $length = 255): ColumnDefinition
    {
        $type = sprintf('BINARY(%d)', $length);
        $definition = new ColumnDefinition($column, $type);
        return $this->addColumn($definition);
    }

    /**
     * Add a VARBINARY column.
     *
     * @param string $column Column name.
     * @param int    $length Column length.
     *
     * @return ColumnDefinition
     */
    public function varBinary(string $column, int $length = 255): ColumnDefinition
    {
        $type = sprintf('VARBINARY(%d)', $length);
        $definition = new ColumnDefinition($column, $type);
        return $this->addColumn($definition);
    }

    /**
     * Add a GEOMETRY column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function geometry(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'GEOMETRY');
        return $this->addColumn($definition);
    }

    /**
     * Add a POINT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function point(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'POINT');
        return $this->addColumn($definition);
    }

    /**
     * Add a LINESTRING column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function lineString(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'LINESTRING');
        return $this->addColumn($definition);
    }

    /**
     * Add a POLYGON column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function polygon(string $column): ColumnDefinition
    {
        $definition = new ColumnDefinition($column, 'POLYGON');
        return $this->addColumn($definition);
    }

    /**
     * Add an ENUM column.
     *
     * @param string               $column Column name.
     * @param array<int, string>   $values Allowed values.
     *
     * @return ColumnDefinition
     */
    public function enum(string $column, array $values): ColumnDefinition
    {
        $escapedValues = array_map(fn($val) => "'" . addslashes($val) . "'", $values);
        $type = sprintf('ENUM(%s)', implode(',', $escapedValues));
        $definition = new ColumnDefinition($column, $type);
        return $this->addColumn($definition);
    }

    /**
     * Add a SET column.
     *
     * @param string               $column Column name.
     * @param array<int, string>   $values Allowed values.
     *
     * @return ColumnDefinition
     */
    public function set(string $column, array $values): ColumnDefinition
    {
        $escapedValues = array_map(fn($val) => "'" . addslashes($val) . "'", $values);
        $type = sprintf('SET(%s)', implode(',', $escapedValues));
        $definition = new ColumnDefinition($column, $type);
        return $this->addColumn($definition);
    }

    /**
     * Add a UUID column as CHAR(36).
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */
    public function uuid(string $column): ColumnDefinition
    {
        return $this->char($column, 36);
    }

    /**
     * Add created_at and updated_at timestamp columns.
     *
     * @param bool $useDatetime If true, use the DATETIME type instead of TIMESTAMP.
     *                           Defaults to true.
     *
     * @return $this
     */
    public function timestamps(bool $useDatetime = true): self
    {
        if ($useDatetime) {
            $this->datetime('created_at')->nullable()->default('CURRENT_TIMESTAMP', true);
            $this->datetime('updated_at')->nullable()->default('CURRENT_TIMESTAMP', true)->onUpdateCurrentTimestamp();
        } else {
            $this->timestamp('created_at')->nullable()->default('CURRENT_TIMESTAMP', true);
            $this->timestamp('updated_at')->nullable()->default('CURRENT_TIMESTAMP', true)->onUpdateCurrentTimestamp();
        }

        return $this;
    }

    /**
     * Add a soft delete timestamp column.
     *
     * @param string $column      Column name.
     * @param bool   $useDatetime If true, use the DATETIME type instead of TIMESTAMP.
     *
     * @return ColumnDefinition
     */
    public function softDeletes(string $column = 'deleted_at', bool $useDatetime = true): ColumnDefinition
    {
        if ($useDatetime) {
            return $this->datetime($column)->nullable();
        } else {
            return $this->timestamp($column)->nullable();
        }
    }

    /**
     * Add morphable columns for polymorphic relationships.
     *
     * @param string $name The base name for the morph columns.
     *
     * @return $this
     */
    public function morphs(string $name): self
    {
        $this->bigInteger("{$name}_id")->unsigned();
        $this->string("{$name}_type");
        $this->index(["{$name}_id", "{$name}_type"]);
        return $this;
    }

    /**
     * Add nullable morphable columns for polymorphic relationships.
     *
     * @param string $name The base name for the morph columns.
     *
     * @return $this
     */
    public function nullableMorphs(string $name): self
    {
        $this->bigInteger("{$name}_id")->unsigned()->nullable();
        $this->string("{$name}_type")->nullable();
        $this->index(["{$name}_id", "{$name}_type"]);
        return $this;
    }

    /**
     * Add a primary key.
     *
     * @param string|array<int, string> $columns Column name(s).
     *
     * @return $this
     */
    public function primary(string|array $columns): self
    {
        $this->primaryKey = is_array($columns) ? $columns : [$columns];
        return $this;
    }

    /**
     * Add an index.
     *
     * @param string|array<int, string> $columns Column name(s).
     * @param string|null               $name    Index name.
     *
     * @return $this
     */
    public function index(string|array $columns, ?string $name = null): self
    {
        $columns = is_array($columns) ? $columns : [$columns];

        $name = $name ?? Util::generateSqlIndexName($this->getTableName(false), $columns, 'idx');

        $this->indexes[] = new IndexDefinition($name, $columns, 'INDEX');
        return $this;
    }

    /**
     * Add a unique index.
     *
     * @param string|array<int, string> $columns Column name(s).
     * @param string|null               $name    Index name.
     *
     * @return $this
     */
    public function unique(string|array $columns, ?string $name = null): self
    {
        $columns = is_array($columns) ? $columns : [$columns];

        $name = $name ?? Util::generateSqlIndexName($this->getTableName(false), $columns, 'uniq');

        $this->indexes[] = new IndexDefinition($name, $columns, 'UNIQUE');
        return $this;
    }

    /**
     * Add a fulltext index.
     *
     * @param string|array<int, string> $columns Column name(s).
     * @param string|null               $name    Index name.
     *
     * @return $this
     */
    public function fulltext(string|array $columns, ?string $name = null): self
    {
        $columns = is_array($columns) ? $columns : [$columns];

        $name = $name ?? Util::generateSqlIndexName($this->getTableName(false), $columns, 'ft');

        $this->indexes[] = new IndexDefinition($name, $columns, 'FULLTEXT');
        return $this;
    }

    /**
     * Add a spatial index.
     *
     * @param string|array<int, string> $columns Column name(s).
     * @param string|null               $name    Index name.
     *
     * @return $this
     */
    public function spatial(string|array $columns, ?string $name = null): self
    {
        $columns = is_array($columns) ? $columns : [$columns];

        $name = $name ?? Util::generateSqlIndexName($this->getTableName(false), $columns, 'sp');

        $this->indexes[] = new IndexDefinition($name, $columns, 'SPATIAL');
        return $this;
    }

    /**
     * Add a foreign key constraint.
     *
     * @param string      $column Column name.
     * @param string|null $name   Constraint name.
     *
     * @return ForeignKeyDefinition
     */
    public function foreign(string $column, ?string $name = null): ForeignKeyDefinition
    {
        $name = $name ?? Util::generateSqlIndexName($this->getTableName(false), $column, 'fk');

        $foreignKey = new ForeignKeyDefinition($name, $column);
        $this->foreignKeys[] = $foreignKey;
        return $foreignKey;
    }

    /**
     * Set the storage engine.
     *
     * @param string $engine Engine name.
     *
     * @return $this
     */
    public function engine(string $engine): self
    {
        $this->engine = $engine;
        return $this;
    }

    /**
     * Set the character set.
     *
     * @param string $charset Character set.
     *
     * @return $this
     */
    public function charset(string $charset): self
    {
        $this->charset = $charset;
        return $this;
    }

    /**
     * Set the collation.
     *
     * @param string $collation Collation.
     *
     * @return $this
     */
    public function collation(string $collation): self
    {
        $this->collation = $collation;
        return $this;
    }

    /**
     * Set the table comment.
     *
     * @param string $comment Comment.
     *
     * @return $this
     */
    public function comment(string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Set the auto increment starting value.
     *
     * @param int $value Auto increment starting value.
     *
     * @return $this
     */
    public function autoIncrement(int $value): self
    {
        $this->autoIncrement = $value;
        return $this;
    }

    /**
     * Set the row format.
     *
     * @param string $format Row format (DYNAMIC, FIXED, COMPRESSED, REDUNDANT, COMPACT).
     *
     * @return $this
     */
    public function rowFormat(string $format): self
    {
        $validFormats = ['DYNAMIC', 'FIXED', 'COMPRESSED', 'REDUNDANT', 'COMPACT'];
        $format = strtoupper($format);
        if (!in_array($format, $validFormats, true)) {
            throw new SchemaException(
                "Invalid row format: {$format}. Valid formats are: " . implode(', ', $validFormats)
            );
        }

        $this->rowFormat = $format;
        return $this;
    }

    /**
     * Process columns marked for unique/fulltext indexes after schema building.
     *
     * @return void
     */
    protected function processColumnIndexes(): void
    {
        foreach ($this->columns as $column) {
            // Add unique indexes for columns marked as unique (if not already added)
            if ($column->isUnique()) {
                $indexExists = false;
                foreach ($this->indexes as $index) {
                    if ($index->getColumns() === [$column->getName()] && $index->isUnique()) {
                        $indexExists = true;
                        break;
                    }
                }
                if (!$indexExists) {
                    $this->unique($column->getName());
                }
            }

            // Add fulltext indexes for columns marked as fulltext (if not already added)
            if ($column->isFulltext()) {
                $indexExists = false;
                foreach ($this->indexes as $index) {
                    if ($index->getColumns() === [$column->getName()] && $index->isFulltext()) {
                        $indexExists = true;
                        break;
                    }
                }
                if (!$indexExists) {
                    $this->fulltext($column->getName());
                }
            }

            // Add regular indexes for columns marked for indexing (if not already added)
            if ($column->hasIndex()) {
                $indexExists = false;
                foreach ($this->indexes as $index) {
                    if ($index->getColumns() === [$column->getName()] && $index->getType() === 'INDEX') {
                        $indexExists = true;
                        break;
                    }
                }
                if (!$indexExists) {
                    $this->index($column->getName());
                }
            }

            // Add single-column primary keys to primaryKey array
            if ($column->isPrimary() && !in_array($column->getName(), $this->primaryKey, true)) {
                $this->primaryKey[] = $column->getName();
            }
        }
    }

    /**
     * Generate the CREATE TABLE SQL statement.
     *
     * @return string
     *
     * @throws SchemaException If no columns are defined.
     */
    public function toSql(): string
    {
        if (empty($this->columns)) {
            throw new SchemaException('No columns defined for table ' . $this->tableName);
        }

        // Process any column-level index definitions
        $this->processColumnIndexes();

        $sqlParts = [];

        // Start building the CREATE TABLE statement.
        $createClause = $this->temporary ? 'CREATE TEMPORARY TABLE' : 'CREATE TABLE';
        if ($this->ifNotExists) {
            $createClause .= ' IF NOT EXISTS';
        }
        $sqlParts[] = sprintf('%s `%s` (', $createClause, $this->tableName);

        // Add columns.
        $columnDefinitions = [];
        $isComposite = count($this->primaryKey) > 1;

        foreach ($this->columns as $column) {
            $isPartOfComposite = $isComposite && in_array($column->getName(), $this->primaryKey, true);
            $columnDefinitions[] = '  ' . $column->toSql($isPartOfComposite);
        }

        // Add primary key if defined (for composite keys or explicitly set primary keys).
        if (!empty($this->primaryKey) && (count($this->primaryKey) > 1 || $this->isExplicitPrimaryKey())) {
            $pkColumns = array_map(fn($col) => '`' . $col . '`', $this->primaryKey);
            $columnDefinitions[] = '  PRIMARY KEY (' . implode(', ', $pkColumns) . ')';
        }

        // Add indexes.
        foreach ($this->indexes as $index) {
            $columnDefinitions[] = '  ' . $index->toSql();
        }

        // Add foreign keys.
        foreach ($this->foreignKeys as $foreignKey) {
            $columnDefinitions[] = '  ' . $foreignKey->toSql();
        }

        $sqlParts[] = implode(",\n", $columnDefinitions);
        $sqlParts[] = ')';

        // Add table options.
        $options = [];
        $options[] = 'ENGINE=' . $this->engine;
        $options[] = 'DEFAULT CHARSET=' . $this->charset;
        $options[] = 'COLLATE=' . $this->collation;

        if ($this->autoIncrement !== null) {
            $options[] = 'AUTO_INCREMENT=' . $this->autoIncrement;
        }

        if ($this->rowFormat !== null) {
            $options[] = 'ROW_FORMAT=' . $this->rowFormat;
        }

        if ($this->comment !== null) {
            $options[] = sprintf("COMMENT='%s'", addslashes($this->comment));
        }

        $sqlParts[] = implode(' ', $options);
        return implode("\n", $sqlParts) . ';';
    }

    /**
     * Check if the primary key was explicitly set (not just from column->primary()).
     *
     * @return bool
     */
    protected function isExplicitPrimaryKey(): bool
    {
        // If there's only one primary key column and it's marked as primary on the column,
        // then it's not explicitly set via primary() method
        if (count($this->primaryKey) === 1) {
            foreach ($this->columns as $column) {
                if ($column->getName() === $this->primaryKey[0] && $column->isPrimary()) {
                    return false; // Single column primary key, let the column handle it
                }
            }
        }
        return true; // Composite key or explicitly set primary key
    }
}
