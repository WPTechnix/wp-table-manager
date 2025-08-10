<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager;

use WPTechnix\WPTableManager\Schema\CreateTableSchema;
use WPTechnix\WPTableManager\Interfaces\TableInterface;
use wpdb;

/**
 * Abstract Meta Table Class.
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
     * Primary key column
     *
     * @var string
     */
    protected string $primaryKeyColumn = 'meta_id';

    /**
     * Foreign column name.
     *
     * @var string
     */
    protected string $foreignColumnName;

    /**
     * The action to perform when parent row deleted having child
     * rows in meta table.
     *
     * @var null|string
     * @phpstan-var null|('RESTRICT'|'CASCADE'|'SET NULL'|'NO ACTION'|'SET DEFAULT')
     */
    protected ?string $onDeleteAction = 'RESTRICT';

    /**
     * Meta Table Constructor.
     *
     * @param TableInterface $parentTable Parent Table.
     * @param wpdb $wpdb WP Database object.
     * @param string|null $pluginPrefix Plugin Prefix.
     */
    public function __construct(
        protected TableInterface $parentTable,
        wpdb $wpdb,
        ?string $pluginPrefix = null
    ) {

        $this->tableSingularName = $this->getTableSingularName() . 'meta';
        $this->tableName = $this->tableSingularName;

        parent::__construct($wpdb, $pluginPrefix);

        $this->foreignColumnName  = $this->pluginPrefix . $this->parentTable->getTableSingularName() . '_id';

        $this->wpdb->{$this->getTableSingularName() . 'meta'} = $this->getTableName();
    }

    /**
     * Create Meta Table.
     */
    protected function migrateTo10001(): bool
    {
        return $this->createTable(function (CreateTableSchema $schema) {

            $schema->id($this->getPrimaryKey());

            $schema
                ->bigInteger($this->foreignColumnName)
                ->unsigned()
                ->index($this->foreignColumnName);

            // Add the standard meta_key and meta_value columns.
            $schema->string('meta_key', 191)->index('meta_key');
            $schema->longText('meta_value')->nullable();

            // Add a foreign key constraint to the parent table for data integrity.
            $fk = $schema->foreign($this->foreignColumnName)
                         ->references(
                             $this->parentTable->getTableName(),
                             $this->parentTable->getPrimaryKey()
                         );

            if (isset($this->onDeleteAction)) {
                $fk->onDelete($this->onDeleteAction);
            }

            return $schema;
        });
    }
}
