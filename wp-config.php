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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wish_pro' );

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
define( 'AUTH_KEY',         't|.rO.%33QIt@|&k*azons=Tr4GUPCDZjq`F}Etk?|f4SZ9 lddz!hQeA^;d;0x,' );
define( 'SECURE_AUTH_KEY',  '}y62Qa*xgRw3apF-n<n //_i[j_GECP7VeUcjFKPH%gv[:K]`2`wS8`zyB&)`%{P' );
define( 'LOGGED_IN_KEY',    '%&W1IBC.s^dINmZG]>YsKAFn9I4 g3aGr{@BguS7(Ox5BB8rp1*z]bt}k[T?/u]m' );
define( 'NONCE_KEY',        'KB<CNhnVcOq&z/5!EwwS!9*>lQWtR&squ|Wt:U6/k?m*78$+8CLZ^I_YKX1&5={P' );
define( 'AUTH_SALT',        '$)vjl2SEbPt}j2<3v`J~~udNm<zS?/g?2|&(B:HO&g({C4TEd}y=E%0*@:L>RQ62' );
define( 'SECURE_AUTH_SALT', 'ff<,lHg29o*aI+^f8)p#YgV7@p?sv&!)d7]U/1Ddf%4oYx#Bd<5]kj5-b:gI/&0l' );
define( 'LOGGED_IN_SALT',   '`+C~,qxxC:Ny~!ZpMOW{>An3^q4sY%OR@wMQcLDA|0jl]4^|L>[64oZ+Wl<_j,+=' );
define( 'NONCE_SALT',       '$2z~w,;tMPgr@ZJ&[p,hEt=zntp}]i7a.5yPt_:kq~ ]fuTN6.jsS7H.eyU8Oxrr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wr_';

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
