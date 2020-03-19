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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-A;<|7x}Vm$AzQMk5}kAO2Mm5XcNx1_N6*|;G8 ~<oz;$#gDR{}Q]MZ7]hETZSkE' );
define( 'SECURE_AUTH_KEY',  'ADl_6waKS*sd$oC?gJ26ttN5S;x0CdiC#!z.[YYI!~**RGo4aMr*r<9=9~URu<//' );
define( 'LOGGED_IN_KEY',    'mtkhM^1(aWXF_JW#+Ki}8FvZ#xr_:.&X-R8Jt/`@>sBxml!R59P!gWYnMG-t`!}5' );
define( 'NONCE_KEY',        '4@{{X.vghZmr3v}${1``WWNZ]=)b1GTto9Ph8i[1Ob]]w~bC?~g+}tJzeKR6 4|i' );
define( 'AUTH_SALT',        'u?9/u1o}tF`{m/zt6y5d0-886v8:icvgBeD #&q%H)IOTwKWwZ4X#V{#!|F^FegK' );
define( 'SECURE_AUTH_SALT', 'dDio7YLEd|Uo-e[/b[+AH`f-KEDc+s4rGRlm/+/~V00octwdj{]g-*k-rHinLbpV' );
define( 'LOGGED_IN_SALT',   '_LP?_{{%^<mBdKfhm@U`1DG~9KUaFmJht;VZ9n|Hq.1tg[7a-|h^)tG9`g,N;E)|' );
define( 'NONCE_SALT',       'c4N(CvW@c>/&)&VJ7v+WCphrRUpU&IJT8U6hSZsoKm?o)>@uPp>{m%EW6mKpQ-H|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD','direct');
