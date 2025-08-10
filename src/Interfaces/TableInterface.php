<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager\Interfaces;

/**
 * Interface TableInterface
 */
interface TableInterface
{
    /**
     * Gets the current schema version of the table.
     *
     * @return int Schema version number.
     */
    public function getSchemaVersion(): int;

    /**
     * Gets the currently installed version of the table.
     *
     * @return int Installed version number.
     */
    public function getInstalledVersion(): int;

    /**
     * Gets the full, sanitized table name with prefixes.
     *
     * In a multisite installation, it uses the base network prefix (e.g., `wp_`)
     * for shared tables; otherwise, it uses the site-specific prefix (e.g., `wp_2_`).
     *
     * @param bool $withWpPrefix Whether to include the global WordPress prefix (e.g., 'wp_').
     * @return string The sanitized, fully prefixed table name.
     */
    public function getTableName(bool $withWpPrefix = true): string;

    /**
     * Gets the singular name, without WordPress or plugin prefixes.
     *
     * @return string
     */
    public function getTableSingularName(): string;

    /**
     * Gets the table alias used in queries.
     *
     * @return string Table alias.
     */
    public function getTableAlias(): string;

    /**
     * Gets the primary key column name for the table.
     *
     * @return string Primary key column name.
     */
    public function getPrimaryKey(): string;

    /**
     * Gets the foreign key name for the table.
     *
     * @return string Foreign key name.
     */
    public function getForeignKeyName(): string;

    /**
     * Installs the table in the database.
     *
     * @return void
     */
    public function install(): void;

    /**
     * Drops the table from the database.
     *
     * @return bool True on success, false on failure.
     */
    public function drop(): bool;
}
