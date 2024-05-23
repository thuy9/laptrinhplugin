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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'University' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uNCljL8aw4PAJaFrEenCO09QsvqGlQyZYVSdkslw2gbrANQokLiHWPqzz40gsmBv' );
define( 'SECURE_AUTH_KEY',  'NEXi4Ww1LCkB6mtEzkC9YQRNsfd1nmArjjrTWUrB8g4q6VEqIrxEe4lsSdashJQT' );
define( 'LOGGED_IN_KEY',    'n93OZiGwrqXoBj0Q7FhDixhAN5fX4uXHXACHIS6Df97ZVaspAUYpOcLa9Q0YBSaj' );
define( 'NONCE_KEY',        'GYoLKt6mGZsqXvX43Kw0re1xON2h61Z0jYbmjkcIl9YZqhfrYAcm8qG4s1a0rfoH' );
define( 'AUTH_SALT',        '3E5NTilpZdl35U1Spej4KOklZFAaAIHl5RWykIvUsvnylaVBh76Mj1ii1AO9Xk1I' );
define( 'SECURE_AUTH_SALT', 'HDaw2A2zO1aCTvnXiNDEv8wIPUYRCt5LXAJUhvJiArYPqImXY8sXDeN51vE1kEu1' );
define( 'LOGGED_IN_SALT',   '8XxGXHY3dxQqymT3z7wi7r1el47V1A7pxqT95MqJGwqxb8NlalElFyM14YwzebSh' );
define( 'NONCE_SALT',       'IhXhiHYLW1SOQwORyQK0z13TQ2Ur9V9nBbiseGgTOJZFq9tsZFIza3U6z28Se4zk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
