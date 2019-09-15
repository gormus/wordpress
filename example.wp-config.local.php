<?php
/**
 * The local configuration for WordPress
 *
 * This file overrides the configuration defined in "wp-config.php"
 * for the local development environment.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Debugging variables
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

/**
 * MySQL settings.
 */
define( 'DB_NAME', 'db' );
define( 'DB_USER', 'db' );
define( 'DB_PASSWORD', 'db' );
define( 'DB_HOST', 'db' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 */
define( 'AUTH_KEY', 'put your unique phrase here' );
define( 'SECURE_AUTH_KEY', 'put your unique phrase here' );
define( 'LOGGED_IN_KEY', 'put your unique phrase here' );
define( 'NONCE_KEY', 'put your unique phrase here' );
define( 'AUTH_SALT', 'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT', 'put your unique phrase here' );
define( 'NONCE_SALT', 'put your unique phrase here' );

/**
 * Debugging mode. (Developers only)
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/**
 * Change uploads folder for local environment.
 */
define( 'UPLOADS', 'local_uploads' );
