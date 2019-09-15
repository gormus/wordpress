<?php

/**
 * Absolute path to the WordPress directory.
 */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/**
 * Absolute path to the project directory.
 */
if (!defined('PROJECT_ROOT')) {
    define('PROJECT_ROOT', dirname(__FILE__, 2) . '/');
}

/**
 * WordPress Database Table prefix.
 */
$table_prefix = 'wp_';

/**
 * Environment specific configuration.
 */
if (getenv('ENV') === 'PRODUCTION') {
    // MySQL settings.
    define('DB_NAME', 'database_name_here');
    define('DB_USER', 'username_here');
    define('DB_PASSWORD', 'password_here');
    define('DB_HOST', 'localhost');
    define('DB_CHARSET', 'utf8');
    define('DB_COLLATE', '');

    // Authentication Unique Keys and Salts.
    define('AUTH_KEY',         'put your unique phrase here');
    define('SECURE_AUTH_KEY',  'put your unique phrase here');
    define('LOGGED_IN_KEY',    'put your unique phrase here');
    define('NONCE_KEY',        'put your unique phrase here');
    define('AUTH_SALT',        'put your unique phrase here');
    define('SECURE_AUTH_SALT', 'put your unique phrase here');
    define('LOGGED_IN_SALT',   'put your unique phrase here');
    define('NONCE_SALT',       'put your unique phrase here');

    // Debugging should be disabled on production.
    define('WP_DEBUG', false);

} elseif (file_exists(PROJECT_ROOT . 'wp-config.local.php')) {
    include_once PROJECT_ROOT . 'wp-config.local.php';
}

/**
 * Sets up WordPress vars and included files. (Keep at the end of file)
 */
require_once ABSPATH . 'wp-settings.php';
