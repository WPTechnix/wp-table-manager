<?php

// phpcs:disable

$_tests_lib_dir = rtrim(sys_get_temp_dir(), '/\\') . '/wordpress-tests-suite/wordpress-tests-lib';

// Forward custom PHPUnit Polyfills configuration to PHPUnit bootstrap file.
// We are using vendor folder but vendor-prefixed which doesn't include the PHPUnit Polyfills.

if (! file_exists("{$_tests_lib_dir}/includes/functions.php")) {
    echo "Could not find {$_tests_lib_dir}/includes/functions.php, have you run bin/install-wp-tests ?" . PHP_EOL; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    exit(1);
}

function maybe_create_tests_db(): void
{
    $db_host = getenv('WORDPRESS_DB_HOST') ?? 'db';
    $db_name = getenv('WORDPRESS_TESTS_DB_NAME') ?? 'wordpress_tests';
    $root_password = getenv('MYSQL_ROOT_PASSWORD') ?? 'wordpress';

    if (empty($db_host) || empty($db_name) || empty($root_password)) {
        return;
    }

    // Connect without selecting database.
    $mysqli = new mysqli($db_host, 'root', $root_password);
    if ($mysqli->connect_error) {
        echo 'Error connecting to MySQL: ' . $mysqli->connect_error . PHP_EOL;
        exit(1);
    }

    $result = $mysqli->query("SHOW DATABASES LIKE '" . $mysqli->real_escape_string($db_name) . "'");
    if (! $result) {
        echo 'Error checking databases: ' . $mysqli->error . PHP_EOL;
        $mysqli->close();
        exit(1);
    }

    if ($result->num_rows === 0) {
        if (
            ! $mysqli->query(
                'CREATE DATABASE `' . $mysqli->real_escape_string(
                    $db_name
                ) . '` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci'
            )
        ) {
            echo 'Error creating database: ' . $mysqli->error . PHP_EOL;
            $mysqli->close();
            exit(1);
        }
        echo "Created database '{$db_name}'." . PHP_EOL;
    } else {
        echo "Database '{$db_name}' already exists." . PHP_EOL;
    }

    $mysqli->close();
}

// The WP test suite is capable of clearing the test database on each run. However, it is important to ensure that the test database exists
// before the tests are run. In most cases, the Docker init SQL script handles this, but this is added as a safeguard.
maybe_create_tests_db();

// Give access to tests_add_filter() function.
require_once "{$_tests_lib_dir}/includes/functions.php";

tests_add_filter('muplugins_loaded', function () {
    require dirname(__FILE__, 2) . '/vendor/autoload.php';
});

// Start up the WP testing environment.
require "{$_tests_lib_dir}/includes/bootstrap.php";
