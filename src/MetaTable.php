<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager;

use WPTechnix\WPTableManager\Schema\CreateTableSchema;
use WPTechnix\WPTableManager\Interfaces\TableInterface;
use wpdb;

/**
 * Abstract Meta Table Class.
 *
 * Provides a standardized, reusable foundation for creating WordPress-style
 * meta tables that are linked to a parent table.
 */
abstract class MetaTable extends Table
{
    /**
     * Schema Version
     *
     * @var int
     */
    protected int $schemaVersion = 10001;

    /**
     * Primary key column.
     *
     * @var string
     */
    protected string $primaryKeyColumn = 'meta_id';

    /**
     * MetaTable constructor.
     *
     * @param TableInterface $parentTable Parent table object.
     * @param wpdb           $wpdb The WordPress database object.
     * @param string|null    $pluginPrefix The plugin prefix.
     */
    public function __construct(
        protected TableInterface $parentTable,
        wpdb $wpdb,
        ?string $pluginPrefix = null
    ) {
        parent::__construct($wpdb, $pluginPrefix);
    }

    /**
     * Creates the initial schema for the meta table.
     *
     * This migration sets up a standard meta table structure with columns for
     * the object ID, meta key, and meta value, along with appropriate indexes
     * and a foreign key constraint to the parent table.
     *
     * @return bool True on success, false on failure.
     */
    final protected function migrateTo10001(): bool
    {
        return $this->createTable(function (CreateTableSchema $schema) {

            $schema->id($this->primaryKeyColumn);

            // 1. Add the foreign key column that links to the parent table.
            $foreignKeyColumn = $this->parentTable->getForeignKeyName();
            $schema->bigInteger($foreignKeyColumn)->unsigned();

            // 2. Add the standard meta_key and meta_value columns.
            $schema->string('meta_key', 191)->nullable();
            $schema->longText('meta_value')->nullable();

            // 3. Add a composite index for performance.
            // This is crucial for efficiently querying meta by object ID and key.
            $schema->index([$foreignKeyColumn, 'meta_key']);

            // 4. Add the foreign key constraint for data integrity.
            // This ensures that meta records are deleted if the parent record is deleted.
            $schema->foreign($foreignKeyColumn)
                   ->references($this->parentTable->getTableName(), $this->parentTable->getPrimaryKey())
                   ->cascadeOnDelete();

            return $schema;
        });
    }
}
