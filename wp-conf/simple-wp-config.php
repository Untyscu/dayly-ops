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

// function get_docker_secret($name) {
//     $path = "/run/secrets/{$name}";
//     return file_exists($path) ? trim(file_get_contents($path)) : null;
// }

define('DB_NAME', 'wordpress');
define('DB_USER', 'default');
define('DB_PASSWORD', 'default');
define('DB_HOST', 'wp_mysql'); // Назва сервісу з docker-compose.yml
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

define('AUTH_KEY',         '*o}5AOC=!UH4;U!%RL@:7R3<P;OE7MyNE51| A{{oD4[<*XGdEWtbx9m;7:Qo>qv');
define('SECURE_AUTH_KEY',  '+&!HCZ8;Ra]JA6Zxg6`iBX@dsi=Z3K-?kg+V#+01c3KW$;_zf_$mO6krc/NnoRaF');
define('LOGGED_IN_KEY',    '+s((q;1U%l6q-WFn.jY^d`nIn4q8NLixmvV4t?J2kPJ4 Y[px5AukOG&CYmN9,zF');
define('NONCE_KEY',        '`0WdEbFt!N0|z/ay`+nKVjRF?_<y5>q!!:i+@v~NhZ=]zIbi-[Q0R_lFcC]-(mey');
define('AUTH_SALT',        'a+w3?^su5KjC.COL|3ljb.D4 _p<xfr9-,7);ruz:]_So>SfWTrL&+%_[bjtu- O');
define('SECURE_AUTH_SALT', 'H8F,GQF;mspf~ uI9I$Pr#H0D2~ee*&%_&vi~?W81(-lsKdD?jH- y5&,UaP,ztQ');
define('LOGGED_IN_SALT',   's&sIc5/k[m_UU_P:Dsbu0c6g[ZU/#|bh?k?8wF`C-^0pGhF)cQbv <t+>$4/D$`c');
define('NONCE_SALT',       '|vZ8i@c+9e?KHD;+u|E1+$99]$Fdu7lSiQLl/AR`Mz(h^(k@eCOF:}<i.(m4/c09');

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
