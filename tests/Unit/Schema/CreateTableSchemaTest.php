<?php

/**
 * Unit tests for the CreateTableSchema class.
 * This file provides comprehensive testing for all public methods.
 */

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Unit\Schema;

use PHPUnit\Framework\MockObject\MockObject;
use wpdb;
use WP_UnitTestCase;
use WPTechnix\WPTableManager\Exceptions\SchemaException;
use WPTechnix\WPTableManager\Schema\CreateTableSchema;

/**
 * Class CreateTableSchemaTest
 *
 * @covers \WPTechnix\WPTableManager\Schema\CreateTableSchema
 * @uses \WPTechnix\WPTableManager\Schema\ColumnDefinition
 * @uses \WPTechnix\WPTableManager\Schema\IndexDefinition
 * @uses \WPTechnix\WPTableManager\Schema\ForeignKeyDefinition
 * @uses \WPTechnix\WPTableManager\Util
 */
final class CreateTableSchemaTest extends WP_UnitTestCase
{
    /**
     * wpdb mock object
     *
     * @var MockObject&wpdb
     */
    private $wpdb;

    /**
     * Create Table Schema instance
     *
     * @var CreateTableSchema
     */
    private CreateTableSchema $schema;

    /**
     * Set up the test environment before each test.
     */
    protected function setUp(): void
    {
        $this->wpdb = $this->createMock(wpdb::class);
        $this->schema = new CreateTableSchema('test_table', $this->wpdb);
    }

    /**
     * Helper method to normalize and compare SQL strings.
     * This makes tests less brittle by ignoring differences in whitespace and case.
     */
    private static function assertSqlEquals(string $expected, string $actual): void
    {
        $normalize = function ($sql) {
            $sql = (string) preg_replace('/\s+/', ' ', $sql); // Standardize whitespace
            $sql = (string) preg_replace('/\s*([,()])\s*/', '$1', $sql); // Remove space around commas/parentheses
            return trim(strtoupper($sql), ' ;'); // Trim and convert to uppercase
        };

        self::assertEquals($normalize($expected), $normalize($actual));
    }

    public function testBasicTableCreation(): void
    {
        $this->schema->id();
        $this->schema->string('name', 150)->comment('User name');
        $this->schema->text('description')->nullable();

        $expectedSql = "
            CREATE TABLE `test_table` (
              `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
              `name` VARCHAR(150) NOT NULL COMMENT 'User name',
              `description` TEXT NULL
            )
            ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";

        self::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testTableClauses(): void
    {
        $this->schema->ifNotExists()->temporary();
        $this->schema->integer('session_id');

        $expectedSql = "
            CREATE TEMPORARY TABLE IF NOT EXISTS `test_table` (
              `session_id` INT NOT NULL
            )
            ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";

        self::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testAllNumericColumnTypes(): void
    {
        $this->schema->integer('views')->default(0);
        $this->schema->tinyInteger('status')->unsigned();
        $this->schema->smallInteger('category_id');
        $this->schema->mediumInteger('counter');
        $this->schema->bigInteger('large_number');
        $this->schema->decimal('price', 10, 2)->unsigned();
        $this->schema->float('rating');
        $this->schema->double('latitude');
        $this->schema->boolean('is_active')->default(true);

        $expectedSql = "
            CREATE TABLE `test_table` (
                `views` INT NOT NULL DEFAULT 0,
                `status` TINYINT UNSIGNED NOT NULL,
                `category_id` SMALLINT NOT NULL,
                `counter` MEDIUMINT NOT NULL,
                `large_number` BIGINT NOT NULL,
                `price` DECIMAL(10,2) UNSIGNED NOT NULL,
                `rating` FLOAT NOT NULL,
                `latitude` DOUBLE NOT NULL,
                `is_active` BOOLEAN NOT NULL DEFAULT 1
            )
            ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";

        self::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testAllStringAndTextColumnTypes(): void
    {
        $this->schema->string('title'); // Default length 191
        $this->schema->char('iso_code', 2);
        $this->schema->text('content');
        $this->schema->tinyText('notes');
        $this->schema->mediumText('summary');
        $this->schema->longText('article');
        $this->schema->uuid('guid');

        $expectedSql = "
            CREATE TABLE `test_table` (
                `title` VARCHAR(191) NOT NULL,
                `iso_code` CHAR(2) NOT NULL,
                `content` TEXT NOT NULL,
                `notes` TINYTEXT NOT NULL,
                `summary` MEDIUMTEXT NOT NULL,
                `article` LONGTEXT NOT NULL,
                `guid` CHAR(36) NOT NULL
            )
            ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";

        self::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testAllDateTimeColumnTypes(): void
    {
        $this->schema->date('birth_date');
        $this->schema->datetime('event_start');
        $this->schema->datetime('event_precise', 6);
        $this->schema->time('start_time');
        $this->schema->time('start_precise', 4);
        $this->schema->timestamp('created_on')->default('CURRENT_TIMESTAMP', true);
        $this->schema->timestamp('updated_precise', 2)->nullable();
        $this->schema->year('fiscal_year');

        $expectedSql = "
            CREATE TABLE `test_table` (
                `birth_date` DATE NOT NULL,
                `event_start` DATETIME NOT NULL,
                `event_precise` DATETIME(6) NOT NULL,
                `start_time` TIME NOT NULL,
                `start_precise` TIME(4) NOT NULL,
                `created_on` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                `updated_precise` TIMESTAMP(2) NULL,
                `fiscal_year` YEAR NOT NULL
            )
            ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";

        self::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testAllBinaryAndBlobTypes(): void
    {
        $this->schema->binary('key_hash', 64);
        $this->schema->varBinary('session_data', 1024);
        $this->schema->blob('data');
        $this->schema->tinyBlob('small_data');
        $this->schema->mediumBlob('medium_data');
        $this->schema->longBlob('large_data');

        $expectedSql = "
            CREATE TABLE `test_table` (
                `key_hash` BINARY(64) NOT NULL,
                `session_data` VARBINARY(1024) NOT NULL,
                `data` BLOB NOT NULL,
                `small_data` TINYBLOB NOT NULL,
                `medium_data` MEDIUMBLOB NOT NULL,
                `large_data` LONGBLOB NOT NULL
            )
            ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";
        self::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testAllSpecialColumnTypes(): void
    {
        $this->schema->json('settings')->nullable();
        $this->schema->enum('priority', ['low', 'medium', 'high']);
        $this->schema->set('permissions', ['read', 'write', 'execute']);
        $this->schema->geometry('shape');
        $this->schema->point('location');
        $this->schema->lineString('path');
        $this->schema->polygon('area');

        $expectedSql = "
            CREATE TABLE `test_table` (
                `settings` JSON NULL,
                `priority` ENUM('low','medium','high') NOT NULL,
                `permissions` SET('read','write','execute') NOT NULL,
                `shape` GEOMETRY NOT NULL,
                `location` POINT NOT NULL,
                `path` LINESTRING NOT NULL,
                `area` POLYGON NOT NULL
            )
            ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";

        self::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testTimestampsAndSoftDeletesHelpers(): void
    {
        $this->schema->id();
        $this->schema->timestamps(); // DATETIME by default
        $this->schema->softDeletes('archived_at');

        $expectedSql = "
            CREATE TABLE `test_table` (
                `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
                `updated_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                `archived_at` DATETIME NULL
            )
            ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";

        self::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testTimestampsAndSoftDeletesWithTimestampType(): void
    {
        $this->schema->id();
        $this->schema->timestamps(false); // Use TIMESTAMP type
        $this->schema->softDeletes('archived_at', false);

        $expectedSql = "
            CREATE TABLE `test_table` (
                `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
                `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                `archived_at` TIMESTAMP NULL
            )
            ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";

        self::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testMorphsHelpers(): void
    {
        $this->schema->morphs('commentable');
        $this->schema->nullableMorphs('taggable');

        // CORRECTED: The class correctly generates KEY, which is a synonym for INDEX. The test now reflects this.
        $expectedSql = "
            CREATE TABLE `test_table` (
                `commentable_id` BIGINT UNSIGNED NOT NULL,
                `commentable_type` VARCHAR(191) NOT NULL,
                `taggable_id` BIGINT UNSIGNED NULL,
                `taggable_type` VARCHAR(191) NULL,
                KEY `test_table_commentable_id_commentable_type_idx` (`commentable_id`, `commentable_type`),
                KEY `test_table_taggable_id_taggable_type_idx` (`taggable_id`, `taggable_type`)
            )
            ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";

        static::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testCompositePrimaryKey(): void
    {
        $this->schema->integer('order_id');
        $this->schema->integer('product_id');
        $this->schema->primary(['order_id', 'product_id']);

        $expectedSql = "
            CREATE TABLE `test_table` (
              `order_id` INT NOT NULL,
              `product_id` INT NOT NULL,
              PRIMARY KEY (`order_id`, `product_id`)
            )
            ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";
        self::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testExplicitSingleColumnPrimaryKey(): void
    {
        $this->schema->integer('item_id');
        $this->schema->primary('item_id');

        $expectedSql = "
            CREATE TABLE `test_table` (
              `item_id` INT NOT NULL,
              PRIMARY KEY (`item_id`)
            )
            ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";
        self::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testIndexDefinitions(): void
    {
        $this->schema->string('email');
        $this->schema->string('username');
        $this->schema->text('biography');
        $this->schema->point('location');

        $this->schema->unique('email');
        $this->schema->index(['email', 'username'], 'email_username_idx');
        $this->schema->fulltext('biography');
        $this->schema->spatial('location');

        $expectedSql = "
            CREATE TABLE `test_table` (
                `email` VARCHAR(191) NOT NULL,
                `username` VARCHAR(191) NOT NULL,
                `biography` TEXT NOT NULL,
                `location` POINT NOT NULL,
                UNIQUE KEY `test_table_email_uniq` (`email`),
                KEY `email_username_idx` (`email`, `username`),
                FULLTEXT KEY `test_table_biography_ft` (`biography`),
                SPATIAL KEY `test_table_location_sp` (`location`)
            )
            ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";

        self::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testColumnLevelIndexCreation(): void
    {
        $this->schema->string('username')->index();
        $this->schema->string('email')->unique();
        $this->schema->text('profile')->fulltext();

        $expectedSql = "
            CREATE TABLE `test_table` (
                `username` VARCHAR(191) NOT NULL,
                `email` VARCHAR(191) NOT NULL,
                `profile` TEXT NOT NULL,
                KEY `test_table_username_idx` (`username`),
                UNIQUE KEY `test_table_email_uniq` (`email`),
                FULLTEXT KEY `test_table_profile_ft` (`profile`)
            )
            ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";

        self::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testForeignKeyConstraints(): void
    {
        $this->schema->bigInteger('user_id')->unsigned();
        $this->schema->bigInteger('post_id')->unsigned();

        $this->schema->foreign('user_id')
            ->references('users', 'id')
            ->cascadeOnDelete();

        $this->schema->foreign('post_id', 'fk_test_table_post_id')
            ->references('posts') // 'id' column is default
            ->onUpdate('cascade')
            ->onDelete('restrict');

        // phpcs:disable
        $expectedSql = "
            CREATE TABLE `test_table` (
                `user_id` BIGINT UNSIGNED NOT NULL,
                `post_id` BIGINT UNSIGNED NOT NULL,
                CONSTRAINT `test_table_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
                CONSTRAINT `fk_test_table_post_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
            )
            ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";
        // phpcs:enable

        self::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testTableOptions(): void
    {
        $this->schema->id();
        $this->schema->engine('MyISAM')
            ->charset('latin1')
            ->collation('latin1_swedish_ci')
            ->comment('A legacy table')
            ->autoIncrement(500)
            ->rowFormat('DYNAMIC');

        // phpcs:disable
        $expectedSql = "
            CREATE TABLE `test_table` (
                `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY
            )
            ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci AUTO_INCREMENT=500 ROW_FORMAT=DYNAMIC COMMENT='A legacy table';
        ";
        // phpcs:enable

        self::assertSqlEquals($expectedSql, $this->schema->toSql());
    }

    public function testIndexNameGenerationLogic(): void
    {
        $schema = new CreateTableSchema('a_very_long_table_name_that_will_surely_exceed_the_limit', $this->wpdb);
        $schema->string('some_column_with_an_equally_long_name');
        $schema->index('some_column_with_an_equally_long_name');

        $sql = $schema->toSql();
        // The expected name is truncated and hashed to fit within 64 characters
        // The exact hash depends on the md5 algorithm
        $longName = 'a_very_long_table_name_that_will_surely_exceed_the_limit_some_column_with_an_equally_long_name_idx'; // phpcs:ignore
        $hash = substr(md5($longName), 0, 8);
        $expectedIndexName = substr($longName, 0, 64 - strlen($hash) - 1) . '_' . $hash;

        self::assertStringContainsString("KEY `$expectedIndexName`", $sql);
    }

    // --- Exception Tests ---

    public function testThrowsExceptionIfNoColumnsDefined(): void
    {
        $this->expectException(SchemaException::class);
        $this->expectExceptionMessage('No columns defined for table test_table');
        $this->schema->toSql();
    }

    public function testThrowsExceptionForInvalidRowFormat(): void
    {
        $this->expectException(SchemaException::class);
        $this->expectExceptionMessage(
            'Invalid row format: INVALID_FORMAT. Valid formats are: DYNAMIC, FIXED, COMPRESSED, REDUNDANT, COMPACT'
        );
        $this->schema->rowFormat('invalid_format');
    }

    public function testThrowsExceptionForIncompleteForeignKey(): void
    {
        $this->expectException(SchemaException::class);
        $this->expectExceptionMessageMatches('/Foreign key references not set for constraint .*/');

        $this->schema->bigInteger('user_id');
        $this->schema->foreign('user_id'); // Missing ->references(...)
        $this->schema->toSql();
    }
}
