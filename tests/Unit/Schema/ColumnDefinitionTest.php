<?php

/**
 * Unit tests for ColumnDefinition class.
 */

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Unit\Schema;

use WPTechnix\WPTableManager\Schema\ColumnDefinition;
use WPTechnix\WPTableManager\Schema\CreateTableSchema;
use PHPUnit\Framework\MockObject\MockObject;
use WP_UnitTestCase;

/**
 * Class ColumnDefinitionTest
 *
 * @covers \WPTechnix\WPTableManager\Schema\ColumnDefinition
 */
class ColumnDefinitionTest extends WP_UnitTestCase
{
    /**
     * @test
     */
    public function itCreatesBasicColumnDefinition(): void
    {
        $column = new ColumnDefinition('id', 'BIGINT(20)');

        self::assertSame('id', $column->getName());
        self::assertSame('BIGINT(20)', $column->getType());
        self::assertSame('`id` BIGINT(20) NOT NULL', $column->toSql());
    }

    /**
     * @test
     */
    public function itHandlesNullableColumn(): void
    {
        $column = new ColumnDefinition('email', 'VARCHAR(255)');
        $column->nullable();

        self::assertTrue($column->isNullable());
        self::assertStringContainsString('NULL', $column->toSql());
        self::assertStringNotContainsString('NOT NULL', $column->toSql());
    }

    /**
     * @test
     */
    public function itHandlesNotNullColumn(): void
    {
        $column = new ColumnDefinition('username', 'VARCHAR(100)');
        $column->nullable()->notNull();

        self::assertFalse($column->isNullable());
        self::assertStringContainsString('NOT NULL', $column->toSql());
    }

    /**
     * @test
     */
    public function itSetsDefaultValueForString(): void
    {
        $column = new ColumnDefinition('status', 'VARCHAR(50)');
        $column->default('active');

        self::assertSame("'active'", $column->getDefault());
        self::assertStringContainsString("DEFAULT 'active'", $column->toSql());
    }

    /**
     * @test
     */
    public function itSetsDefaultValueForNumber(): void
    {
        $column = new ColumnDefinition('quantity', 'INT');
        $column->default(10);

        self::assertSame('10', $column->getDefault());
        self::assertStringContainsString('DEFAULT 10', $column->toSql());
    }

    /**
     * @test
     */
    public function itSetsDefaultValueForBoolean(): void
    {
        $columnTrue = new ColumnDefinition('is_active', 'TINYINT(1)');
        $columnTrue->default(true);

        $columnFalse = new ColumnDefinition('is_deleted', 'TINYINT(1)');
        $columnFalse->default(false);

        self::assertSame('1', $columnTrue->getDefault());
        self::assertSame('0', $columnFalse->getDefault());
        self::assertStringContainsString('DEFAULT 1', $columnTrue->toSql());
        self::assertStringContainsString('DEFAULT 0', $columnFalse->toSql());
    }

    /**
     * @test
     */
    public function itSetsDefaultValueForNull(): void
    {
        $column = new ColumnDefinition('deleted_at', 'TIMESTAMP');
        $column->nullable()->default(null);

        self::assertSame('NULL', $column->getDefault());
        self::assertStringContainsString('DEFAULT NULL', $column->toSql());
    }

    /**
     * @test
     */
    public function itSetsRawDefaultValue(): void
    {
        $column = new ColumnDefinition('created_at', 'TIMESTAMP');
        $column->default('CURRENT_TIMESTAMP');

        self::assertSame('CURRENT_TIMESTAMP', $column->getDefault());
        self::assertStringContainsString('DEFAULT CURRENT_TIMESTAMP', $column->toSql());
    }

    /**
     * @test
     */
    public function itHandlesUnsignedColumn(): void
    {
        $column = new ColumnDefinition('user_id', 'BIGINT(20)');
        $column->unsigned();

        $expected = '`user_id` BIGINT(20) UNSIGNED NOT NULL';
        self::assertSame($expected, $column->toSql());
    }

    /**
     * @test
     */
    public function itHandlesZerofillColumn(): void
    {
        $column = new ColumnDefinition('invoice_number', 'INT(8)');
        $column->zerofill();

        self::assertStringContainsString('ZEROFILL', $column->toSql());
    }

    /**
     * @test
     */
    public function itHandlesBinaryColumn(): void
    {
        $column = new ColumnDefinition('hash', 'CHAR(32)');
        $column->binary();

        self::assertStringContainsString('BINARY', $column->toSql());
    }

    /**
     * @test
     */
    public function itHandlesAutoIncrementColumn(): void
    {
        $column = new ColumnDefinition('id', 'BIGINT(20)');
        $column->unsigned()->autoIncrement();

        self::assertTrue($column->isAutoIncrement());
        self::assertStringContainsString('AUTO_INCREMENT', $column->toSql());
    }

    /**
     * @test
     */
    public function itHandlesPrimaryKeyColumn(): void
    {
        $column = new ColumnDefinition('id', 'BIGINT(20)');
        $column->unsigned()->primary();

        self::assertTrue($column->isPrimary());
        self::assertStringContainsString('PRIMARY KEY', $column->toSql());
    }

    /**
     * @test
     */
    public function itDoesNotAddPrimaryKeyWhenPartOfComposite(): void
    {
        $column = new ColumnDefinition('user_id', 'BIGINT(20)');
        $column->primary();

        $sql = $column->toSql(true);
        self::assertStringNotContainsString('PRIMARY KEY', $sql);
    }

    /**
     * @test
     */
    public function itHandlesUniqueIndex(): void
    {
        $column = new ColumnDefinition('email', 'VARCHAR(255)');
        $column->unique();

        self::assertTrue($column->isUnique());
    }

    /**
     * @test
     */
    public function itHandlesFulltextIndex(): void
    {
        $column = new ColumnDefinition('content', 'TEXT');
        $column->fulltext();

        self::assertTrue($column->isFulltext());
    }

    /**
     * @test
     */
    public function itHandlesRegularIndex(): void
    {
        $column = new ColumnDefinition('created_at', 'TIMESTAMP');
        $column->index();

        self::assertTrue($column->hasIndex());
    }

    /**
     * @test
     */
    public function itAddsComment(): void
    {
        $column = new ColumnDefinition('status', 'VARCHAR(50)');
        $column->comment('User account status');

        self::assertStringContainsString("COMMENT 'User account status'", $column->toSql());
    }

    /**
     * @test
     */
    public function itEscapesCommentQuotes(): void
    {
        $column = new ColumnDefinition('notes', 'TEXT');
        $column->comment("User's notes");

        self::assertStringContainsString("COMMENT 'User\\'s notes'", $column->toSql());
    }

    /**
     * @test
     */
    public function itHandlesOnUpdateCurrentTimestamp(): void
    {
        $column = new ColumnDefinition('updated_at', 'TIMESTAMP');
        $column->default('CURRENT_TIMESTAMP')->onUpdateCurrentTimestamp();

        self::assertStringContainsString('ON UPDATE CURRENT_TIMESTAMP', $column->toSql());
    }

    /**
     * @test
     */
    public function itSetsCharset(): void
    {
        $column = new ColumnDefinition('name', 'VARCHAR(255)');
        $column->charset('utf8mb4');

        self::assertStringContainsString('CHARACTER SET utf8mb4', $column->toSql());
    }

    /**
     * @test
     */
    public function itSetsCollation(): void
    {
        $column = new ColumnDefinition('title', 'VARCHAR(255)');
        $column->collation('utf8mb4_unicode_ci');

        self::assertStringContainsString('COLLATE utf8mb4_unicode_ci', $column->toSql());
    }

    /**
     * @test
     */
    public function itSetsCharsetAndCollation(): void
    {
        $column = new ColumnDefinition('description', 'TEXT');
        $column->charset('utf8mb4')->collation('utf8mb4_unicode_ci');

        $sql = $column->toSql();
        self::assertStringContainsString('CHARACTER SET utf8mb4', $sql);
        self::assertStringContainsString('COLLATE utf8mb4_unicode_ci', $sql);
    }

    /**
     * @test
     */
    public function itSetsPositionFirst(): void
    {
        $column = new ColumnDefinition('id', 'BIGINT(20)');
        $column->first();

        self::assertStringContainsString('FIRST', $column->toSql());
    }

    /**
     * @test
     */
    public function itSetsPositionAfter(): void
    {
        $column = new ColumnDefinition('email', 'VARCHAR(255)');
        $column->after('username');

        self::assertStringContainsString('AFTER `username`', $column->toSql());
    }

    /**
     * @test
     */
    public function itCreatesVirtualGeneratedColumn(): void
    {
        $column = new ColumnDefinition('full_name', 'VARCHAR(500)');
        $column->virtualAs("CONCAT(first_name, ' ', last_name)");

        $sql = $column->toSql();
        self::assertStringContainsString("GENERATED ALWAYS AS (CONCAT(first_name, ' ', last_name)) VIRTUAL", $sql);
    }

    /**
     * @test
     */
    public function itCreatesStoredGeneratedColumn(): void
    {
        $column = new ColumnDefinition('age', 'INT');
        $column->storedAs('YEAR(CURDATE()) - YEAR(birth_date)');

        $sql = $column->toSql();
        self::assertStringContainsString('GENERATED ALWAYS AS (YEAR(CURDATE()) - YEAR(birth_date)) STORED', $sql);
    }

    /**
     * @test
     */
    public function itGeneratesComplexColumnDefinition(): void
    {
        $column = new ColumnDefinition('price', 'DECIMAL(10,2)');
        $column->unsigned()
            ->notNull()
            ->default(0.00)
            ->comment('Product price in USD')
            ->after('name');

        $expected = "`price` DECIMAL(10,2) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Product price in USD' AFTER `name`";
        self::assertSame($expected, $column->toSql());
    }

    /**
     * @test
     */
    public function itGeneratesCompleteTimestampColumn(): void
    {
        $column = new ColumnDefinition('created_at', 'TIMESTAMP');
        $column->nullable()
            ->default('CURRENT_TIMESTAMP')
            ->onUpdateCurrentTimestamp()
            ->comment('Record creation timestamp');

        $sql = $column->toSql();
        self::assertStringContainsString('`created_at` TIMESTAMP', $sql);
        self::assertStringContainsString('NULL', $sql);
        self::assertStringContainsString('DEFAULT CURRENT_TIMESTAMP', $sql);
        self::assertStringContainsString('ON UPDATE CURRENT_TIMESTAMP', $sql);
        self::assertStringContainsString("COMMENT 'Record creation timestamp'", $sql);
    }

    /**
     * @test
     */
    public function itMaintainsCorrectOrderOfModifiers(): void
    {
        $column = new ColumnDefinition('id', 'INT(11)');
        $column->unsigned()
            ->zerofill()
            ->notNull()
            ->autoIncrement()
            ->primary()
            ->comment('Primary key');

        $sql = $column->toSql();

        // Verify order: type, unsigned, zerofill, null, auto_increment, primary, comment
        $unsignedPos = strpos($sql, 'UNSIGNED');
        $zerofillPos = strpos($sql, 'ZEROFILL');
        $notNullPos = strpos($sql, 'NOT NULL');
        $autoIncPos = strpos($sql, 'AUTO_INCREMENT');
        $primaryPos = strpos($sql, 'PRIMARY KEY');
        $commentPos = strpos($sql, 'COMMENT');

        self::assertLessThan($zerofillPos, $unsignedPos);
        self::assertLessThan($notNullPos, $zerofillPos);
        self::assertLessThan($autoIncPos, $notNullPos);
        self::assertLessThan($primaryPos, $autoIncPos);
        self::assertLessThan($commentPos, $primaryPos);
    }

    /**
     * @test
     */
    public function itSupportsMethodChaining(): void
    {
        $column = new ColumnDefinition('email', 'VARCHAR(255)');

        $result = $column->nullable()
            ->unique()
            ->comment('User email address')
            ->after('username');

        self::assertInstanceOf(ColumnDefinition::class, $result);
        self::assertSame($column, $result);
    }

    /**
     * @test
     */
    public function itHandlesSpecialDefaultValues(): void
    {
        $testCases = [
            ['CURRENT_TIMESTAMP', 'CURRENT_TIMESTAMP'],
            ['NOW()', 'NOW()'],
            ['CURRENT_DATE', 'CURRENT_DATE'],
            ['CURRENT_TIME', 'CURRENT_TIME'],
            ['NULL', 'NULL'],
        ];

        foreach ($testCases as [$input, $expected]) {
            $column = new ColumnDefinition('test_col', 'VARCHAR(50)');
            $column->default($input);

            self::assertSame($expected, $column->getDefault());
            self::assertStringContainsString("DEFAULT {$expected}", $column->toSql());
        }
    }

    /**
     * @test
     */
    public function itEscapesStringDefaultValues(): void
    {
        $column = new ColumnDefinition('message', 'TEXT');
        $column->default("It's a test");

        self::assertSame("'It\\'s a test'", $column->getDefault());
        self::assertStringContainsString("DEFAULT 'It\\'s a test'", $column->toSql());
    }

    /**
     * @test
     */
    public function itHandlesSchemaReference(): void
    {
        $schema = $this->createMock(CreateTableSchema::class);
        $column = new ColumnDefinition('email', 'VARCHAR(255)');

        /** @phpstan-var MockObject&CreateTableSchema $schema */

        $result = $column->setSchema($schema);

        self::assertInstanceOf(ColumnDefinition::class, $result);
        self::assertSame($column, $result);
    }
}
