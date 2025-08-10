<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Integration\Fixtures;

use WPTechnix\WPTableManager\Table;
use WPTechnix\WPTableManager\Schema\CreateTableSchema;

/**
 * Basic table for testing simple operations.
 */
class TestBasicTable extends Table
{
    protected int $schemaVersion = 10001;
    protected string $tableName = 'basic';
    protected string $tableAlias = 'bas';
    protected string $primaryKeyColumn = 'id';
    protected string $foreignKeyName = 'basic_id';

    protected function migrateTo10001(): bool
    {
         return $this->createTable(function (CreateTableSchema $table) {
             $table->id();
             $table->string('name', 100)->notNull();
             $table->string('email', 191)->unique();
             $table->datetime('created_at')->nullable();
             return $table;
         });
    }
}
