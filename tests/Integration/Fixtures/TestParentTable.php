<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Integration\Fixtures;

use WPTechnix\WPTableManager\Table;
use WPTechnix\WPTableManager\Schema\CreateTableSchema;

/**
 * Parent table for foreign key testing.
 */
class TestParentTable extends Table
{
    protected int $schemaVersion = 10001;
    protected string $tableName = 'parent';
    protected string $tableAlias = 'par';
    protected string $primaryKeyColumn = 'id';
    protected string $foreignKeyName = 'parent_id';

    protected function migrateTo10001(): bool
    {
        return $this->createTable(function (CreateTableSchema $table) {
            $table->string('name', 100);
            // Ensure InnoDB for foreign key references
            $table->engine('InnoDB');
            return $table;
        });
    }
}
