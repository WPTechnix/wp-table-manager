<?php

/**
 * Represents an index definition for MySQL CREATE TABLE statements.
 */

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Schema;

/**
 * Class IndexDefinition
 *
 * Represents an index definition for MySQL CREATE TABLE statements.
 */
class IndexDefinition
{
    /**
     * Index algorithm (BTREE, HASH).
     *
     * @var string|null
     */
    protected ?string $using = null;
    /**
     * Key block size.
     *
     * @var int|null
     */
    protected ?int $keyBlockSize = null;
    /**
     * Index comment.
     *
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * Index visibility (MySQL 8.0+).
     *
     * @var string|null
     */
    protected ?string $visibility = null;
    /**
     * Parser name for fulltext indexes.
     *
     * @var string|null
     */
    protected ?string $parser = null;
    /**
     * Column lengths for partial indexes.
     *
     * @var array<string, int>
     */
    protected array $columnLengths = [];

    /**
     * Constructor.
     *
     * @param string               $name    Index name.
     * @param array<int, string>   $columns Columns.
     * @param string               $type    Index type.
     */
    public function __construct(
        protected string $name,
        protected array $columns,
        protected string $type = 'INDEX'
    ) {
        $this->type = strtoupper($type);
    }

    /**
     * Set the index algorithm.
     *
     * @param string $algorithm Index algorithm (BTREE, HASH).
     *
     * @return $this
     */
    public function using(string $algorithm): self
    {
        $algorithm = strtoupper($algorithm);
        $validAlgos = ['BTREE', 'HASH'];
        if (in_array($algorithm, $validAlgos, true)) {
            $this->using = $algorithm;
        }

        return $this;
    }

    /**
     * Set the key block size.
     *
     * @param int $size Key block size in bytes.
     *
     * @return $this
     */
    public function keyBlockSize(int $size): self
    {
        if ($size > 0) {
            $this->keyBlockSize = $size;
        }
        return $this;
    }

    /**
     * Set the index comment.
     *
     * @param string $comment Index comment.
     *
     * @return $this
     */
    public function comment(string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Set the index visibility (MySQL 8.0+).
     *
     * @param bool $visible Whether the index is visible to the optimizer.
     *
     * @return $this
     */
    public function visible(bool $visible = true): self
    {
        $this->visibility = $visible ? 'VISIBLE' : 'INVISIBLE';
        return $this;
    }

    /**
     * Set the index as invisible (MySQL 8.0+).
     *
     * @return $this
     */
    public function invisible(): self
    {
        return $this->visible(false);
    }

    /**
     * Set the fulltext parser.
     *
     * @param string $parser Parser name.
     *
     * @return $this
     */
    public function withParser(string $parser): self
    {
        if ('FULLTEXT' === $this->type) {
            $this->parser = $parser;
        }
        return $this;
    }

    /**
     * Set partial index length for a column.
     *
     * @param string $column Column name.
     * @param int    $length Partial index length.
     *
     * @return $this
     */
    public function length(string $column, int $length): self
    {
        if (in_array($column, $this->columns, true) && $length > 0) {
            $this->columnLengths[$column] = $length;
        }
        return $this;
    }

    /**
     * Set partial index lengths for multiple columns.
     *
     * @param array<string, int> $lengths Array of column => length pairs.
     *
     * @return $this
     */
    public function lengths(array $lengths): self
    {
        foreach ($lengths as $column => $length) {
            $this->length($column, $length);
        }
        return $this;
    }

    /**
     * Generate the index definition SQL.
     *
     * @return string
     */
    public function toSql(): string
    {
        // Build column list with optional lengths.
        $columnDefinitions = [];
        foreach ($this->columns as $column) {
            $columnDef = '`' . $column . '`';
            if (isset($this->columnLengths[$column])) {
                $columnDef .= '(' . $this->columnLengths[$column] . ')';
            }
            $columnDefinitions[] = $columnDef;
        }
        $columnList = implode(', ', $columnDefinitions);

        // Build the base index definition.
        $sql = match ($this->type) {
            'UNIQUE' => sprintf('UNIQUE KEY `%s` (%s)', $this->name, $columnList),
            'FULLTEXT' => sprintf('FULLTEXT KEY `%s` (%s)', $this->name, $columnList),
            'SPATIAL' => sprintf('SPATIAL KEY `%s` (%s)', $this->name, $columnList),
            default => sprintf('KEY `%s` (%s)', $this->name, $columnList),
        };

        // Add index options.
        $options = [];
        if ($this->using !== null) {
            $options[] = 'USING ' . $this->using;
        }

        if ($this->keyBlockSize !== null) {
            $options[] = 'KEY_BLOCK_SIZE=' . $this->keyBlockSize;
        }

        if ($this->parser !== null && 'FULLTEXT' === $this->type) {
            $options[] = 'WITH PARSER ' . $this->parser;
        }

        if ($this->comment !== null) {
            $options[] = "COMMENT '" . addslashes($this->comment) . "'";
        }

        if ($this->visibility !== null) {
            $options[] = $this->visibility;
        }

        if (!empty($options)) {
            $sql .= ' ' . implode(' ', $options);
        }

        return $sql;
    }

    /**
     * Get the index name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the index columns.
     *
     * @return array<int, string>
     */
    public function getColumns(): array
    {
        return $this->columns;
    }

    /**
     * Get the index type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Check if this is a unique index.
     *
     * @return bool
     */
    public function isUnique(): bool
    {
        return 'UNIQUE' === $this->type;
    }

    /**
     * Check if this is a fulltext index.
     *
     * @return bool
     */
    public function isFulltext(): bool
    {
        return 'FULLTEXT' === $this->type;
    }

    /**
     * Check if this is a spatial index.
     *
     * @return bool
     */
    public function isSpatial(): bool
    {
        return 'SPATIAL' === $this->type;
    }
}
