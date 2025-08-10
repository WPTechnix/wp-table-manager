<?php

/**
 * Foreign Key Definition Class
 *
 * Represents a foreign key constraint definition for MySQL/MariaDB CREATE TABLE statements.
 */

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Schema;

use WPTechnix\WPTableManager\Exceptions\SchemaException;

/**
 * Class ForeignKeyDefinition
 *
 * Represents a foreign key constraint definition for MySQL/MariaDB CREATE TABLE statements.
 */
class ForeignKeyDefinition
{
    /**
     * Referenced table.
     *
     * @var string|null
     */
    protected ?string $referencesTable = null;
    /**
     * Referenced column.
     *
     * @var string|null
     */
    protected ?string $referencesColumn = null;
    /**
     * ON DELETE action.
     *
     * @var string|null
     */
    protected ?string $onDelete = null;
    /**
     * ON UPDATE action.
     *
     * @var string|null
     */
    protected ?string $onUpdate = null;
    /**
     * Valid referential actions.
     *
     * @var array<int, string>
     */
    protected const VALID_ACTIONS = ['RESTRICT', 'CASCADE', 'SET NULL', 'NO ACTION', 'SET DEFAULT'];

    /**
     * Constructor.
     *
     * @param string $name    Constraint name.
     * @param string $column  Local column.
     */
    public function __construct(
        protected string $name,
        protected string $column
    ) {
    }

    /**
     * Set the referenced table and column.
     *
     * @param string $table  Referenced table.
     * @param string $column Referenced column.
     *
     * @return $this
     */
    public function references(string $table, string $column = 'id'): self
    {
        $this->referencesTable = $table;
        $this->referencesColumn = $column;
        return $this;
    }

    /**
     * Set the ON DELETE action.
     *
     * @param string $action Action (CASCADE, SET NULL, RESTRICT, NO ACTION, SET DEFAULT).
     *
     * @return $this
     *
     * @throws SchemaException If an invalid action is provided.
     */
    public function onDelete(string $action): self
    {
        $action = strtoupper($action);
        if (!in_array($action, self::VALID_ACTIONS, true)) {
            throw new SchemaException(
                "Invalid ON DELETE action: {$action}. Valid actions are: " . implode(', ', self::VALID_ACTIONS)
            );
        }
        $this->onDelete = $action;
        return $this;
    }

    /**
     * Set the ON UPDATE action.
     *
     * @param string $action Action (CASCADE, SET NULL, RESTRICT, NO ACTION, SET DEFAULT).
     *
     * @return $this
     *
     * @throws SchemaException If an invalid action is provided.
     */
    public function onUpdate(string $action): self
    {
        $action = strtoupper($action);
        if (!in_array($action, self::VALID_ACTIONS, true)) {
            throw new SchemaException(
                "Invalid ON UPDATE action: {$action}. Valid actions are: " . implode(', ', self::VALID_ACTIONS)
            );
        }
        $this->onUpdate = $action;
        return $this;
    }

    /**
     * Shortcut for ON DELETE CASCADE.
     *
     * @return $this
     */
    public function cascadeOnDelete(): self
    {
        return $this->onDelete('CASCADE');
    }

    /**
     * Shortcut for ON UPDATE CASCADE.
     *
     * @return $this
     */
    public function cascadeOnUpdate(): self
    {
        return $this->onUpdate('CASCADE');
    }

    /**
     * Shortcut for both ON DELETE and ON UPDATE CASCADE.
     *
     * @return $this
     */
    public function cascade(): self
    {
        return $this->cascadeOnDelete()->cascadeOnUpdate();
    }

    /**
     * Shortcut for ON DELETE RESTRICT.
     *
     * @return $this
     */
    public function restrictOnDelete(): self
    {
        return $this->onDelete('RESTRICT');
    }

    /**
     * Shortcut for ON UPDATE RESTRICT.
     *
     * @return $this
     */
    public function restrictOnUpdate(): self
    {
        return $this->onUpdate('RESTRICT');
    }

    /**
     * Shortcut for both ON DELETE and ON UPDATE RESTRICT.
     *
     * @return $this
     */
    public function restrict(): self
    {
        return $this->restrictOnDelete()->restrictOnUpdate();
    }

    /**
     * Shortcut for ON DELETE SET NULL.
     *
     * @return $this
     */
    public function nullOnDelete(): self
    {
        return $this->onDelete('SET NULL');
    }

    /**
     * Shortcut for ON UPDATE SET NULL.
     *
     * @return $this
     */
    public function nullOnUpdate(): self
    {
        return $this->onUpdate('SET NULL');
    }

    /**
     * Shortcut for ON DELETE NO ACTION.
     *
     * @return $this
     */
    public function noActionOnDelete(): self
    {
        return $this->onDelete('NO ACTION');
    }

    /**
     * Shortcut for ON UPDATE NO ACTION.
     *
     * @return $this
     */
    public function noActionOnUpdate(): self
    {
        return $this->onUpdate('NO ACTION');
    }

    /**
     * Shortcut for both ON DELETE and ON UPDATE NO ACTION.
     *
     * @return $this
     */
    public function noAction(): self
    {
        return $this->noActionOnDelete()->noActionOnUpdate();
    }

    /**
     * Generate the foreign key constraint SQL.
     *
     * @return string
     *
     * @throws SchemaException If references are not set.
     */
    public function toSql(): string
    {
        if (null === $this->referencesTable || null === $this->referencesColumn) {
            throw new SchemaException('Foreign key references not set for constraint ' . $this->name);
        }

        $parts = [
            sprintf('CONSTRAINT `%s`', $this->name),
            sprintf('FOREIGN KEY (`%s`)', $this->column),
            sprintf('REFERENCES `%s` (`%s`)', $this->referencesTable, $this->referencesColumn),
        ];
        if (null !== $this->onDelete) {
            $parts[] = sprintf('ON DELETE %s', $this->onDelete);
        }

        if (null !== $this->onUpdate) {
            $parts[] = sprintf('ON UPDATE %s', $this->onUpdate);
        }

        return implode(' ', $parts);
    }

    /**
     * Get the constraint name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the local column.
     *
     * @return string
     */
    public function getColumn(): string
    {
        return $this->column;
    }

    /**
     * Get the referenced table.
     *
     * @return string|null
     */
    public function getReferencesTable(): ?string
    {
        return $this->referencesTable;
    }

    /**
     * Get the referenced column.
     *
     * @return string|null
     */
    public function getReferencesColumn(): ?string
    {
        return $this->referencesColumn;
    }

    /**
     * Get the ON DELETE action.
     *
     * @return string|null
     */
    public function getOnDelete(): ?string
    {
        return $this->onDelete;
    }

    /**
     * Get the ON UPDATE action.
     *
     * @return string|null
     */
    public function getOnUpdate(): ?string
    {
        return $this->onUpdate;
    }
}
