# WP Table Manager

**WP Table Manager** is a powerful, fluent, and modern PHP library for managing custom database tables within the WordPress environment. Inspired by the schema builder from frameworks like Laravel, it provides a robust, object-oriented API to handle table creation, schema migrations, and data manipulation, abstracting away the complexities of raw SQL and the limitations of `dbDelta`.

It offers a structured, version-controlled approach to database management, making your WordPress plugin or theme's data layer maintainable, readable, and safe.

---

## Features

-   **Fluent Schema Builder**: Effortlessly define table schemas with an intuitive, chainable API.
-   **Structured Migrations**: Manage database changes through versioned migration methods, ensuring predictable and resumable updates.
-   **Comprehensive Column Types**: Supports all standard MySQL/MariaDB column types, from `string` and `integer` to `JSON`, `geometry`, and `timestamps`.
-   **Full Index & Key Support**: Easily add any type of index (`PRIMARY`, `UNIQUE`, `INDEX`, `FULLTEXT`, `SPATIAL`) and foreign key constraints.
-   **WordPress Aware**: Automatically handles WordPress table prefixes (`wp_`, `wp_2_`) and multisite table sharing (`$wpdb->base_prefix`).
-   **Safe & Performant**: Includes methods for safely altering tables (adding/dropping/renaming columns and indexes) with built-in existence checks and intelligent caching to minimize queries.
-   **Modern & Robust**: Built with modern PHP (8.0+), strictly typed, and includes a PSR-3 compatible logging interface for easy debugging.
-   **No More `dbDelta`**: A reliable and explicit alternative to the often-unpredictable `dbDelta` function.

## Requirements

-   **PHP**: 8.0+
-   **WordPress**: 5.0+
-   **Database**: MySQL 5.7+ or MariaDB 10.2+

## Installation

The recommended way to install this library is through [Composer](https://getcomposer.org/).

```bash
composer require wptechnix/wp-table-manager
```

## Core Concepts

### 1. The `Table` Class

For each custom database table you need, you create a class that extends `\WPTechnix\WPTableManager\Table`. This class defines your table's properties, schema, and migration history.

**Key Properties to Define:**

-   `$tableName`: The table name *without* prefixes (e.g., `product_reviews`).
-   `$schemaVersion`: The target version of your schema. You increment this number each time you need to make a change.
-   `$primaryKeyColumn`: The name of the primary key (e.g., `id`).
-   `$foreignKeyName`: The conventional name for this table's foreign key when used in other tables (e.g., `product_review_id`).

### 2. Versioning and Migrations

WP Table Manager uses a versioning system to manage database changes.

-   The initial schema is defined in a migration method, typically `migrateTo10001()`.
-   When you need to change the table (e.g., add a new column), you:
    1.  Increment the `$schemaVersion` property in your `Table` class.
    2.  Add a new method corresponding to the new version (e.g., `migrateTo10002()`).
    3.  In this new method, you use the provided helper functions like `addColumn()`, `addIndex()`, etc., to define the changes.

When you call the `install()` method, the library compares the currently installed version with your class's `$schemaVersion` and automatically runs any pending migration methods in order.

## Quick Start: Creating a Table

Here is a complete example of defining and creating a new table for storing product reviews.

**1. Define your Table Class**

Create a file `src/Database/Tables/ProductReviewsTable.php`:

```php
<?php

namespace MyPlugin\Database\Tables;

use WPTechnix\WPTableManager\Table;
use WPTechnix\WPTableManager\Schema\CreateTableSchema;

class ProductReviewsTable extends Table
{
    /** {@inheritdoc} */
    protected string $tableName = 'product_reviews';

    /** {@inheritdoc} */
    protected string $tableAlias = 'pr';
    
    /** {@inheritdoc} */
    protected int $schemaVersion = 10001;
    
    /** {@inheritdoc} */
    protected string $primaryKeyColumn = 'id';

    /** {@inheritdoc} */
    protected string $foreignKeyName = 'product_review_id';

    /**
     * The initial schema for the 'product_reviews' table.
     * This method is executed when the table is first created.
     */
    protected function migrateTo10001(): bool
    {
        return $this->createTable(function (CreateTableSchema $schema) {
            // ID is created automatically by the helper
            
            // Foreign key for the product (post) being reviewed
            $schema->bigInteger('product_id')->unsigned()->index();
            
            // Foreign key for the user who wrote the review
            $schema->bigInteger('user_id')->unsigned()->nullable()->index();

            $schema->tinyInteger('rating')->unsigned()->comment('Rating from 1 to 5.');
            $schema->text('review_text')->nullable()->comment('The written review content.');
            
            $schema->string('author_ip', 100)->nullable();

            $schema->timestamps(); // Adds `created_at` and `updated_at` columns

            // Add foreign key constraints
            $schema->foreign('product_id')
                   ->references('ID')
                   ->on($this->wpdb->posts) // Reference the WordPress posts table
                   ->cascadeOnDelete();

            $schema->foreign('user_id')
                   ->references('ID')
                   ->on($this->wpdb->users) // Reference the WordPress users table
                   ->nullOnDelete(); // Set user_id to NULL if user is deleted
        });
    }
}
```

**2. Instantiate and Install**

In your plugin's activation hook or an admin upgrade routine, instantiate your table class and call `install()`.

```php
<?php

use MyPlugin\Database\Tables\ProductReviewsTable;
use Psr\Log\NullLogger; // Or your preferred PSR-3 logger

function my_plugin_activation_or_upgrade_routine() {
    global $wpdb;

    // Instantiate your table, passing the global $wpdb and your plugin's prefix
    $reviewsTable = new ProductReviewsTable($wpdb, 'my_plugin');
    
    // (Optional) Set a PSR logger to capture migration events.
    $reviewsTable->setLogger(new NullLogger());

    // This will check the version and run the `migrateTo10001` method if needed
    $reviewsTable->install();
}

register_activation_hook(__FILE__, 'my_plugin_activation_or_upgrade_routine');
```

This will execute the following SQL:

```sql
CREATE TABLE IF NOT EXISTS `wp_my_plugin_product_reviews` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` BIGINT UNSIGNED NOT NULL,
  `user_id` BIGINT UNSIGNED NULL,
  `rating` TINYINT UNSIGNED NOT NULL COMMENT 'Rating from 1 to 5.',
  `review_text` TEXT NULL COMMENT 'The written review content.',
  `author_ip` VARCHAR(100) NULL,
  `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idx_my_plugin_product_reviews_product_id` (`product_id`),
  KEY `idx_my_plugin_product_reviews_user_id` (`user_id`),
  CONSTRAINT `fk_my_plugin_product_reviews_product_id` FOREIGN KEY (`product_id`) REFERENCES `wp_posts` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `fk_my_plugin_product_reviews_user_id` FOREIGN KEY (`user_id`) REFERENCES `wp_users` (`ID`) ON DELETE SET NULL
)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

## Schema Builder in Detail

### Available Column Types

The `CreateTableSchema` provides methods for every common data type.

| Method                                | SQL Equivalent                            |
| ------------------------------------- | ----------------------------------------- |
| `$schema->id('post_id');`             | `post_id BIGINT UNSIGNED AUTO_INCREMENT`  |
| `$schema->string('name', 100);`       | `VARCHAR(100)`                            |
| `$schema->text('description');`       | `TEXT`                                    |
| `$schema->longText('content');`       | `LONGTEXT`                                |
| `$schema->integer('count');`          | `INT`                                     |
| `$schema->bigInteger('votes');`       | `BIGINT`                                  |
| `$schema->boolean('is_active');`      | `BOOLEAN`                                 |
| `$schema->decimal('price', 8, 2);`    | `DECIMAL(8, 2)`                           |
| `$schema->float('latitude');`         | `FLOAT`                                   |
| `$schema->date('published_on');`      | `DATE`                                    |
| `$schema->datetime('event_at');`      | `DATETIME`                                |
| `$schema->timestamp('deleted_at');`   | `TIMESTAMP`                               |
| `$schema->json('metadata');`          | `JSON`                                    |
| `$schema->enum('status', ['a', 'b']);`| `ENUM('a', 'b')`                          |
| `$schema->timestamps();`              | Adds `created_at` and `updated_at`        |
| `$schema->softDeletes();`             | Adds nullable `deleted_at` timestamp      |
| `$schema->morphs('taggable');`        | Adds `taggable_id` and `taggable_type`    |

### Column Modifiers

Chain modifiers onto column definitions to add constraints and attributes.

```php
// VARCHAR(100), allows NULL values, defaults to 'pending', has a comment.
$schema->string('status', 100)->nullable()->default('pending')->comment('The status of the item.');

// BIGINT, must be a positive number, and has a unique index.
$schema->bigInteger('user_id')->unsigned()->unique();

// DATETIME that defaults to the current time when the row is created.
$schema->datetime('created_at')->default('CURRENT_TIMESTAMP', true);
```

### Indexes

Define indexes directly in the schema or as separate commands.

```php
$schema->createTable(function (CreateTableSchema $schema) {
    // Define a unique index on a single column
    $schema->string('email')->unique();
    
    // Define a standard index on a column
    $schema->integer('post_id')->index();

    // Define a composite (multi-column) index
    $schema->index(['type', 'subtype'], 'idx_type_subtype');

    // Define a primary key
    $schema->primary(['col1', 'col2']);
});
```

### Foreign Keys

Define foreign key constraints with a fluent and readable API.

```php
$schema->createTable(function (CreateTableSchema $schema) {
    $schema->bigInteger('user_id')->unsigned();

    $schema->foreign('user_id')
           ->references('id')
           ->on('wp_users')
           ->cascadeOnDelete(); // or ->onDelete('CASCADE')
});
```

## Modifying Existing Tables (Migrations)

Let's add a "verified purchase" flag to our `product_reviews` table.

**1. Update the Table Class**

First, increment the schema version and add a new migration method.

```php
<?php
// In MyPlugin\Database\Tables\ProductReviewsTable

class ProductReviewsTable extends Table
{
    // ... (previous properties)
    protected int $schemaVersion = 10002; // <-- Incremented version
    
    // ... (migrateTo10001 method)

    /**
     * Migration to add a 'is_verified' column for verified purchases.
     */
    protected function migrateTo10002(): bool
    {
        // Add a new boolean column to flag verified purchases
        $this->addColumn(
            'is_verified', // Column name
            'BOOLEAN NOT NULL DEFAULT 0', // SQL definition
            'author_ip' // Position it after the 'author_ip' column
        );

        return true; // Return true on success
    }
}
```

**2. Run the Installer Again**

The next time you run `my_plugin_activation_or_upgrade_routine()`, the `install()` method will detect that the installed version (10001) is less than the target version (10002) and will automatically execute the `migrateTo10002()` method.

### Available Migration Helpers

The `Table` class provides a rich set of helpers to safely modify tables:

| Method                                      | Description                                              |
| ------------------------------------------- | -------------------------------------------------------- |
| `addColumn(name, definition, ?after)`       | Adds a new column.                                       |
| `dropColumn(name)`                          | Drops an existing column.                                |
| `renameColumn(old, new)`                    | Renames a column (uses modern `RENAME` if available).    |
| `modifyColumn(name, newDefinition)`         | Changes a column's type or attributes.                   |
| `addIndex(columns, ?type, ?name)`           | Adds an index (`INDEX`, `UNIQUE`, `FULLTEXT`, `SPATIAL`).  |
| `dropIndex(name)`                           | Drops any named index.                                   |
| `addPrimaryKey(columns)`                    | Adds a primary key.                                      |
| `dropPrimaryKey()`                          | Drops the primary key.                                   |
| `addForeignKey(column, refTable, refColumn)`| Adds a foreign key constraint.                           |
| `dropForeignKey(constraintName)`            | Drops a foreign key constraint.                          |

---

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
