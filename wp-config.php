<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u7124587_wordpress' );

/** Database username */
define( 'DB_USER', 'u7124587_mite' );

/** Database password */
define( 'DB_PASSWORD', 'MliHWgg@h20^' );

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
define( 'AUTH_KEY',         'Yz`jet1NOOBq@Z?FCs>T>@wSx/C$1nhcy/|i[Vo76Ll2/J|Mojxs+l_8;:(Omh(h' );
define( 'SECURE_AUTH_KEY',  '.7YW6bs1a}z!3+a F7jc<$*,fv,|R?GamI_sGM(Cwf8pygBp8g5k~k43!sDd=F8o' );
define( 'LOGGED_IN_KEY',    'uivBuIm){PaPQF:p[ 7{Go,(O10~Lw&@(XB p%D3FJUbnZKV!!!OhfWRu[xp]QGC' );
define( 'NONCE_KEY',        '1+&9X-g1]/w ic#7lN6AQ&0YA4bS619iIPT_#7;$;|YO+ebed,<s%PVO#=6RsK4l' );
define( 'AUTH_SALT',        '3*|lPr1Pb%?:{ CBcuZcBD[:vLD]O]7y-0-8e%yHp*idG)AJfPLB%lzN0x7*<DA/' );
define( 'SECURE_AUTH_SALT', 'gPVTuw6MKGEdtqZ,qHM0]iY0IuunP7|HyfY9^uK  EWNtJ!x4L<7bd^EkZ<SPLVq' );
define( 'LOGGED_IN_SALT',   '~drl9)9Tmp_t.#ddv!hW<HIgU]lU]Fl>y;qmS4mP$hT<OMMG*VPraNy4X!=MxE8X' );
define( 'NONCE_SALT',       'x~(&/F$_Krw%Pq-+vmVvtETki*$$Lc9hb*Djoig4RrXzuNt1jM&O^p* %x&FF<.x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_comepay';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
