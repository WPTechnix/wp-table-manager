<?php

/**
 * Represents a column definition for MySQL CREATE TABLE statements.
 */

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Schema;

use WPTechnix\WPTableManager\Util;

/**
 * Class ColumnDefinition
 *
 * Represents a column definition for MySQL CREATE TABLE statements.
 */
class ColumnDefinition
{
    /**
     * Whether the column is nullable.
     *
     * @var bool
     */
    protected bool $nullable = false;

    /**
     * Default value for the column.
     *
     * @var string|null
     */
    protected ?string $default = null;

    /**
     * Whether the column is unsigned.
     *
     * @var bool
     */
    protected bool $unsigned = false;

    /**
     * Whether the column auto-increments.
     *
     * @var bool
     */
    protected bool $autoIncrement = false;

    /**
     * Column comment.
     *
     * @var string|null
     */
    protected ?string $comment = null;

    /**
     * Whether the column is a primary key.
     *
     * @var bool
     */
    protected bool $isPrimary = false;

    /**
     * Whether the column should have a unique index.
     *
     * @var bool
     */
    protected bool $isUnique = false;

    /**
     * Whether the column should have a fulltext index.
     *
     * @var bool
     */
    protected bool $isFulltext = false;

    /**
     * Whether the column should have a regular index.
     *
     * @var bool
     */
    protected bool $hasIndex = false;

    /**
     * Whether to add ON UPDATE CURRENT_TIMESTAMP.
     *
     * @var bool
     */
    protected bool $onUpdateCurrent = false;

    /**
     * Character set for the column.
     *
     * @var string|null
     */
    protected ?string $charset = null;

    /**
     * Collation for the column.
     *
     * @var string|null
     */
    protected ?string $collation = null;

    /**
     * Whether the column is zerofill.
     *
     * @var bool
     */
    protected bool $zerofill = false;

    /**
     * Whether the column is binary.
     *
     * @var bool
     */
    protected bool $binary = false;

    /**
     * The column position in the table (FIRST or AFTER column_name).
     *
     * @var string|null
     */
    protected ?string $position = null;

    /**
     * Generated column expression (for virtual/stored generated columns).
     *
     * @var string|null
     */
    protected ?string $generated = null;

    /**
     * Whether the generated column is stored (true) or virtual (false).
     *
     * @var bool
     */
    protected bool $stored = false;

    /**
     * Reference to the parent schema (for adding indexes).
     *
     * @var CreateTableSchema|null
     */
    protected ?CreateTableSchema $schema = null;

    /**
     * Constructor.
     *
     * @param string $name Column name.
     * @param string $type Column type.
     */
    public function __construct(
        protected string $name,
        protected string $type
    ) {
        $this->name = Util::cleanSqlIdentifier($this->name);
        $this->type = $type;
    }

    /**
     * Set the parent schema reference.
     *
     * @param CreateTableSchema $schema The parent schema.
     *
     * @return $this
     */
    public function setSchema(CreateTableSchema $schema): self
    {
        $this->schema = $schema;
        return $this;
    }

    /**
     * Make the column nullable.
     *
     * @return $this
     */
    public function nullable(): self
    {
        $this->nullable = true;
        return $this;
    }

    /**
     * Make the column not nullable.
     *
     * @return $this
     */
    public function notNull(): self
    {
        $this->nullable = false;
        return $this;
    }

    /**
     * Set a default value for the column.
     *
     * @param string|int|float|bool|null $value Default value.
     * @param bool                       $raw   If true, the value will not be quoted.
     *
     * @return $this
     */
    public function default(string|int|float|bool|null $value, bool $raw = false): self
    {
        if (null === $value) {
            $this->default = 'NULL';
        } elseif (is_bool($value)) {
            $this->default = $value ? '1' : '0';
        } elseif (is_numeric($value)) {
            $this->default = (string) $value;
        } else {
            $unquotedDefaults = ['CURRENT_TIMESTAMP', 'NULL', 'NOW()', 'CURRENT_DATE', 'CURRENT_TIME'];
            $raw = $raw || in_array(strtoupper($value), $unquotedDefaults, true);
            $this->default = $raw ? $value : "'" . addslashes($value) . "'";
        }
        return $this;
    }

    /**
     * Make the column unsigned.
     *
     * @return $this
     */
    public function unsigned(): self
    {
        $this->unsigned = true;
        return $this;
    }

    /**
     * Make the column zerofill.
     *
     * @return $this
     */
    public function zerofill(): self
    {
        $this->zerofill = true;
        return $this;
    }

    /**
     * Make the column binary.
     *
     * @return $this
     */
    public function binary(): self
    {
        $this->binary = true;
        return $this;
    }

    /**
     * Make the column auto-increment.
     *
     * @return $this
     */
    public function autoIncrement(): self
    {
        $this->autoIncrement = true;
        return $this;
    }

    /**
     * Mark the column as primary key.
     *
     * @return $this
     */
    public function primary(): self
    {
        $this->isPrimary = true;
        return $this;
    }

    /**
     * Add a unique index for this column.
     *
     * @param string|null $indexName Custom index name (optional).
     *
     * @return $this
     */
    public function unique(?string $indexName = null): self
    {
        $this->isUnique = true;

        // If schema is available, add the unique index immediately
        if ($this->schema !== null) {
            $this->schema->unique($this->name, $indexName);
        }

        return $this;
    }

    /**
     * Add a fulltext index for this column.
     *
     * @param string|null $indexName Custom index name (optional).
     *
     * @return $this
     */
    public function fulltext(?string $indexName = null): self
    {
        $this->isFulltext = true;

        // If schema is available, add the fulltext index immediately
        if ($this->schema !== null) {
            $this->schema->fulltext($this->name, $indexName);
        }

        return $this;
    }

    /**
     * Add a regular index for this column.
     *
     * @param string|null $indexName Custom index name (optional).
     *
     * @return $this
     */
    public function index(?string $indexName = null): self
    {
        $this->hasIndex = true;

        // If schema is available, add the index immediately
        if ($this->schema !== null) {
            $this->schema->index($this->name, $indexName);
        }

        return $this;
    }

    /**
     * Add a comment to the column.
     *
     * @param string $comment Comment.
     *
     * @return $this
     */
    public function comment(string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Add ON UPDATE CURRENT_TIMESTAMP to the column.
     *
     * @return $this
     */
    public function onUpdateCurrentTimestamp(): self
    {
        $this->onUpdateCurrent = true;
        return $this;
    }

    /**
     * Set character set for the column.
     *
     * @param string $charset Character set.
     *
     * @return $this
     */
    public function charset(string $charset): self
    {
        $this->charset = $charset;
        return $this;
    }

    /**
     * Set collation for the column.
     *
     * @param string $collation Collation.
     *
     * @return $this
     */
    public function collation(string $collation): self
    {
        $this->collation = $collation;
        return $this;
    }

    /**
     * Set the column position to FIRST.
     *
     * @return $this
     */
    public function first(): self
    {
        $this->position = 'FIRST';
        return $this;
    }

    /**
     * Set the column position to AFTER another column.
     *
     * @param string $columnName The column name to place this column after.
     *
     * @return $this
     */
    public function after(string $columnName): self
    {
        $this->position = 'AFTER `' . $columnName . '`';
        return $this;
    }

    /**
     * Create a virtual generated column.
     *
     * @param string $expression The generation expression.
     *
     * @return $this
     */
    public function virtualAs(string $expression): self
    {
        $this->generated = $expression;
        $this->stored = false;
        return $this;
    }

    /**
     * Create a stored generated column.
     *
     * @param string $expression The generation expression.
     *
     * @return $this
     */
    public function storedAs(string $expression): self
    {
        $this->generated = $expression;
        $this->stored = true;
        return $this;
    }

    /**
     * Generate the column definition SQL.
     *
     * @param bool $isPartOfCompositePrimaryKey Whether this column is part of a composite primary key.
     *
     * @return string
     */
    public function toSql(bool $isPartOfCompositePrimaryKey = false): string
    {
        $parts = [sprintf('`%s` %s', $this->name, $this->type)];

        // Add column modifiers in proper order.
        if ($this->unsigned) {
            $parts[] = 'UNSIGNED';
        }

        if ($this->zerofill) {
            $parts[] = 'ZEROFILL';
        }

        if ($this->binary) {
            $parts[] = 'BINARY';
        }

        if ($this->charset !== null) {
            $parts[] = sprintf('CHARACTER SET %s', $this->charset);
        }

        if ($this->collation !== null) {
            $parts[] = sprintf('COLLATE %s', $this->collation);
        }

        // Generated column.
        if ($this->generated !== null) {
            $generationType = $this->stored ? 'STORED' : 'VIRTUAL';
            $parts[] = sprintf('GENERATED ALWAYS AS (%s) %s', $this->generated, $generationType);
        }

        // NULL/NOT NULL.
        $parts[] = $this->nullable ? 'NULL' : 'NOT NULL';

        // Default value.
        if ($this->default !== null) {
            $parts[] = sprintf('DEFAULT %s', $this->default);
        }

        // ON UPDATE.
        if ($this->onUpdateCurrent) {
            $parts[] = 'ON UPDATE CURRENT_TIMESTAMP';
        }

        // Auto increment.
        if ($this->autoIncrement) {
            $parts[] = 'AUTO_INCREMENT';
        }

        // Primary key (only if it's a single-column primary key).
        if ($this->isPrimary && !$isPartOfCompositePrimaryKey) {
            $parts[] = 'PRIMARY KEY';
        }

        // Comment.
        if ($this->comment !== null) {
            $parts[] = sprintf("COMMENT '%s'", addslashes($this->comment));
        }

        // Position (used in ALTER TABLE contexts).
        if ($this->position !== null) {
            $parts[] = $this->position;
        }

        return implode(' ', $parts);
    }

    /**
     * Get the column name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the column type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Check if the column is nullable.
     *
     * @return bool
     */
    public function isNullable(): bool
    {
        return $this->nullable;
    }

    /**
     * Check if the column is a primary key.
     *
     * @return bool
     */
    public function isPrimary(): bool
    {
        return $this->isPrimary;
    }

    /**
     * Check if the column should have a unique index.
     *
     * @return bool
     */
    public function isUnique(): bool
    {
        return $this->isUnique;
    }

    /**
     * Check if the column should have a fulltext index.
     *
     * @return bool
     */
    public function isFulltext(): bool
    {
        return $this->isFulltext;
    }

    /**
     * Check if the column should have a regular index.
     *
     * @return bool
     */
    public function hasIndex(): bool
    {
        return $this->hasIndex;
    }

    /**
     * Check if the column auto-increments.
     *
     * @return bool
     */
    public function isAutoIncrement(): bool
    {
        return $this->autoIncrement;
    }

    /**
     * Get the default value.
     *
     * @return string|null
     */
    public function getDefault(): ?string
    {
        return $this->default;
    }
}
