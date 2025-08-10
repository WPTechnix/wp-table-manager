<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Unit\Schema;

use WP_UnitTestCase;
use WPTechnix\WPTableManager\Schema\ForeignKeyDefinition;
use WPTechnix\WPTableManager\Exceptions\SchemaException;

/**
 * Class ForeignKeyDefinitionTest
 *
 * @covers \WPTechnix\WPTableManager\Schema\ForeignKeyDefinition
 * @uses \WPTechnix\WPTableManager\Util
 */
final class ForeignKeyDefinitionTest extends WP_UnitTestCase
{
    /**
     * @test
     */
    public function itConstructsWithInitialProperties(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');

        self::assertSame('fk_user_id', $fk->getName());
        self::assertSame('user_id', $fk->getColumn());
        self::assertNull($fk->getReferencesTable());
        self::assertNull($fk->getReferencesColumn());
        self::assertNull($fk->getOnDelete());
        self::assertNull($fk->getOnUpdate());
    }

    /**
     * @test
     */
    public function itSetsReferencesUsingReferencesAndOnMethods(): void
    {
        $fk = new ForeignKeyDefinition('fk_author', 'author_id');
        $fk->references('id')->on('users');

        self::assertSame('users', $fk->getReferencesTable());
        self::assertSame('id', $fk->getReferencesColumn());
    }

    /**
     * @test
     */
    public function itSetsReferencesUsingOnlyReferencesMethod(): void
    {
        $fk = new ForeignKeyDefinition('fk_author', 'author_id');
        $fk->references('id', 'users'); // Note the bug fix here

        self::assertSame('users', $fk->getReferencesTable());
        self::assertSame('id', $fk->getReferencesColumn());
    }

    /**
     * @test
     */
    public function itGeneratesBasicForeignKeySql(): void
    {
        $fk = new ForeignKeyDefinition('fk_user_id', 'user_id');
        $fk->references('id', 'users');

        $expected = 'CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)';
        self::assertSame($expected, $fk->toSql());
    }

    /**
     * @test
     */
    public function itGeneratesComplexForeignKeySql(): void
    {
        $fk = new ForeignKeyDefinition('fk_post_author', 'author_id');
        $fk->references('ID', 'wp_users')
           ->onDelete('SET NULL')
           ->onUpdate('CASCADE');

        $expected = 'CONSTRAINT `fk_post_author` FOREIGN KEY (`author_id`) REFERENCES `wp_users` (`ID`)';
        $expected .= ' ON DELETE SET NULL ON UPDATE CASCADE';
        self::assertSame($expected, $fk->toSql());
    }

    /**
     * @test
     */
    public function itThrowsExceptionWhenGeneratingSqlIfReferencesAreNotSet(): void
    {
        $fk = new ForeignKeyDefinition('fk_test', 'test_id');

        $this->expectException(SchemaException::class);
        $this->expectExceptionMessage('Foreign key references not set for constraint fk_test');

        $fk->toSql();
    }

    /**
     * @test
     * @dataProvider provideValidActions
     */
    public function itSetsOnDeleteAction(string $action, string $expected): void
    {
        $fk = new ForeignKeyDefinition('fk_test', 'test_id');
        $fk->references('id', 'users')->onDelete($action);
        self::assertSame($expected, $fk->getOnDelete());
        self::assertStringContainsString("ON DELETE {$expected}", $fk->toSql());
    }

    /**
     * @test
     * @dataProvider provideValidActions
     */
    public function itSetsOnUpdateAction(string $action, string $expected): void
    {
        $fk = new ForeignKeyDefinition('fk_test', 'test_id');
        $fk->references('id', 'users')->onUpdate($action);
        self::assertSame($expected, $fk->getOnUpdate());
        self::assertStringContainsString("ON UPDATE {$expected}", $fk->toSql());
    }

    /**
     * Provide Valid Actions.
     *
     * @return array<string, array<string>>
     */
    public static function provideValidActions(): array
    {
        return [
            'CASCADE' => ['CASCADE', 'CASCADE'],
            'cascade (lowercase)' => ['cascade', 'CASCADE'],
            'SET NULL' => ['SET NULL', 'SET NULL'],
            'set null (lowercase)' => ['set null', 'SET NULL'],
            'RESTRICT' => ['RESTRICT', 'RESTRICT'],
            'NO ACTION' => ['NO ACTION', 'NO ACTION'],
            'SET DEFAULT' => ['SET DEFAULT', 'SET DEFAULT'],
        ];
    }

    /**
     * @test
     */
    public function itThrowsExceptionForInvalidOnDeleteAction(): void
    {
        $fk = new ForeignKeyDefinition('fk_test', 'test_id');
        $this->expectException(SchemaException::class);
        $this->expectExceptionMessage('Invalid ON DELETE action: INVALID');
        $fk->onDelete('INVALID');
    }

    /**
     * @test
     */
    public function itThrowsExceptionForInvalidOnUpdateAction(): void
    {
        $fk = new ForeignKeyDefinition('fk_test', 'test_id');
        $this->expectException(SchemaException::class);
        $this->expectExceptionMessage('Invalid ON UPDATE action: WRONG');
        $fk->onUpdate('WRONG');
    }

    /**
     * @test
     */
    public function itUsesShortcutMethodsCorrectly(): void
    {
        $fk = new ForeignKeyDefinition('fk_test', 'test_id');
        $fk->references('id', 'test')->cascadeOnDelete();
        self::assertSame('CASCADE', $fk->getOnDelete());

        $fk->restrictOnUpdate();
        self::assertSame('RESTRICT', $fk->getOnUpdate());

        $fk->nullOnDelete();
        self::assertSame('SET NULL', $fk->getOnDelete());

        $fk->noActionOnUpdate();
        self::assertSame('NO ACTION', $fk->getOnUpdate());
    }

    /**
     * @test
     */
    public function itUsesCompoundShortcutMethods(): void
    {
        $fk = new ForeignKeyDefinition('fk_test', 'test_id');
        $fk->references('id', 'test')->cascade();
        self::assertSame('CASCADE', $fk->getOnDelete());
        self::assertSame('CASCADE', $fk->getOnUpdate());

        $fk->restrict();
        self::assertSame('RESTRICT', $fk->getOnDelete());
        self::assertSame('RESTRICT', $fk->getOnUpdate());

        $fk->noAction();
        self::assertSame('NO ACTION', $fk->getOnDelete());
        self::assertSame('NO ACTION', $fk->getOnUpdate());
    }

    /**
     * @test
     */
    public function itSupportsMethodChaining(): void
    {
        $fk = new ForeignKeyDefinition('fk_chain', 'chain_id');

        $instance = $fk->references('id', 'test')
                       ->onDelete('CASCADE')
                       ->onUpdate('RESTRICT');

        self::assertSame('CASCADE', $instance->getOnDelete());
        self::assertSame('RESTRICT', $instance->getOnUpdate());
    }

    /**
     * @test
     */
    public function itOverwritesPreviousActions(): void
    {
        $fk = new ForeignKeyDefinition('fk_overwrite', 'col');
        $fk->references('id', 'test')
           ->onDelete('CASCADE')
           ->onUpdate('SET NULL')
           ->onDelete('RESTRICT'); // Overwrite

        self::assertSame('RESTRICT', $fk->getOnDelete());
        self::assertSame('SET NULL', $fk->getOnUpdate());

        $sql = $fk->toSql();
        self::assertStringContainsString('ON DELETE RESTRICT', $sql);
        self::assertStringNotContainsString('ON DELETE CASCADE', $sql);
    }

    /**
     * @test
     */
    public function itHandlesSpecialCharactersInNamesByQuoting(): void
    {
        $fk = new ForeignKeyDefinition('fk-user-posts', 'user-id');
        $fk->references('user-id', 'wp-users');

        $expected = 'CONSTRAINT `fk-user-posts` FOREIGN KEY (`user-id`) REFERENCES `wp-users` (`user-id`)';
        self::assertSame($expected, $fk->toSql());
    }
}
