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
define( 'DB_NAME', 'wpgit' );

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
define( 'AUTH_KEY',         'F4BPl-ba?I{)mQSeQ,o{;{Ub}]hct>6v!nA[,wTgPWaA>Qc7>7x1OJ*&Ips7u/bD' );
define( 'SECURE_AUTH_KEY',  '<pxnSDFl>Zs[(l<A~4)b#WG4u)0^cUBh9R!Pd4X<-)v7?}rI~=6gj ,#+a4o6rV|' );
define( 'LOGGED_IN_KEY',    ' qq<T 2U%s:*M{~*%y^e:O@lY/Bbmx~#2+`L~TeYpAaR$t?d3V7.xZ6w<L K+e*$' );
define( 'NONCE_KEY',        'IIc_XSfd-4vLCH=Dv }d/0_ jH.0Ar[!],%Hj=b^S_SNF5.Yp4@ 8oG0f zXZyJJ' );
define( 'AUTH_SALT',        '=e~9U[D[}DLv(B@VRke&Lq[z0UsjsIm|b?NQUQ6k:Z,zG;1Dz6rx1AtR<&Mj2Y0z' );
define( 'SECURE_AUTH_SALT', '5GH^kRc?6CKA#.fC @.Y7;tF9o>4JUr(v,[Wvo`mu.MRyf;`n7Alt)a},7e9u;W ' );
define( 'LOGGED_IN_SALT',   'r/*{Y,JyD^R5e]@mFU_mB5J$ih%V IrP[k2qy~U}r&?2lcVSeg^5iDU)HSMxoB>&' );
define( 'NONCE_SALT',       'O.WR_P-Z+bP*PLe0Z>?vXrJ03lZ30d*]CD&[/?{fl~XG;,[V.{;$3z:CpPQ;8l@8' );

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
