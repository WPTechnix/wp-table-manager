<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Integration\Fixtures;

use WPTechnix\WPTableManager\Table;
use WPTechnix\WPTableManager\Schema\CreateTableSchema;
use WPTechnix\WPTableManager\Interfaces\TableInterface;

/**
 * Child table for foreign key testing.
 */
class TestChildTable extends Table
{
    protected int $schemaVersion = 10001;
    protected string $tableName = 'child';
    protected string $tableAlias = 'chi';
    protected string $primaryKeyColumn = 'id';
    protected string $foreignKeyName = 'child_id';

    private ?TableInterface $parentTable = null;

    public function setParentTable(TableInterface $table): void
    {
        $this->parentTable = $table;
    }

    protected function migrateTo10001(): bool
    {
        $result = $this->createTable(function (CreateTableSchema $table) {
            $table->id();
            $table->bigInteger('parent_id')->unsigned();
            $table->bigInteger('other_parent_id')->unsigned()->nullable();
            $table->string('name', 100);
            // Ensure InnoDB for foreign keys
            $table->engine('InnoDB');
            return $table;
        });

        if (empty($result) || empty($this->parentTable)) {
            return false;
        }

        // Add foreign keys using different methods
        return $this->addForeignKeyToTable($this->parentTable, 'CASCADE', 'CASCADE', 'fk_parent_id')
                  && $this->addForeignKey(
                      'other_parent_id',
                      $this->parentTable->getTableName(),
                      'id',
                      'fk_other_parent',
                      'RESTRICT',
                      'RESTRICT'
                  )
                  && $this->addForeignKey('parent_id', $this->parentTable->getTableName(), 'id', 'fk_to_drop')
                  && $this->dropForeignKey('fk_to_drop');
    }
}
