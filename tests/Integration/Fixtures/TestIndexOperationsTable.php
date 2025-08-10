<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Integration\Fixtures;

use WPTechnix\WPTableManager\Table;
use WPTechnix\WPTableManager\Schema\CreateTableSchema;

/**
 * Table for testing index operations.
 */
class TestIndexOperationsTable extends Table
{
    protected int $schemaVersion = 10001;
    protected string $tableName = 'indexes';
    protected string $tableAlias = 'idx';
    protected string $primaryKeyColumn = 'id';
    protected string $foreignKeyName = 'index_id';

    protected function migrateTo10001(): bool
    {
        $result = $this->createTable(function (CreateTableSchema $table) {
            $table->string('email', 191);
            $table->string('status', 50);
            $table->integer('priority');
            $table->text('content');
            $table->datetime('created_at');
            return $table;
        });

        if (!$result) {
            return false;
        }

        // Add various types of indexes
        return $this->addIndex('created_at', self::INDEX_TYPE_INDEX, 'idx_created_at')
                  && $this->addUniqueKey('email', 'uniq_email')
                  && $this->addIndex(['status', 'priority'], self::INDEX_TYPE_INDEX, 'idx_status_priority')
                  && $this->addIndex('priority', self::INDEX_TYPE_INDEX, 'idx_to_drop')
                  && $this->addIndex('content', self::INDEX_TYPE_FULLTEXT, 'ft_content')
                  && $this->dropIndex('idx_to_drop');
    }
}
