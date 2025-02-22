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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BH_Service' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'n<M=o+*&7lv_)2nohQbrvc+M+~RVWO#|rTY8VwcR!fEDXtz@<7h;t hZ$kki>cG*' );
define( 'SECURE_AUTH_KEY',  'rBDjZ8h`W.Iq0p`@N;L5 N_R8w#KD3hV!hE9A^W1=yTNT%sP0!>]`$@#6G9D>&ca' );
define( 'LOGGED_IN_KEY',    'b^h)y1sL&|)<j(aKkF-;CZQ^;26|VTRTIQ|D02j:`|K#,hcRuF]C<ziYk/nlDNj8' );
define( 'NONCE_KEY',        '3}/9>v(&l|>UzQ`7,5n;lR+O@_{Okn=N!>p`z~04 WPPclGTPF_4a21*sqy^jkW_' );
define( 'AUTH_SALT',        '+|d!S5KQR&#p,KnjBbd-jR!O#!0lej(Q)i[@u*8?:-zFM0$O(oVU84jA[ea?79<l' );
define( 'SECURE_AUTH_SALT', 'gJ47+~5W#R:{p/R@|~kr{h}5m)odo T?*a0aIqa)*G4@E#*tI?{6V<_wuMp-xs$]' );
define( 'LOGGED_IN_SALT',   '5PeWHB(`]FHK$mpB /ehQ.,_7fbf>c3/k2EW34oh.S0Jg;/V8AY?qB;&/8 ,91qG' );
define( 'NONCE_SALT',       '#1NEwcBOX<rgKA){E#@IauA-+]Q>g%8]#|TtONPrGn&P&B#caru}l~on+k;Mu&[F' );

/**#@-*/

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
