<?php

/**
 * Unit tests for IndexDefinition class.
 */

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Unit\Schema;

use WP_UnitTestCase;
use WPTechnix\WPTableManager\Schema\IndexDefinition;

/**
 * Class IndexDefinitionTest
 *
 * @covers \WPTechnix\WPTableManager\Schema\IndexDefinition
 * @uses \WPTechnix\WPTableManager\Util
 */
final class IndexDefinitionTest extends WP_UnitTestCase
{
    /**
     * @test
     */
    public function itCreatesBasicIndex(): void
    {
        $index = new IndexDefinition('idx_email', ['email']);

        self::assertSame('idx_email', $index->getName());
        self::assertSame(['email'], $index->getColumns());
        self::assertSame('INDEX', $index->getType());
        self::assertSame('KEY `idx_email` (`email`)', $index->toSql());
    }

    /**
     * @test
     */
    public function itCreatesMultiColumnIndex(): void
    {
        $index = new IndexDefinition('idx_name', ['first_name', 'last_name']);

        $expected = 'KEY `idx_name` (`first_name`, `last_name`)';
        self::assertSame($expected, $index->toSql());
    }

    /**
     * @test
     */
    public function itCreatesUniqueIndex(): void
    {
        $index = new IndexDefinition('uniq_email', ['email'], 'UNIQUE');

        self::assertTrue($index->isUnique());
        self::assertFalse($index->isFulltext());
        self::assertFalse($index->isSpatial());
        self::assertSame('UNIQUE KEY `uniq_email` (`email`)', $index->toSql());
    }

    /**
     * @test
     */
    public function itCreatesFulltextIndex(): void
    {
        $index = new IndexDefinition('ft_content', ['title', 'content'], 'FULLTEXT');

        self::assertTrue($index->isFulltext());
        self::assertFalse($index->isUnique());
        self::assertFalse($index->isSpatial());
        self::assertSame('FULLTEXT KEY `ft_content` (`title`, `content`)', $index->toSql());
    }

    /**
     * @test
     */
    public function itCreatesSpatialIndex(): void
    {
        $index = new IndexDefinition('spatial_location', ['location'], 'SPATIAL');

        self::assertTrue($index->isSpatial());
        self::assertFalse($index->isUnique());
        self::assertFalse($index->isFulltext());
        self::assertSame('SPATIAL KEY `spatial_location` (`location`)', $index->toSql());
    }

    /**
     * @test
     */
    public function itNormalizesIndexType(): void
    {
        $indexLower = new IndexDefinition('idx_test', ['col'], 'unique');
        $indexMixed = new IndexDefinition('idx_test2', ['col'], 'UnIqUe');

        self::assertSame('UNIQUE', $indexLower->getType());
        self::assertSame('UNIQUE', $indexMixed->getType());
    }

    /**
     * @test
     */
    public function itSetsIndexAlgorithmBtree(): void
    {
        $index = new IndexDefinition('idx_email', ['email']);
        $index->using('BTREE');

        self::assertSame('KEY `idx_email` (`email`) USING BTREE', $index->toSql());
    }

    /**
     * @test
     */
    public function itSetsIndexAlgorithmHash(): void
    {
        $index = new IndexDefinition('idx_status', ['status']);
        $index->using('HASH');

        self::assertSame('KEY `idx_status` (`status`) USING HASH', $index->toSql());
    }

    /**
     * @test
     */
    public function itIgnoresInvalidAlgorithm(): void
    {
        $index = new IndexDefinition('idx_test', ['col']);
        $index->using('INVALID');

        self::assertSame('KEY `idx_test` (`col`)', $index->toSql());
    }

    /**
     * @test
     */
    public function itNormalizesAlgorithmCase(): void
    {
        $index = new IndexDefinition('idx_test', ['col']);
        $index->using('btree');

        self::assertStringContainsString('USING BTREE', $index->toSql());
    }

    /**
     * @test
     */
    public function itSetsKeyBlockSize(): void
    {
        $index = new IndexDefinition('idx_compressed', ['data']);
        $index->keyBlockSize(8);

        self::assertSame('KEY `idx_compressed` (`data`) KEY_BLOCK_SIZE=8', $index->toSql());
    }

    /**
     * @test
     */
    public function itIgnoresInvalidKeyBlockSize(): void
    {
        $index = new IndexDefinition('idx_test', ['col']);
        $index->keyBlockSize(0);
        $index->keyBlockSize(-5);

        self::assertSame('KEY `idx_test` (`col`)', $index->toSql());
    }

    /**
     * @test
     */
    public function itSetsIndexComment(): void
    {
        $index = new IndexDefinition('idx_user', ['user_id']);
        $index->comment('User ID index for fast lookups');

        $expected = "KEY `idx_user` (`user_id`) COMMENT 'User ID index for fast lookups'";
        self::assertSame($expected, $index->toSql());
    }

    /**
     * @test
     */
    public function itEscapesCommentQuotes(): void
    {
        $index = new IndexDefinition('idx_test', ['col']);
        $index->comment("Index's comment");

        self::assertStringContainsString("COMMENT 'Index\\'s comment'", $index->toSql());
    }

    /**
     * @test
     */
    public function itSetsIndexVisibility(): void
    {
        $index = new IndexDefinition('idx_visible', ['col']);
        $index->visible();

        self::assertStringContainsString('VISIBLE', $index->toSql());
    }

    /**
     * @test
     */
    public function itSetsIndexInvisibility(): void
    {
        $index = new IndexDefinition('idx_invisible', ['col']);
        $index->invisible();

        self::assertStringContainsString('INVISIBLE', $index->toSql());
    }

    /**
     * @test
     */
    public function itSetsVisibilityWithParameter(): void
    {
        $indexVisible = new IndexDefinition('idx_v', ['col']);
        $indexVisible->visible(true);

        $indexInvisible = new IndexDefinition('idx_i', ['col']);
        $indexInvisible->visible(false);

        self::assertStringContainsString('VISIBLE', $indexVisible->toSql());
        self::assertStringContainsString('INVISIBLE', $indexInvisible->toSql());
    }

    /**
     * @test
     */
    public function itSetsFulltextParser(): void
    {
        $index = new IndexDefinition('ft_content', ['content'], 'FULLTEXT');
        $index->withParser('ngram');

        $expected = 'FULLTEXT KEY `ft_content` (`content`) WITH PARSER ngram';
        self::assertSame($expected, $index->toSql());
    }

    /**
     * @test
     */
    public function itIgnoresParserForNonFulltextIndex(): void
    {
        $index = new IndexDefinition('idx_regular', ['col']);
        $index->withParser('ngram');

        self::assertStringNotContainsString('WITH PARSER', $index->toSql());
    }

    /**
     * @test
     */
    public function itSetsPartialIndexLength(): void
    {
        $index = new IndexDefinition('idx_partial', ['description']);
        $index->length('description', 100);

        $expected = 'KEY `idx_partial` (`description`(100))';
        self::assertSame($expected, $index->toSql());
    }

    /**
     * @test
     */
    public function itSetsMultiplePartialLengths(): void
    {
        $index = new IndexDefinition('idx_multi', ['title', 'description', 'content']);
        $index->lengths([
            'title' => 50,
            'description' => 100,
            'content' => 200,
        ]);

        $expected = 'KEY `idx_multi` (`title`(50), `description`(100), `content`(200))';
        self::assertSame($expected, $index->toSql());
    }

    /**
     * @test
     */
    public function itIgnoresLengthForNonExistentColumn(): void
    {
        $index = new IndexDefinition('idx_test', ['col1']);
        $index->length('col2', 100);

        self::assertSame('KEY `idx_test` (`col1`)', $index->toSql());
    }

    /**
     * @test
     */
    public function itIgnoresInvalidLength(): void
    {
        $index = new IndexDefinition('idx_test', ['col']);
        $index->length('col', 0);
        $index->length('col', -10);

        self::assertSame('KEY `idx_test` (`col`)', $index->toSql());
    }

    /**
     * @test
     */
    public function itHandlesMixedPartialLengths(): void
    {
        $index = new IndexDefinition('idx_mixed', ['col1', 'col2', 'col3']);
        $index->length('col1', 50)
            ->length('col3', 100);

        $expected = 'KEY `idx_mixed` (`col1`(50), `col2`, `col3`(100))';
        self::assertSame($expected, $index->toSql());
    }

    /**
     * @test
     */
    public function itGeneratesComplexIndexDefinition(): void
    {
        $index = new IndexDefinition('idx_complex', ['category', 'status']);
        $index->using('BTREE')
            ->keyBlockSize(16)
            ->comment('Composite index for filtering')
            ->invisible();

        $expected = "KEY `idx_complex` (`category`, `status`) USING BTREE " .
            "KEY_BLOCK_SIZE=16 COMMENT 'Composite index for filtering' INVISIBLE";
        self::assertSame($expected, $index->toSql());
    }

    /**
     * @test
     */
    public function itGeneratesUniqueIndexWithOptions(): void
    {
        $index = new IndexDefinition('uniq_email', ['email'], 'UNIQUE');
        $index->using('HASH')
            ->comment('Unique email constraint')
            ->visible();

        $expected = "UNIQUE KEY `uniq_email` (`email`) USING HASH " .
            "COMMENT 'Unique email constraint' VISIBLE";
        self::assertSame($expected, $index->toSql());
    }

    /**
     * @test
     */
    public function itGeneratesFulltextIndexWithOptions(): void
    {
        $index = new IndexDefinition('ft_search', ['title', 'content'], 'FULLTEXT');
        $index->withParser('mecab')
            ->comment('Full-text search index');

        $expected = "FULLTEXT KEY `ft_search` (`title`, `content`) " .
            "WITH PARSER mecab COMMENT 'Full-text search index'";
        self::assertSame($expected, $index->toSql());
    }

    /**
     * @test
     */
    public function itMaintainsCorrectOrderOfOptions(): void
    {
        $index = new IndexDefinition('idx_order', ['col']);
        $index->using('BTREE')
            ->keyBlockSize(8)
            ->withParser('ngram') // Should be ignored for non-fulltext
            ->comment('Test order')
            ->visible();

        $sql = $index->toSql();

        // Verify order: USING, KEY_BLOCK_SIZE, COMMENT, VISIBLE
        $usingPos = strpos($sql, 'USING');
        $keyBlockPos = strpos($sql, 'KEY_BLOCK_SIZE');
        $commentPos = strpos($sql, 'COMMENT');
        $visiblePos = strpos($sql, 'VISIBLE');

        self::assertNotFalse($usingPos);
        self::assertNotFalse($keyBlockPos);
        self::assertNotFalse($commentPos);
        self::assertNotFalse($visiblePos);

        self::assertLessThan($keyBlockPos, $usingPos);
        self::assertLessThan($commentPos, $keyBlockPos);
        self::assertLessThan($visiblePos, $commentPos);
    }

    /**
     * @test
     */
    public function itSupportsMethodChaining(): void
    {
        $index = new IndexDefinition('idx_chain', ['col']);

        $result = $index->using('BTREE')
            ->keyBlockSize(8)
            ->comment('Chained')
            ->visible();

        self::assertSame($index, $result);
    }

    /**
     * @test
     */
    public function itHandlesEmptyOptionsCorrectly(): void
    {
        $index = new IndexDefinition('idx_simple', ['column_name']);

        self::assertSame('KEY `idx_simple` (`column_name`)', $index->toSql());
    }

    /**
     * @test
     */
    public function itHandlesSpecialCharactersInColumnNames(): void
    {
        $index = new IndexDefinition('idx_special', ['user-id', 'created_at']);

        $expected = 'KEY `idx_special` (`user-id`, `created_at`)';
        self::assertSame($expected, $index->toSql());
    }
}
