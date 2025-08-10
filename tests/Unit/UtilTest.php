<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Unit;

use WPTechnix\WPTableManager\Util;
use PHPUnit\Framework\TestCase;

/**
 * @covers \WPTechnix\WPTableManager\Util
 */
class UtilTest extends TestCase
{
    /**
     * @test
     */
    public function testCleanSqlIdentifierRemovesInvalidChars(): void
    {
        self::assertSame('table_name', Util::cleanSqlIdentifier('table name!'));
    }

    /**
     * @test
     */
    public function testCleanSqlIdentifierReturnsSingleUnderscoreIfEmptyAfterClean(): void
    {
        self::assertSame('_', Util::cleanSqlIdentifier('!@#$%^&*()'));
    }

    /**
     * @test
     */
    public function testCleanSqlIdentifierPrefixesWithUnderscoreIfStartsWithNumber(): void
    {
        self::assertSame('_123name', Util::cleanSqlIdentifier('123name'));
    }

    /**
     * @test
     */
    public function testGenerateSqlIndexNameWithSingleColumn(): void
    {
        self::assertSame(
            'mytable_columnname_idx',
            Util::generateSqlIndexName('mytable', 'columnname', 'idx')
        );
    }

    /**
     * @test
     */
    public function testGenerateSqlIndexNameWithMultipleColumns(): void
    {
        self::assertSame(
            'mytable_col1_col2_idx',
            Util::generateSqlIndexName('mytable', ['col1', 'col2'], 'idx')
        );
    }

    /**
     * @test
     */
    public function testGenerateSqlIndexNameRemovesInvalidChars(): void
    {
        self::assertSame(
            'mytable_col1_col2_idx',
            Util::generateSqlIndexName('mytable', ['col1!', 'col2%'], 'idx')
        );
    }

    /**
     * @test
     */
    public function testGenerateSqlIndexNameTruncatesIfTooLong(): void
    {
        $table = str_repeat('a', 30);
        $columns = [str_repeat('b', 30)];
        $prefix = 'idx';
        $idx_name = Util::generateSqlIndexName($table, $columns, $prefix);

        self::assertLessThanOrEqual(64, strlen($idx_name));
        self::assertMatchesRegularExpression(
            '/_[0-9a-f]{8}$/',
            $idx_name,
            'Should end with an underscore and 8-char hash'
        );
    }
}
