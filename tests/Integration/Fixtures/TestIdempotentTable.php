<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Integration\Fixtures;

use WPTechnix\WPTableManager\Table;
use WPTechnix\WPTableManager\Schema\CreateTableSchema;

/**
 * Table for testing idempotent operations.
 */
class TestIdempotentTable extends Table
{
    protected int $schemaVersion = 10001;
    protected string $tableName = 'idempotent';
    protected string $tableAlias = 'ide';
    protected string $primaryKeyColumn = 'id';
    protected string $foreignKeyName = 'idempotent_id';

    protected function migrateTo10001(): bool
    {
        $result = $this->createTable(function (CreateTableSchema $table) {
            $table->string('name', 100);
            $table->string('email', 191);
            return $table;
        });

        if (!$result) {
            return false;
        }

        // Run operations multiple times - should be idempotent
        for ($i = 0; $i < 3; $i++) {
            $result = $result
                      && $this->addColumn('status', 'VARCHAR(50) DEFAULT "active"')
                      && $this->addIndex('email', self::INDEX_TYPE_UNIQUE, 'uniq_email')
                      && $this->addIndex('name', self::INDEX_TYPE_INDEX, 'idx_name');
        }

        return $result;
    }
}
