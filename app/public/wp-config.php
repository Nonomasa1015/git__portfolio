<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LLTneDQ4GsHBEA+0qTXGBrzlxGqUilRt+JpNSw2ATJDiQa8vM+0Z9Q+OC+PSPTQgOwfxlymtOQbWlKwiLekGjw==');
define('SECURE_AUTH_KEY',  'O6VNOViChohYDSDlc2kTF1EVw4LMw6M3wdwGO9TayOg48Ch9DmDCQn7VL3OBofTeLfnScoOdDXyXrJQ5USn4EA==');
define('LOGGED_IN_KEY',    'ep/gGtOswGWPSQhnFIrPWKZELI2wxI5/R7gYm3SZH+X0bmEThWlYnShbvbz1fe17947gIfXYOiLjqaiPmTYrGw==');
define('NONCE_KEY',        'RBh7tiukMqP5kADP8i/yWs23vbsLsg6eKbRCROatNtJAefq56J4wRYX0AgPQ5aP9rNZ4FIQHF/WxR6ZPqZqnVA==');
define('AUTH_SALT',        'pE3WZ2YjKa77zO0PTef7YbFVEE68+581DX4zFlmsuYAo1NSptuRHaJmPygSgFWmT319K8xrlHIPcNivxn58w8g==');
define('SECURE_AUTH_SALT', 'z6CjZt3VhpEV9FF0gbT8rYRak9EM0MVVdiYap29414tdCWgMq0v71XHCR1/g3Ikc1/P2NpFO+kjYuMEFtGlIIQ==');
define('LOGGED_IN_SALT',   '/qZFM7siYNKHOrJoipzhjrhToid+PhnkCKtBj2xiwDx/wIRCu1Z7Tv8Q083JAMUGYS9guGmWU8mo5GH5iMuGmQ==');
define('NONCE_SALT',       '0i2Eobwg+W5Y2v6QGSXcjOKCx1rK6pMyhaSHkGLakQEVDm+qThnL0nItaXufJY+eaS0kTPyQRyMf6BOLr4YLXw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

	define ('WPCF7_AUTOP', false);
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
