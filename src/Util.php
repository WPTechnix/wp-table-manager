<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager;

/**
 * Utility functions for database table management.
 *
 * This class provides helper methods for sanitizing SQL identifiers and generating
 * standardized index names that comply with MySQL/MariaDB naming conventions.
 *
 * @since 1.0.0
 */
class Util
{
    /**
     * Maximum length for MySQL identifiers (table names, column names, index names).
     */
    private const MAX_IDENTIFIER_LENGTH = 64;

    /**
     * Cleans a string to be safely used as a database identifier.
     *
     * This method sanitizes input to create valid MySQL/MariaDB identifiers by:
     * - Converting spaces and hyphens to underscores
     * - Removing all non-alphanumeric characters except underscores
     * - Ensuring the identifier doesn't start with a number
     * - Providing a fallback for empty inputs
     *
     * @param string $identifier The raw identifier to be sanitized.
     * @return string The sanitized identifier, guaranteed to be non-empty and valid.
     */
    public static function cleanSqlIdentifier(string $identifier): string
    {
        // Handle empty input early
        if ('' === trim($identifier)) {
            return '_';
        }

        // Replace spaces and hyphens with underscores
        $step1 = preg_replace('/[\s\-]/', '_', $identifier);
        if (null === $step1) {
            return '_'; // Handle preg_replace failure
        }

        // Remove all characters except alphanumeric and underscores
        $cleaned = preg_replace('/[^A-Za-z0-9_]/', '', $step1);
        if (null === $cleaned) {
            return '_'; // Handle preg_replace failure
        }

        // Handle empty result after cleaning
        if ('' === $cleaned) {
            return '_';
        }

        // Ensure identifier doesn't start with a number
        if (is_numeric($cleaned[0])) {
            $cleaned = '_' . $cleaned;
        }

        return $cleaned;
    }

    /**
     * Generate a standardized index name following WordPress and MySQL conventions.
     *
     * Creates index names in the format: {table}_{columns}_{prefix}
     * If the resulting name exceeds MySQL's 64-character limit, it will be truncated
     * and a hash will be appended to ensure uniqueness.
     *
     * @param string                    $tableName    The table name (without prefixes).
     * @param array<int, string>|string $columnNames  Column name(s) for the index.
     * @param string                    $prefix       Index type prefix (e.g., 'idx', 'uniq', 'fk').
     *
     * @return string The generated index name, guaranteed to be valid and within length limits.
     */
    public static function generateSqlIndexName(string $tableName, array|string $columnNames, string $prefix): string
    {
        // Normalize column names to array format
        $columns = is_array($columnNames) ? $columnNames : [$columnNames];

        // Join column names and clean the result
        $columnsString = implode('_', $columns);
        $cleanColumns = self::cleanSqlIdentifier($columnsString);

        // Clean all components
        $cleanTableName = self::cleanSqlIdentifier($tableName);
        $cleanPrefix = self::cleanSqlIdentifier($prefix);

        // Build the index name
        $indexName = sprintf('%s_%s_%s', $cleanTableName, $cleanColumns, $cleanPrefix);

        // Handle length constraints
        if (strlen($indexName) > self::MAX_IDENTIFIER_LENGTH) {
            $hash = substr(md5($indexName), 0, 8);
            $maxBaseLength = self::MAX_IDENTIFIER_LENGTH - strlen($hash) - 1; // -1 for underscore
            $indexName = substr($indexName, 0, $maxBaseLength) . '_' . $hash;
        }

        return $indexName;
    }
}
