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
define( 'DB_NAME', 'myplugin' );

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
define( 'AUTH_KEY',         'JIaPeFt91VEDgimmErgkYYBwvTk6tjDrSGQ3SYxZlC8UlaWtDUmItRF58Y4v0sfq' );
define( 'SECURE_AUTH_KEY',  '04w1aNpBpskrW0SrVK0Yyi6313s0SrF5tx1gGfeqsGyC6AnRP9x6vbE1aqV43ZDG' );
define( 'LOGGED_IN_KEY',    'r5xTwjZeBnqSw8r2pqQ9z8d9QDtTsK2OormqTL0nylU3bWiMhX9zT4TxeaksbDts' );
define( 'NONCE_KEY',        'KVSQguo5QWVTRjgekv5FIPW6Rmgcvg4gKPV7udfsElM3G57OEDnwbhOqxkmE21IQ' );
define( 'AUTH_SALT',        'aff1dBkxftBHxaLjBOYij0rBnvogUo6TkF6jhtWTLqeJquwcQRyTdBNmAMecUx78' );
define( 'SECURE_AUTH_SALT', 'BpXfyn8dIFF7Xev2lwqj4lvZ3NiTLINfk1s4tGOrSRb2BFPIYVoK0htFRFJytNS1' );
define( 'LOGGED_IN_SALT',   '2Kkpuu4G8clUD626CPjWEF1vyWqXaQPSUQChgXvSZWCIl6g7a0z9bAsBU8B8nkgh' );
define( 'NONCE_SALT',       'wzIMDywMGHcwBAe3fmSHGBgAzuTKVzRHJ0p4f4LF76C9mNjRbVHVW1vCGSl3j2Or' );

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
