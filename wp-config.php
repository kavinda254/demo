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
define( 'DB_NAME', 'Demo' );

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
define( 'AUTH_KEY',         '<TKAA._l&,dak?xG 5?sC`zhxj)IBJW?#kBx)=EA;a3|.<+rL2DWTGu3oOC)A0~ ' );
define( 'SECURE_AUTH_KEY',  '^lx?JH]rN#x$Cn2MR70;r4$${*N1lwaek>v9J#/rzbWuaLX^%0kJvc#`7V_aEf&T' );
define( 'LOGGED_IN_KEY',    '^NKG*A[Os}/(izdz)hZ8B{ODDv$[6q6w!`0iu]c{(6B[,d3Rcnjye7QWGTqMdw;e' );
define( 'NONCE_KEY',        'c3=vO j1HacKDaO+F``)p0I?2=kb~haKYxwKSOD!VK=mWFa1|]!aXDQ,@$TUq]GO' );
define( 'AUTH_SALT',        'p)Kp#dNN t`&r3m8UuP19V;!`zre./h{4[bT~t;O[X&Gf?yANF$#{yJGg-=9rEb6' );
define( 'SECURE_AUTH_SALT', '4(V.iM;6qLu590lYuOI]= %W0AxA=/+MR&GN7eAC.kk2#WqliHce:DP2cNL0^[d[' );
define( 'LOGGED_IN_SALT',   '2RSdoC1b!m!%5xn*Tyzffll_RFxj%I4b7qyDK a sOe65XFA-[<!ux(2D_9r%f=B' );
define( 'NONCE_SALT',       '^Br5-0DiUg(F%mA5NB+K&A?)YeZLuwr6<&K*Q7$/p~Hht1T?`jHSzI)kFMJ 6s]e' );

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
$table_prefix = 'Demo';

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
