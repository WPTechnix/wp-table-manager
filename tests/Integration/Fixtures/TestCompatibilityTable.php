<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Integration\Fixtures;

use WPTechnix\WPTableManager\Table;
use WPTechnix\WPTableManager\Schema\CreateTableSchema;

/**
 * Table for testing database compatibility methods.
 */
class TestCompatibilityTable extends Table
{
    protected int $schemaVersion = 10001;
    protected string $tableName = 'compat';
    protected string $tableAlias = 'cmp';
    protected string $primaryKeyColumn = 'id';
    protected string $foreignKeyName = 'compat_id';

    protected function migrateTo10001(): bool
    {
        return $this->createTable(function (CreateTableSchema $table) {
            $table->id();
            $table->string('test', 100);
            return $table;
        });
    }

    public function getDbVersion(): string
    {
        return $this->getMysqlOrMariaDbVersion();
    }

    public function checkIsMariaDb(): bool
    {
        return $this->isMariaDb();
    }

    public function checkMysqlVersion(string $version): bool
    {
        return $this->isMysqlAtLeast($version);
    }

    public function checkMariaDbVersion(string $version): bool
    {
        return $this->isMariaDbAtLeast($version);
    }
}
