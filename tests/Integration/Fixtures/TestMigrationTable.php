<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Integration\Fixtures;

use WPTechnix\WPTableManager\Table;
use WPTechnix\WPTableManager\Schema\CreateTableSchema;

/**
 * Table for testing incremental migrations.
 */
class TestMigrationTable extends Table
{
    protected int $schemaVersion = 10003;
    protected string $tableName = 'migration';
    protected string $tableSingularName = 'migration';
    protected string $tableAlias = 'mig';
    protected string $primaryKeyColumn = 'id';
    protected string $foreignKeyName = 'migration_id';

    protected function migrateTo10001(): bool
    {
        return $this->createTable(function (CreateTableSchema $table) {
            $table->id();
            $table->string('title', 200)->notNull();
            return $table;
        });
    }

    protected function migrateTo10002(): bool
    {
        return $this->addColumn('status', 'VARCHAR(50) DEFAULT "pending"')
               && $this->addColumn('priority', 'INT DEFAULT 0');
    }

    protected function migrateTo10003(): bool
    {
        return $this->addColumn('updated_at', 'DATETIME NULL')
               && $this->dropColumn('priority')
               && $this->renameColumn('status', 'category');
    }
}
