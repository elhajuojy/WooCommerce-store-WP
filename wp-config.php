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
define( 'DB_NAME', 'wp-E-commerce' );

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
define( 'AUTH_KEY',         'Otd5l9w|+55v+YC,Us+.ygMYjB)y4.he7.(2wH{wI>1 4y)Ha_L?B-f$bw]{`llw' );
define( 'SECURE_AUTH_KEY',  ';`>E&TJ-Y3)*LZc4|z[$ep+(Owq6X9>kwv{RSWXX[)LfGX+) +9wa9ZD) s[!yUr' );
define( 'LOGGED_IN_KEY',    '(Y&$8kY*$zdaI4&zh:DXdYY%t4WTqp2E!dZXJ^|9:]KF|U%Vy]I8:BqtL;*|QZD:' );
define( 'NONCE_KEY',        's$.)S~F~KV9D3c,VpDlagx mY1^t.J>4;e_Bmbxeq0T:4qPTs!}9/:E;_YX>qUcH' );
define( 'AUTH_SALT',        'as&0?i$3_.(U@n/=#q^Rjs*})Azd^pPb:ck&t>M,#1b*9&+yBDr<Lwb;tcz|GDdK' );
define( 'SECURE_AUTH_SALT', 'zb?GV|w=veMreu}VzFUGwYMzrt@^?MwDahI.3`MmCTzuo(2Baa@i>qg+Orr]iN)O' );
define( 'LOGGED_IN_SALT',   '*YM!Q+SFX]UGL3<Nq~zYif$h|5Fn(_Wz~DZr<m$}I{Y@R-3xsqGcdIH6qsi I5{U' );
define( 'NONCE_SALT',       ' S*;x[jxMA?cvi~yZK_qa.uhg)%uyp-7UYYEf(TR=S.G(DS|n5yH|n(C!b]9f; W' );

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
