<?php
/**
 * WordPress database credentials.
 */
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') );
define( 'DB_USER', getenv('WORDPRESS_DB_USER') );
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') );
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**
 * WordPress database table prefix.
 */
$table_prefix = 'wp_';

/**
 * Debug mode for developers.
 */
define( 'WP_DEBUG', false );

/**
 * Filesystem method.
 */
define( 'FS_METHOD', 'direct' );

/**
 * WordPress content directory.
 */
define( 'WP_CONTENT_DIR', '/var/www/html/wp-content' );
define( 'WP_CONTENT_URL', 'http://example.com/wp-content' );

/**
 * Set the home and site URL.
 */
define( 'WP_HOME', 'http://example.com' );
define( 'WP_SITEURL', 'http://example.com' );

/**
 * Disable automatic updates.
 */
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', false );

/**
 * Absolute path to the WordPress directory.
 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/**
 * Load WordPress.
 */
require_once ABSPATH . 'wp-settings.php';
