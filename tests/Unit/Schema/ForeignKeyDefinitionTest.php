<?php

/**
 * Unit tests for ForeignKeyDefinition class.
 */

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Unit\Schema;

use WP_UnitTestCase;
use WPTechnix\WPTableManager\Schema\ForeignKeyDefinition;
use WPTechnix\WPTableManager\Exceptions\SchemaException;

/**
 * Class ForeignKeyDefinitionTest
 *
 * @covers \WPTechnix\WPTableManager\Schema\ForeignKeyDefinition
 */
class ForeignKeyDefinitionTest extends WP_UnitTestCase
{
    /**
     * @test
     */
    public function itCreatesForeignKeyDefinition(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');

        self::assertSame('fk_user_id', $fk->getName());
        self::assertSame('user_id', $fk->getColumn());
        self::assertNull($fk->getReferencesTable());
        self::assertNull($fk->getReferencesColumn());
    }

    /**
     * @test
     */
    public function itSetsReferencesWithDefaultColumn(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users');

        self::assertSame('users', $fk->getReferencesTable());
        self::assertSame('id', $fk->getReferencesColumn());
    }

    /**
     * @test
     */
    public function itSetsReferencesWithCustomColumn(): void
    {
        $fk = new ForeignKeyDefinition('fk_author', 'author_id');
        $fk->references('users', 'user_id');

        self::assertSame('users', $fk->getReferencesTable());
        self::assertSame('user_id', $fk->getReferencesColumn());
    }

    /**
     * @test
     */
    public function itGeneratesBasicForeignKeySql(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users', 'id');

        $expected = 'CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)';
        self::assertSame($expected, $fk->toSql());
    }

    /**
     * @test
     */
    public function itThrowsExceptionWhenReferencesNotSet(): void
    {
        $fk = new ForeignKeyDefinition('fk_test', 'test_id');

        $this->expectException(SchemaException::class);
        $this->expectExceptionMessage('Foreign key references not set for constraint fk_test');

        $fk->toSql();
    }

    /**
     * @test
     */
    public function itSetsOnDeleteCascade(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->onDelete('CASCADE');

        self::assertSame('CASCADE', $fk->getOnDelete());
        self::assertStringContainsString('ON DELETE CASCADE', $fk->toSql());
    }

    /**
     * @test
     */
    public function itSetsOnDeleteSetNull(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->onDelete('SET NULL');

        self::assertSame('SET NULL', $fk->getOnDelete());
        self::assertStringContainsString('ON DELETE SET NULL', $fk->toSql());
    }

    /**
     * @test
     */
    public function itSetsOnDeleteRestrict(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->onDelete('RESTRICT');

        self::assertSame('RESTRICT', $fk->getOnDelete());
        self::assertStringContainsString('ON DELETE RESTRICT', $fk->toSql());
    }

    /**
     * @test
     */
    public function itSetsOnDeleteNoAction(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->onDelete('NO ACTION');

        self::assertSame('NO ACTION', $fk->getOnDelete());
        self::assertStringContainsString('ON DELETE NO ACTION', $fk->toSql());
    }

    /**
     * @test
     */
    public function itSetsOnDeleteSetDefault(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->onDelete('SET DEFAULT');

        self::assertSame('SET DEFAULT', $fk->getOnDelete());
        self::assertStringContainsString('ON DELETE SET DEFAULT', $fk->toSql());
    }

    /**
     * @test
     */
    public function itNormalizesOnDeleteCase(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->onDelete('cascade');

        self::assertSame('CASCADE', $fk->getOnDelete());
    }

    /**
     * @test
     */
    public function itThrowsExceptionForInvalidOnDelete(): void
    {
        $fk = new ForeignKeyDefinition('fk_test', 'test_id');

        $this->expectException(SchemaException::class);
        $this->expectExceptionMessage('Invalid ON DELETE action: INVALID');

        $fk->onDelete('INVALID');
    }

    /**
     * @test
     */
    public function itSetsOnUpdateCascade(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->onUpdate('CASCADE');

        self::assertSame('CASCADE', $fk->getOnUpdate());
        self::assertStringContainsString('ON UPDATE CASCADE', $fk->toSql());
    }

    /**
     * @test
     */
    public function itSetsOnUpdateSetNull(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->onUpdate('SET NULL');

        self::assertSame('SET NULL', $fk->getOnUpdate());
        self::assertStringContainsString('ON UPDATE SET NULL', $fk->toSql());
    }

    /**
     * @test
     */
    public function itSetsOnUpdateRestrict(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->onUpdate('RESTRICT');

        self::assertSame('RESTRICT', $fk->getOnUpdate());
        self::assertStringContainsString('ON UPDATE RESTRICT', $fk->toSql());
    }

    /**
     * @test
     */
    public function itThrowsExceptionForInvalidOnUpdate(): void
    {
        $fk = new ForeignKeyDefinition('fk_test', 'test_id');

        $this->expectException(SchemaException::class);
        $this->expectExceptionMessage('Invalid ON UPDATE action: WRONG');

        $fk->onUpdate('WRONG');
    }

    /**
     * @test
     */
    public function itSetsBothOnDeleteAndOnUpdate(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')
            ->onDelete('CASCADE')
            ->onUpdate('RESTRICT');

        $sql = $fk->toSql();
        self::assertStringContainsString('ON DELETE CASCADE', $sql);
        self::assertStringContainsString('ON UPDATE RESTRICT', $sql);

        // Verify order: ON DELETE comes before ON UPDATE
        $deletePos = strpos($sql, 'ON DELETE');
        $updatePos = strpos($sql, 'ON UPDATE');
        self::assertLessThan($updatePos, $deletePos);
    }

    /**
     * @test
     */
    public function itUsesCascadeOnDeleteShortcut(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->cascadeOnDelete();

        self::assertSame('CASCADE', $fk->getOnDelete());
        self::assertStringContainsString('ON DELETE CASCADE', $fk->toSql());
    }

    /**
     * @test
     */
    public function itUsesCascadeOnUpdateShortcut(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->cascadeOnUpdate();

        self::assertSame('CASCADE', $fk->getOnUpdate());
        self::assertStringContainsString('ON UPDATE CASCADE', $fk->toSql());
    }

    /**
     * @test
     */
    public function itUsesCascadeShortcut(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->cascade();

        self::assertSame('CASCADE', $fk->getOnDelete());
        self::assertSame('CASCADE', $fk->getOnUpdate());

        $sql = $fk->toSql();
        self::assertStringContainsString('ON DELETE CASCADE', $sql);
        self::assertStringContainsString('ON UPDATE CASCADE', $sql);
    }

    /**
     * @test
     */
    public function itUsesRestrictOnDeleteShortcut(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->restrictOnDelete();

        self::assertSame('RESTRICT', $fk->getOnDelete());
        self::assertStringContainsString('ON DELETE RESTRICT', $fk->toSql());
    }

    /**
     * @test
     */
    public function itUsesRestrictOnUpdateShortcut(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->restrictOnUpdate();

        self::assertSame('RESTRICT', $fk->getOnUpdate());
        self::assertStringContainsString('ON UPDATE RESTRICT', $fk->toSql());
    }

    /**
     * @test
     */
    public function itUsesRestrictShortcut(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->restrict();

        self::assertSame('RESTRICT', $fk->getOnDelete());
        self::assertSame('RESTRICT', $fk->getOnUpdate());

        $sql = $fk->toSql();
        self::assertStringContainsString('ON DELETE RESTRICT', $sql);
        self::assertStringContainsString('ON UPDATE RESTRICT', $sql);
    }

    /**
     * @test
     */
    public function itUsesNullOnDeleteShortcut(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->nullOnDelete();

        self::assertSame('SET NULL', $fk->getOnDelete());
        self::assertStringContainsString('ON DELETE SET NULL', $fk->toSql());
    }

    /**
     * @test
     */
    public function itUsesNullOnUpdateShortcut(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->nullOnUpdate();

        self::assertSame('SET NULL', $fk->getOnUpdate());
        self::assertStringContainsString('ON UPDATE SET NULL', $fk->toSql());
    }

    /**
     * @test
     */
    public function itUsesNoActionOnDeleteShortcut(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->noActionOnDelete();

        self::assertSame('NO ACTION', $fk->getOnDelete());
        self::assertStringContainsString('ON DELETE NO ACTION', $fk->toSql());
    }

    /**
     * @test
     */
    public function itUsesNoActionOnUpdateShortcut(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->noActionOnUpdate();

        self::assertSame('NO ACTION', $fk->getOnUpdate());
        self::assertStringContainsString('ON UPDATE NO ACTION', $fk->toSql());
    }

    /**
     * @test
     */
    public function itUsesNoActionShortcut(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('users')->noAction();

        self::assertSame('NO ACTION', $fk->getOnDelete());
        self::assertSame('NO ACTION', $fk->getOnUpdate());

        $sql = $fk->toSql();
        self::assertStringContainsString('ON DELETE NO ACTION', $sql);
        self::assertStringContainsString('ON UPDATE NO ACTION', $sql);
    }

    /**
     * @test
     */
    public function itGeneratesComplexForeignKeySql(): void
    {
        $fk = new ForeignKeyDefinition('fk_post_author', 'author_id');
        $fk->references('wp_users', 'ID')
            ->onDelete('SET NULL')
            ->onUpdate('CASCADE');

        $expected = 'CONSTRAINT `fk_post_author` FOREIGN KEY (`author_id`) ' .
                   'REFERENCES `wp_users` (`ID`) ON DELETE SET NULL ON UPDATE CASCADE';
        self::assertSame($expected, $fk->toSql());
    }

    /**
     * @test
     */
    public function itSupportsMethodChaining(): void
    {
        $fk = new ForeignKeyDefinition('fk_chain', 'user_id');

        $result = $fk->references('users')
            ->cascadeOnDelete()
            ->restrictOnUpdate();

        self::assertInstanceOf(ForeignKeyDefinition::class, $result);
        self::assertSame($fk, $result);
    }

    /**
     * @test
     */
    public function itHandlesMinimalConfiguration(): void
    {
        $fk = new ForeignKeyDefinition('fk_minimal', 'user_id');
        $fk->references('users');

        $expected = 'CONSTRAINT `fk_minimal` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)';
        self::assertSame($expected, $fk->toSql());
    }

    /**
     * @test
     */
    public function itOverwritesPreviousActions(): void
    {
        $fk = new ForeignKeyDefinition('fk_test', 'user_id');
        $fk->references('users')
            ->cascadeOnDelete()
            ->restrictOnDelete();

        self::assertSame('RESTRICT', $fk->getOnDelete());
        self::assertStringContainsString('ON DELETE RESTRICT', $fk->toSql());
        self::assertStringNotContainsString('ON DELETE CASCADE', $fk->toSql());
    }

    /**
     * @test
     */
    public function itHandlesSpecialCharactersInNames(): void
    {
        $fk = new ForeignKeyDefinition('fk_user-posts', 'user_id');
        $fk->references('wp-users', 'user-id');

        $expected = 'CONSTRAINT `fk_user-posts` FOREIGN KEY (`user_id`) REFERENCES `wp-users` (`user-id`)';
        self::assertSame($expected, $fk->toSql());
    }

    /**
     * @test
     */
    public function itValidatesAllReferentialActions(): void
    {
        $validActions = ['RESTRICT', 'CASCADE', 'SET NULL', 'NO ACTION', 'SET DEFAULT'];

        foreach ($validActions as $action) {
            $fkDelete = new ForeignKeyDefinition('fk_test', 'test_id');
            $fkDelete->references('test_table')->onDelete($action);

            $fkUpdate = new ForeignKeyDefinition('fk_test', 'test_id');
            $fkUpdate->references('test_table')->onUpdate($action);

            self::assertSame($action, $fkDelete->getOnDelete());
            self::assertSame($action, $fkUpdate->getOnUpdate());
        }
    }

    /**
     * @test
     */
    public function itGeneratesSqlWithoutActionsWhenNotSet(): void
    {
        $fk = new ForeignKeyDefinition('fk_simple', 'category_id');
        $fk->references('categories', 'id');

        $sql = $fk->toSql();
        self::assertStringNotContainsString('ON DELETE', $sql);
        self::assertStringNotContainsString('ON UPDATE', $sql);
    }
}
