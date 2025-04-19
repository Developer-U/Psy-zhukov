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
define( 'DB_NAME', 'u0618804_psy' );

/** Database username */
define( 'DB_USER', 'u0618_psy' );

/** Database password */
define( 'DB_PASSWORD', '6O53$ldw2' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         ']NA$x&}UKVL8[#_I&{W@^{8TO&+~P`SA5_uSVkpRR0V*(rt6NPenlw``o}gVKnP>' );
define( 'SECURE_AUTH_KEY',  'J[puZkbT64TvP3l$Ea;ERAd]-^.~+BXSVdRY@=HlWh5*X)x>v2ykaY=_2jlk?G.c' );
define( 'LOGGED_IN_KEY',    'RCFpxcG!i7tJtI$n]<7rdx*^Lw]oo:`!v}YTl-)&|LD(<O!?yaIv6wAd2>{tyhF1' );
define( 'NONCE_KEY',        '=/mEs:&qe.?[o8`z!%m]Hn18&&K,i4>4`uZ$n9{`q-Ec:4Xl(F!};3s6ewH6~@yk' );
define( 'AUTH_SALT',        '=W[intGL]npO:u9XONe>L@_;JT(6$G:fwBlW@348%]b/jgU5P3*p!v6SmBzNUw7C' );
define( 'SECURE_AUTH_SALT', 'SeND<5e(q8bw@l<U=#enKKBoiDpqB-^z9-SHH-]eJFA[S^_YN8_0(G+g_ RPU_dt' );
define( 'LOGGED_IN_SALT',   'x}d~*.ga{B#A6?@~J4]U]6l9P0Glep^HOSt8CMLg8BQfXMt33$CB?DdZ46qwKRWg' );
define( 'NONCE_SALT',       'a)NOQ?Bskw$?)G[8FLZn>ZA1t:OD[-=i~|Rqt&KnM[-X2eytD##1dc(X9,[K*lJN' );

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
