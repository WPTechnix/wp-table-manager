<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Integration\Fixtures;

use WPTechnix\WPTableManager\Table;
use WPTechnix\WPTableManager\Schema\CreateTableSchema;

/**
 * Table for testing sanitization needs to define all properties at initialization.
 */
class TestSanitizationTable extends Table
{
    protected int $schemaVersion = 10001;
    protected string $tableName = 'sanitize';
    protected string $tableSingularName = 'sanitize';
    protected string $tableAlias = 'san';
    protected string $primaryKeyColumn = 'id';
    protected string $foreignKeyName = 'sanitize_id';

    protected function migrateTo10001(): bool
    {
        $result = $this->createTable(closure: function (CreateTableSchema $table) {
            $table->id();
            $table->string('normal_column', 100);
            $table->string('321create', 100); // should become _321create.
            $table->string('column-with-special-chars@create!', 100); // columnwithspecialcharscreate
            $table->string('column with spaces create', 100); // columnwithspecialcharscreate
            return $table;
        });

        if (!$result) {
            return false;
        }

        // Add columns with problematic names - they will be sanitized
        // The cleanIdentifier method will sanitize these names:
        // 'column-with-special@chars!' becomes 'columnwithspecialchars'
        // '123numeric' becomes '_123numeric'
        // 'column with spaces' becomes 'columnwithspaces'
        return $this->addColumn('column-with-special@chars!', 'VARCHAR(100)')
               && $this->addColumn('123numeric', 'VARCHAR(100)')
               && $this->addColumn('column with spaces', 'VARCHAR(100)');
    }
}
