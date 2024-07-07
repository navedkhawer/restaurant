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
define( 'DB_NAME', 'restaurant' );

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
define( 'AUTH_KEY',         'yL%0&G*>Q)Ce%(kbbrd5 3$,92R8wyGR6E;F:+|y{Mpo b?V%9o?lS{;5dDda]pR' );
define( 'SECURE_AUTH_KEY',  'A/z49zz[xM~:+4t9iD^%|Dr y;-rffbwPIq<D2VPu=BenT[0BJA_h8|g9g6b,0C#' );
define( 'LOGGED_IN_KEY',    '!_>~=amJjXlRSqV5H|bt]H^gq+xyf@?>kOYDKo<*wLy#=-@_m ^%QJ?}H`iuZwOJ' );
define( 'NONCE_KEY',        'zg(Vk2{1<b%Oo1o. -uGUds-i@ t(zYu:d5bN:HvwSo>7#.,DSE7Be&,(lS;Bn+<' );
define( 'AUTH_SALT',        'V.a:aY7-)o,wiH-!~f]hQl< `O/>RM{qnfym*:QB}b4Rb5>ZL/}unh0DHZuGs|@P' );
define( 'SECURE_AUTH_SALT', 'q_Fv^&0ORqY;?xf9Q_=^Ahq>{Mm }</gWAPHIoSR?%kuC}Qk/0BQPx@EKGwX6FNf' );
define( 'LOGGED_IN_SALT',   '30Xmti6M=0Y%gPzdPkx%g(>){j[h(|pa;3 3Y Wd+k&wFO4YX:aiFwaTz&Cg;~Gy' );
define( 'NONCE_SALT',       'j2@Ug6XKQx4eZ/TDk8-E+@Ap9qo3>;+sKqMjy*k>1u|iyvZzSxn9T}*%{%tb`Dky' );

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
