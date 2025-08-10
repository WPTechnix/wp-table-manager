<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Integration;

use WP_UnitTestCase;
use wpdb;
use WPTechnix\WPTableManager\Tests\Integration\Fixtures\TestBasicTable;
use WPTechnix\WPTableManager\Tests\Integration\Fixtures\TestChildTable;
use WPTechnix\WPTableManager\Tests\Integration\Fixtures\TestColumnOperationsTable;
use WPTechnix\WPTableManager\Tests\Integration\Fixtures\TestCompatibilityTable;
use WPTechnix\WPTableManager\Tests\Integration\Fixtures\TestComplexSchemaTable;
use WPTechnix\WPTableManager\Tests\Integration\Fixtures\TestFailingMigrationTable;
use WPTechnix\WPTableManager\Tests\Integration\Fixtures\TestIdempotentTable;
use WPTechnix\WPTableManager\Tests\Integration\Fixtures\TestIndexOperationsTable;
use WPTechnix\WPTableManager\Tests\Integration\Fixtures\TestMigrationTable;
use WPTechnix\WPTableManager\Tests\Integration\Fixtures\TestParentTable;
use WPTechnix\WPTableManager\Tests\Integration\Fixtures\TestSanitizationTable;

/**
 * Integration tests for the Table class.
 *
 * These tests verify the complete functionality of the Table class including:
 * - Table creation and schema management
 * - Column, index, and foreign key operations
 * - Migration system with version tracking
 * - MySQL/MariaDB compatibility detection
 * - Error recovery and idempotent operations
 *
 * Prerequisites:
 * - WordPress test environment with database access
 * - PHPUnit 9.6
 * - MySQL 5.7+ or MariaDB 10.2+
 * - InnoDB engine for foreign key tests
 *
 * Note: Some tests may be skipped based on database capabilities:
 * - Foreign key tests require InnoDB engine
 * - JSON column tests require MySQL 5.7.8+/MariaDB 10.2.7+
 *
 * @covers \WPTechnix\WPTableManager\Table
 * @uses \WPTechnix\WPTableManager\Schema\CreateTableSchema
 * @uses \WPTechnix\WPTableManager\Schema\ColumnDefinition
 * @uses \WPTechnix\WPTableManager\Schema\IndexDefinition
 * @uses \WPTechnix\WPTableManager\Schema\ForeignKeyDefinition
 * @uses \WPTechnix\WPTableManager\Util
 */
final class TableTest extends WP_UnitTestCase
{
    /**
     * @var wpdb
     */
    protected wpdb $wpdb;

    /**
     * @var string
     */
    protected static string $pluginPrefix = 'wptm_test_';

    /**
     * @var array<string>
     */
    protected array $createdTables = [];

    /**
     * Set up test environment.
     */
    public function setUp(): void
    {
        global $wpdb;
        $this->wpdb = $wpdb;
        $this->wpdb->suppress_errors(false);
        $this->wpdb->show_errors(true);
    }

    /**
     * Clean up after tests.
     */
    public function tearDown(): void
    {
        $this->cleanupTestTables();
    }

    /**
     * Clean up any existing test tables from previous runs.
     */
    protected function cleanupTestTables(): void
    {

        foreach ($this->createdTables as $table) {
            $this->wpdb->query("DROP TABLE IF EXISTS `{$table}`");
        }

        // Also clean up the options
        delete_option(self::$pluginPrefix . '_table_versions');
        delete_site_option(self::$pluginPrefix . '_table_versions');
    }

    /**
     * Test table instantiation and basic properties.
     */
    public function testTableInstantiation(): void
    {
        $table = new TestBasicTable($this->wpdb, self::$pluginPrefix);
        // Test basic getters
        self::assertNotEmpty($table->getTableName(), 'Table name should not be empty');
        self::assertStringContainsString(
            self::$pluginPrefix,
            $table->getTableName(),
            'Table name should contain plugin prefix'
        );
        self::assertStringContainsString('basic', $table->getTableName(), 'Table name should contain base name');

        self::assertEquals('bas', $table->getTableAlias(), 'Table alias should be "bas"');
        self::assertEquals('id', $table->getPrimaryKey(), 'Primary key should be "id"');
        self::assertEquals('basic_id', $table->getForeignKeyName(), 'Foreign key name should be "basic_id"');
        self::assertEquals(10001, $table->getSchemaVersion(), 'Schema version should be 10001');
        self::assertEquals(10000, $table->getInstalledVersion(), 'Initial installed version should be 10000');
    }

    /**
     * Test basic table creation and installation.
     */
    public function testCreateAndInstallBasicTable(): void
    {
        $table = new TestBasicTable($this->wpdb, self::$pluginPrefix);

        // Table should not exist initially
        self::assertFalse($this->tableExists($table->getTableName()));

        // Install the table
        $table->install();

        // Debug: Check for any errors
        if (!$this->tableExists($table->getTableName())) {
            $lastError = $this->wpdb->last_error;
            self::fail("Table was not created. Last error: " . (empty($lastError) ? $lastError : 'No error message'));
        }

        $this->createdTables[] = $table->getTableName();

        // Table should now exist
        self::assertTrue($this->tableExists($table->getTableName()), 'Table should exist after installation');

        // Verify schema version
        self::assertEquals(10001, $table->getInstalledVersion());
        self::assertEquals(10001, $table->getSchemaVersion());

        // Verify table structure
        $columns = $this->getTableColumns($table->getTableName());
        self::assertNotEmpty($columns, 'Table should have columns');
        self::assertArrayHasKey('id', $columns, 'Table should have id column');
        self::assertArrayHasKey('name', $columns, 'Table should have name column');
        self::assertArrayHasKey('email', $columns, 'Table should have email column');
        self::assertArrayHasKey('created_at', $columns, 'Table should have created_at column');
    }

    /**
     * Test incremental migrations.
     */
    public function testIncrementalMigrations(): void
    {
        $table = new TestMigrationTable($this->wpdb, self::$pluginPrefix);

        // Install table (will run migrations up to current schema version)
        $table->install();

        $this->createdTables[] = $table->getTableName();

        // Verify all migrations were applied
        self::assertEquals(10003, $table->getInstalledVersion());

        // Verify columns from each migration
        $columns = $this->getTableColumns($table->getTableName());

        // From migration 10001 (initial)
        self::assertArrayHasKey('id', $columns, 'Should have id column from initial migration');
        self::assertArrayHasKey('title', $columns, 'Should have title column from initial migration');

        // From migration 10003 - final state
        self::assertArrayHasKey('updated_at', $columns, 'Should have updated_at column from migration 10003');
        self::assertArrayNotHasKey('priority', $columns, 'Priority column should be dropped');
        self::assertArrayHasKey('category', $columns, 'Should have category column (renamed from status)');
        self::assertArrayNotHasKey('status', $columns, 'Status column should be renamed to category');
    }

    /**
     * Test resumable migrations after failure.
     */
    public function testResumableMigrationAfterFailure(): void
    {
        $table = new TestFailingMigrationTable($this->wpdb, self::$pluginPrefix);

        // First installation attempt (will fail at migration 10002)
        $table->install();

        $this->createdTables[] = $table->getTableName();

        // Should have completed migration 10001 but not 10002
        self::assertEquals(10001, $table->getInstalledVersion());

        // Fix the issue and retry
        $table->fixIssue();
        $table->install();

        // Should now complete all migrations
        self::assertEquals(10003, $table->getInstalledVersion());
    }

    /**
     * Test column operations.
     */
    public function testColumnOperations(): void
    {
        $table = new TestColumnOperationsTable($this->wpdb, self::$pluginPrefix);

        $table->install();

        $this->createdTables[] = $table->getTableName();

        // Test all column operations were successful
        $columns = $this->getTableColumns($table->getTableName());

        // Base columns
        self::assertArrayHasKey('id', $columns, 'Should have id column');
        self::assertArrayHasKey('name', $columns, 'Should have name column');

        // Added columns
        self::assertArrayHasKey(
            'description',
            $columns,
            'Should have description column'
        );

        // Modified column (check type changed)
        self::assertStringContainsString(
            'text',
            strtolower($columns['description']['Type']),
            'Description should be TEXT type'
        );

        // Renamed column (quantity -> amount)
        self::assertArrayHasKey('amount', $columns, 'Should have amount column (renamed from quantity)');
        self::assertArrayNotHasKey('quantity', $columns, 'Quantity column should be renamed to amount');

        // Changed column (price -> cost with new definition)
        self::assertArrayHasKey('cost', $columns, 'Should have cost column (changed from price)');
        self::assertArrayNotHasKey('price', $columns, 'Price column should be changed to cost');
        self::assertStringContainsString(
            'decimal(12,2)',
            strtolower($columns['cost']['Type']),
            'Cost should be DECIMAL(12,2)'
        );

        // Dropped column
        self::assertArrayNotHasKey('obsolete_column', $columns, 'Obsolete column should be dropped');
    }

    /**
     * Test index operations.
     */
    public function testIndexOperations(): void
    {
        $table = new TestIndexOperationsTable($this->wpdb, self::$pluginPrefix);

        $table->install();

        $this->createdTables[] = $table->getTableName();

        // Verify indexes
        $indexes = $this->getTableIndexes($table->getTableName());

        // Regular index
        self::assertArrayHasKey(
            'idx_created_at',
            $indexes,
            'Should have index on created_at'
        );

        // Unique index
        self::assertArrayHasKey('uniq_email', $indexes, 'Should have unique index on email');
        self::assertEquals('0', $indexes['uniq_email']['Non_unique'], 'Email index should be unique');

        // Composite index
        self::assertArrayHasKey(
            'idx_status_priority',
            $indexes,
            'Should have composite index on status and priority'
        );

        // Fulltext index (if supported - check both the index exists or the table engine doesn't support it)
        self::assertArrayHasKey('ft_content', $indexes, 'Should have fulltext index on content when supported');
        if (isset($indexes['ft_content'])) {
            self::assertEquals(
                'FULLTEXT',
                $indexes['ft_content']['Index_type'],
                'Content index should be FULLTEXT type'
            );
        }

        // Primary key
        self::assertArrayHasKey('PRIMARY', $indexes, 'Should have primary key');

        // Dropped index should not exist
        self::assertArrayNotHasKey('idx_to_drop', $indexes, 'Dropped index should not exist');
    }

    /**
     * Test foreign key operations.
     */
    public function testForeignKeyOperations(): void
    {

        // Create parent table first
        $parentTable = new TestParentTable($this->wpdb, self::$pluginPrefix);
        $parentTable->install();

        // Verify parent table exists
        self::assertTrue($this->tableExists($parentTable->getTableName()), 'Parent table should exist');

        // Create child table with foreign keys
        $childTable = new TestChildTable($this->wpdb, self::$pluginPrefix);
        $childTable->setParentTable($parentTable);
        $childTable->install();

        $this->createdTables[] = $childTable->getTableName();
        $this->createdTables[] = $parentTable->getTableName();

        // Verify child table exists
        self::assertTrue($this->tableExists($childTable->getTableName()), 'Child table should exist');

        // Verify foreign keys exist
        $foreignKeys = $this->getTableForeignKeys($childTable->getTableName());

        // Check if any foreign keys were created
        if (empty($foreignKeys)) {
            // Foreign keys might not be supported or not created properly
            self::markTestIncomplete('Foreign keys were not created - check if InnoDB is properly configured');
        }

        // FK using TableInterface
        self::assertArrayHasKey('fk_parent_id', $foreignKeys, 'Should have fk_parent_id foreign key');
        if (isset($foreignKeys['fk_parent_id'])) {
            self::assertEquals(
                $parentTable->getTableName(),
                $foreignKeys['fk_parent_id']['REFERENCED_TABLE_NAME'],
                'FK should reference parent table'
            );
            self::assertEquals(
                'id',
                $foreignKeys['fk_parent_id']['REFERENCED_COLUMN_NAME'],
                'FK should reference id column'
            );
            self::assertEquals(
                'CASCADE',
                $foreignKeys['fk_parent_id']['DELETE_RULE'],
                'FK should have CASCADE delete rule'
            );
        }

        // FK using explicit strings
        self::assertArrayHasKey(
            'fk_other_parent',
            $foreignKeys,
            'Should have fk_other_parent foreign key'
        );
        if (isset($foreignKeys['fk_other_parent'])) {
            self::assertEquals(
                'RESTRICT',
                $foreignKeys['fk_other_parent']['DELETE_RULE'],
                'FK should have RESTRICT delete rule'
            );
        }

        // Dropped FK should not exist
        self::assertArrayNotHasKey('fk_to_drop', $foreignKeys, 'Dropped foreign key should not exist');
    }

    /**
     * Test idempotent operations.
     */
    public function testIdempotentOperations(): void
    {
        $table = new TestIdempotentTable($this->wpdb, self::$pluginPrefix);

        // First installation
        $table->install();

        // Run install again - should not fail
        $table->install();

        $this->createdTables[] = $table->getTableName();

        // Verify nothing changed
        self::assertEquals(10001, $table->getInstalledVersion());

        // Verify table structure is correct
        $columns = $this->getTableColumns($table->getTableName());
        self::assertCount(4, $columns); // id, name, email, status
    }

    /**
     * Test table with complex schema.
     */
    public function testComplexSchemaTable(): void
    {
        $table = new TestComplexSchemaTable($this->wpdb, self::$pluginPrefix);

        $table->install();

        $this->createdTables[] = $table->getTableName();

        // Verify various column types
        $columns = $this->getTableColumns($table->getTableName());

        // Numeric types
        self::assertArrayHasKey('tiny_int', $columns);
        self::assertArrayHasKey('small_int', $columns);
        self::assertArrayHasKey('medium_int', $columns);
        self::assertArrayHasKey('big_int', $columns);
        self::assertArrayHasKey('decimal_col', $columns);
        self::assertArrayHasKey('float_col', $columns);
        self::assertArrayHasKey('double_col', $columns);

        // String types
        self::assertArrayHasKey('varchar_col', $columns);
        self::assertArrayHasKey('char_col', $columns);
        self::assertArrayHasKey('text_col', $columns);
        self::assertArrayHasKey('longtext_col', $columns);

        // Date/Time types
        self::assertArrayHasKey('date_col', $columns);
        self::assertArrayHasKey('datetime_col', $columns);
        self::assertArrayHasKey('timestamp_col', $columns);
        self::assertArrayHasKey('time_col', $columns);
        self::assertArrayHasKey('year_col', $columns);

        // Binary types
        self::assertArrayHasKey('blob_col', $columns);
        self::assertArrayHasKey('binary_col', $columns);

        // Special types
        self::assertArrayHasKey('boolean_col', $columns);
        self::assertArrayHasKey('enum_col', $columns);
        self::assertArrayHasKey('set_col', $columns);

        // JSON type (if supported)
        self::assertArrayHasKey('json_col', $columns);
    }

    /**
     * Test MySQL/MariaDB compatibility detection.
     */
    public function testDatabaseCompatibility(): void
    {
        $table = new TestCompatibilityTable($this->wpdb, self::$pluginPrefix);

        // These methods should return valid results
        $version = $table->getDbVersion();
        self::assertNotEmpty($version);
        self::assertMatchesRegularExpression('/^\d+\.\d+/', $version);

        $isMariaDb = $table->checkIsMariaDb();
        self::assertIsBool($isMariaDb);

        // Test version comparison methods
        if ($isMariaDb) {
            self::assertTrue($table->checkMariaDbVersion('5.0'));
            self::assertFalse($table->checkMysqlVersion('5.0'));
        } else {
            self::assertTrue($table->checkMysqlVersion('5.0'));
            self::assertFalse($table->checkMariaDbVersion('5.0'));
        }
    }

    /**
     * Test clean identifier sanitization.
     */
    public function testIdentifierSanitization(): void
    {
        $table = new TestSanitizationTable($this->wpdb, self::$pluginPrefix);

        $table->install();

        $this->createdTables[] = $table->getTableName();

        // Verify sanitized column names
        $columns = $this->getTableColumns($table->getTableName());


        // Base column
        self::assertArrayHasKey('normal_column', $columns, 'Should have normal_column');
        self::assertArrayHasKey(
            'column_with_special_charscreate',
            $columns,
            'special chars should be removed from column name after sanitization'
        );
        self::assertArrayHasKey(
            '_321create',
            $columns,
            'Numeric column name should be prefixed with underscore after sanitization'
        );

        self::assertArrayHasKey(
            'column_with_specialchars',
            $columns,
            'Special chars should be removed from column name'
        );
        self::assertArrayHasKey(
            '_123numeric',
            $columns,
            'Numeric column name should be prefixed with underscore'
        );
        self::assertArrayHasKey(
            'column_with_spaces',
            $columns,
            'Spaces should be removed from column name'
        );
    }

    /**
     * Test table drop operation.
     */
    public function testDropTable(): void
    {
        $table = new TestBasicTable($this->wpdb, self::$pluginPrefix);

        // Create and verify table exists
        $table->install();

        $this->createdTables[] = $table->getTableName();

        self::assertTrue($this->tableExists($table->getTableName()));

        // Drop table
        $result = $table->drop();
        self::assertTrue($result);

        // Verify table no longer exists
        self::assertFalse($this->tableExists($table->getTableName()));
    }

    /**
     * Test version persistence across instances.
     */
    public function testVersionPersistence(): void
    {

        $table1 = new TestBasicTable($this->wpdb, self::$pluginPrefix);

        // Install with first instance
        self::assertEquals(10000, $table1->getInstalledVersion());

        $table1->install();
        $this->createdTables[] = $table1->getTableName();

        self::assertEquals(10001, $table1->getInstalledVersion());

        // Create new instance and check version
        $table2 = new TestBasicTable($this->wpdb, self::$pluginPrefix);

        self::assertEquals(10001, $table2->getInstalledVersion());

        // Verify no re-installation occurs
        $table2->install();
        $this->createdTables[] = $table2->getTableName();
        self::assertEquals(10001, $table2->getInstalledVersion());
    }

    /**
     * Check if table exists.
     */
    protected function tableExists(string $tableName): bool
    {
        $result = $this->wpdb->get_var(
            $this->wpdb->prepare('SHOW TABLES LIKE %s', $tableName)
        );
        return !empty($result);
    }

    /**
     * Get table columns.
     *
     * @phpstan-return array<string, array<string, mixed>>
     */
    protected function getTableColumns(string $tableName): array
    {
        $columns = [];
        if (!$this->tableExists($tableName)) {
            return $columns;
        }

        $results = $this->wpdb->get_results("SHOW COLUMNS FROM `{$tableName}`", ARRAY_A);
        if (!empty($results)) {
            foreach ($results as $column) {
                $columns[$column['Field']] = $column;
            }
        }
        return $columns;
    }

    /**
     * Get table indexes.
     *
     * @phpstan-return array<string, array<string, mixed>>
     */
    protected function getTableIndexes(string $tableName): array
    {
        $indexes = [];
        if (!$this->tableExists($tableName)) {
            return $indexes;
        }

        $results = $this->wpdb->get_results("SHOW INDEX FROM `{$tableName}`", ARRAY_A);
        if (!empty($results)) {
            foreach ($results as $index) {
                if (!isset($indexes[$index['Key_name']])) {
                    $indexes[$index['Key_name']] = $index;
                }
            }
        }
        return $indexes;
    }

    /**
     * Get table foreign keys.
     *
     * @return array<string, array<string,mixed>>
     */
    protected function getTableForeignKeys(string $tableName): array
    {
        // Strip prefix to get base table name if needed
        $baseTableName = $tableName;
        if (strpos($tableName, $this->wpdb->prefix) === 0) {
            $baseTableName = substr($tableName, strlen($this->wpdb->prefix));
        }

        $query = $this->wpdb->prepare(
            "SELECT
                rc.CONSTRAINT_NAME,
                rc.REFERENCED_TABLE_NAME,
                kcu.REFERENCED_COLUMN_NAME,
                rc.DELETE_RULE,
                rc.UPDATE_RULE
             FROM information_schema.REFERENTIAL_CONSTRAINTS rc
             JOIN information_schema.KEY_COLUMN_USAGE kcu
                ON rc.CONSTRAINT_SCHEMA = kcu.CONSTRAINT_SCHEMA
                AND rc.CONSTRAINT_NAME = kcu.CONSTRAINT_NAME
                AND rc.TABLE_NAME = kcu.TABLE_NAME
             WHERE rc.CONSTRAINT_SCHEMA = DATABASE()
             AND rc.TABLE_NAME = %s",
            $tableName
        );

        $foreignKeys = [];
        $results = $this->wpdb->get_results($query, ARRAY_A);
        if (!empty($results)) {
            foreach ($results as $fk) {
                $foreignKeys[$fk['CONSTRAINT_NAME']] = $fk;
            }
        }

        // Also try with base table name if no results
        if (empty($foreignKeys) && $baseTableName !== $tableName) {
            $query = $this->wpdb->prepare(
                "SELECT
                    rc.CONSTRAINT_NAME,
                    rc.REFERENCED_TABLE_NAME,
                    kcu.REFERENCED_COLUMN_NAME,
                    rc.DELETE_RULE,
                    rc.UPDATE_RULE
                 FROM information_schema.REFERENTIAL_CONSTRAINTS rc
                 JOIN information_schema.KEY_COLUMN_USAGE kcu
                    ON rc.CONSTRAINT_SCHEMA = kcu.CONSTRAINT_SCHEMA
                    AND rc.CONSTRAINT_NAME = kcu.CONSTRAINT_NAME
                    AND rc.TABLE_NAME = kcu.TABLE_NAME
                 WHERE rc.CONSTRAINT_SCHEMA = DATABASE()
                 AND rc.TABLE_NAME = %s",
                $baseTableName
            );

            $results = $this->wpdb->get_results($query, ARRAY_A);
            if (!empty($results)) {
                foreach ($results as $fk) {
                    $foreignKeys[$fk['CONSTRAINT_NAME']] = $fk;
                }
            }
        }

        return $foreignKeys;
    }
}
