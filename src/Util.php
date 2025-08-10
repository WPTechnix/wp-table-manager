<?php

declare(strict_types=1);

namespace WPTechnix\WPTableManager;

use wpdb;

class Util
{
    /**
     * Cleans a string to be safely used as a database identifier.
     *
     * @param string $identifier The raw identifier to be sanitized.
     * @return string The sanitized identifier.
     */
    public static function cleanSqlIdentifier(string $identifier): string
    {
        $identifier = (string) preg_replace('/\s+/', '_', $identifier);
        $cleaned = (string) preg_replace('/[^A-Za-z0-9_]/', '', $identifier);
        if (empty($cleaned)) {
            return '_';
        }
        if (is_numeric($cleaned[0])) {
            $cleaned = '_' . $cleaned;
        }
        return $cleaned;
    }


    /**
     * Generate an index name.
     *
     * @param string                    $tableName    Table name.
     * @param array<int, string>|string $columnNames Column names.
     * @param string                    $prefix       Index type prefix.
     *
     * @return string
     */
    public static function generateSqlIndexName(string $tableName, array|string $columnNames, string $prefix): string
    {

        $columnNames = is_array($columnNames) ? $columnNames : [$columnNames];
        $columnNames = implode('_', $columnNames);
        $columnNames = preg_replace('/[^A-Za-z0-9_]/', '', $columnNames);

        $idxName = sprintf('%s_%s_%s', $tableName, $columnNames, $prefix);
        if (strlen($idxName) > 64) {
            $hash = substr(md5($idxName), 0, 8);
            $idxName = substr($idxName, 0, 64 - strlen($hash) - 1) . '_' . $hash;
        }

        return $idxName;
    }
}
