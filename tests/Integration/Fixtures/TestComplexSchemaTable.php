<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Tests\Integration\Fixtures;

use WPTechnix\WPTableManager\Table;
use WPTechnix\WPTableManager\Schema\CreateTableSchema;

/**
 * Table with complex schema for testing various column types.
 */
class TestComplexSchemaTable extends Table
{
    protected int $schemaVersion = 10001;
    protected string $tableName = 'complex';
    protected string $tableAlias = 'com';
    protected string $primaryKeyColumn = 'id';
    protected string $foreignKeyName = 'complex_id';

    protected function migrateTo10001(): bool
    {
        return $this->createTable(function (CreateTableSchema $table) {
            $table->id();
            // Numeric types
            $table->tinyInteger('tiny_int');
            $table->smallInteger('small_int');
            $table->mediumInteger('medium_int');
            $table->bigInteger('big_int');
            $table->decimal('decimal_col', 10, 2);
            $table->float('float_col');
            $table->double('double_col');

            // String types
            $table->string('varchar_col', 255);
            $table->char('char_col', 10);
            $table->text('text_col');
            $table->longText('longtext_col');

            // Date/Time types
            $table->date('date_col');
            $table->datetime('datetime_col');
            $table->timestamp('timestamp_col');
            $table->time('time_col');
            $table->year('year_col');

            // Binary types
            $table->blob('blob_col');
            $table->binary('binary_col', 16);

            // Special types
            $table->boolean('boolean_col');
            $table->enum('enum_col', ['option1', 'option2', 'option3']);
            $table->set('set_col', ['tag1', 'tag2', 'tag3']);

            // JSON type (conditional)
            $table->json('json_col');

            return $table;
        });
    }
}
