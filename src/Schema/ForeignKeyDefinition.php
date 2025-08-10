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
     * @param string $column Referenced column.
     * @param null|string $tableName Referenced table name.
     * @return static
     */
    public function references(string $column, ?string $tableName = null): static
    {
        $this->referencesColumn = $column;
        if (isset($tableName)) {
            // FIXED: Was assigning $column instead of $tableName.
            $this->referencesTable = $tableName;
        }

        return $this;
    }

    /**
     * Sets the referenced table.
     *
     * @param string $tableName Referenced table name.
     *
     * @return static
     */
    public function on(string $tableName): static
    {
        $this->referencesTable = $tableName;
        return $this;
    }

    /**
     * Set the ON DELETE action.
     *
     * @param string $action Action (CASCADE, SET NULL, RESTRICT, NO ACTION, SET DEFAULT).
     *
     * @return static
     *
     * @throws SchemaException If an invalid action is provided.
     */
    public function onDelete(string $action): static
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
     * @return static
     *
     * @throws SchemaException If an invalid action is provided.
     */
    public function onUpdate(string $action): static
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
     * @return static
     */
    public function cascadeOnDelete(): static
    {
        return $this->onDelete('CASCADE');
    }

    /**
     * Shortcut for ON UPDATE CASCADE.
     *
     * @return static
     */
    public function cascadeOnUpdate(): static
    {
        return $this->onUpdate('CASCADE');
    }

    /**
     * Shortcut for both ON DELETE and ON UPDATE CASCADE.
     *
     * @return static
     */
    public function cascade(): static
    {
        return $this->cascadeOnDelete()->cascadeOnUpdate();
    }

    /**
     * Shortcut for ON DELETE RESTRICT.
     *
     * @return static
     */
    public function restrictOnDelete(): static
    {
        return $this->onDelete('RESTRICT');
    }

    /**
     * Shortcut for ON UPDATE RESTRICT.
     *
     * @return static
     */
    public function restrictOnUpdate(): static
    {
        return $this->onUpdate('RESTRICT');
    }

    /**
     * Shortcut for both ON DELETE and ON UPDATE RESTRICT.
     *
     * @return static
     */
    public function restrict(): static
    {
        return $this->restrictOnDelete()->restrictOnUpdate();
    }

    /**
     * Shortcut for ON DELETE SET NULL.
     *
     * @return static
     */
    public function nullOnDelete(): static
    {
        return $this->onDelete('SET NULL');
    }

    /**
     * Shortcut for ON UPDATE SET NULL.
     *
     * @return static
     */
    public function nullOnUpdate(): static
    {
        return $this->onUpdate('SET NULL');
    }

    /**
     * Shortcut for ON DELETE NO ACTION.
     *
     * @return static
     */
    public function noActionOnDelete(): static
    {
        return $this->onDelete('NO ACTION');
    }

    /**
     * Shortcut for ON UPDATE NO ACTION.
     *
     * @return static
     */
    public function noActionOnUpdate(): static
    {
        return $this->onUpdate('NO ACTION');
    }

    /**
     * Shortcut for both ON DELETE and ON UPDATE NO ACTION.
     *
     * @return static
     */
    public function noAction(): static
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
