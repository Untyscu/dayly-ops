<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

/** Get secret from docker secret */ 

function get_docker_secret($name) {
    $path = "/run/secrets/{$name}";
    return file_exists($path) ? trim(file_get_contents($path)) : null;
}

define('DB_NAME', get_docker_secret('db_name'));
define('DB_USER', get_docker_secret('db_user'));
define('DB_PASSWORD', get_docker_secret('db_password'));
define('DB_HOST', get_docker_secret('db_host')); // Назва сервісу з docker-compose.yml
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

define('AUTH_KEY', get_docker_secret('auth_key'));
define('SECURE_AUTH_KEY', get_docker_secret('auth_key'));
define('LOGGED_IN_KEY', get_docker_secret('auth_key'));
define('NONCE_KEY', get_docker_secret('nonce_key'));
define('AUTH_SALT', get_docker_secret('auth_key'));
define('SECURE_AUTH_SALT', get_docker_secret('auth_key'));
define('LOGGED_IN_SALT', get_docker_secret('auth_key'));
define('NONCE_SALT', get_docker_secret('nonce_key'));

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
