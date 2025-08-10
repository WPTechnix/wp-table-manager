<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Integration\Fixtures;

use WPTechnix\WPTableManager\Table;
use WPTechnix\WPTableManager\Schema\CreateTableSchema;

/**
 * Table for testing column operations.
 */
class TestColumnOperationsTable extends Table
{
    protected int $schemaVersion = 10001;
    protected string $tableName = 'columns';
    protected string $tableAlias = 'col';
    protected string $primaryKeyColumn = 'id';
    protected string $foreignKeyName = 'column_id';

    protected function migrateTo10001(): bool
    {
        $result = $this->createTable(function (CreateTableSchema $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('obsolete_column', 50);
            return $table;
        });

        if (!$result) {
            return false;
        }

        // Test various column operations
        return $this->addColumn('description', 'VARCHAR(255)')
               && $this->addColumn('price', 'DECIMAL(10,2)', 'name')
               && $this->addColumn('quantity', 'INT DEFAULT 0')
               && $this->modifyColumn('description', 'TEXT')
               && $this->renameColumn('quantity', 'amount')
               && $this->changeColumn('price', 'cost', 'DECIMAL(12,2) DEFAULT 0.00')
               && $this->dropColumn('obsolete_column');
    }
}
