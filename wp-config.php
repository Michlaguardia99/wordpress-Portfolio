<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'My-portfolio' );

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
define( 'AUTH_KEY',         'UdXawHxRrIBhFSiscVYFSYmTAjyib2mZIop3ig3ERkHKKUoeItGaTaXfE54gI2zP' );
define( 'SECURE_AUTH_KEY',  'pXEJ4D4qvAUC7bDDt9uccRd69z003Zw6cSAR0H1EmhwZ1eL3OjWvDevBsAiQNFzS' );
define( 'LOGGED_IN_KEY',    'Sk6YqdL3OMgh9ghcSULxHTD2akZUVhEg4l2EW0AFMs0ovjdTX7MahkkfaO7kesNc' );
define( 'NONCE_KEY',        'cn0Vdd6OTm3y6tZhu4OoBrIxxxGlZJ7xgSEnaPocccHvmkaglv2VhXntSkqFVmu1' );
define( 'AUTH_SALT',        'vAROBzznVhpfgssJDNjSm8ccJBCcB1T64V6BZA2BCAI4MAfwN4CdmfLmmo8dWxNc' );
define( 'SECURE_AUTH_SALT', 'ONAHZU4WXcNVrrWbNxOn8NGRVGx4dgHDQXvOOkD12YKAcQjLgBeusw9ePtOKWJ6n' );
define( 'LOGGED_IN_SALT',   'bFZJayeV6rXOaSSTQ7qBadlft235KVPDsYl5qXEFr5OhsD9gAQ8JmwSPNpLSklaO' );
define( 'NONCE_SALT',       'D3pYy0VyoDitbXwsgSHWEgLbvMRODcXOjrMRepeFSerGYIB7JDYo1CHtuDynL0p9' );

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
ini_set('display_errors', 0);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
