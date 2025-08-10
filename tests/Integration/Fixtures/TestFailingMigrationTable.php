<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Integration\Fixtures;

use WPTechnix\WPTableManager\Table;
use WPTechnix\WPTableManager\Schema\CreateTableSchema;

/**
 * Table for testing migration failure and resumption.
 */
class TestFailingMigrationTable extends Table
{
    protected int $schemaVersion = 10003;
    protected string $tableName = 'failing';
    protected string $tableAlias = 'fai';
    protected string $primaryKeyColumn = 'id';
    protected string $foreignKeyName = 'failing_id';

    private bool $shouldFail = true;

    protected function migrateTo10001(): bool
    {
        return $this->createTable(function (CreateTableSchema $table) {
            $table->string('name', 100);
            return $table;
        });
    }

    protected function migrateTo10002(): bool
    {
        if ($this->shouldFail) {
            // Simulate a failure
            throw new \Exception('Simulated migration failure');
        }
        return $this->addColumn('status', 'VARCHAR(50)');
    }

    protected function migrateTo10003(): bool
    {
        return $this->addColumn('created_at', 'DATETIME');
    }

    public function fixIssue(): void
    {
        $this->shouldFail = false;
    }
}
