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
define( 'DB_NAME', 'word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '?8 K}jHPPi&PJqY@iA~{;IW_8qL(w5M4V8,)*vbKqf#<0;(MnEJw6WMw9lH|obs8' );
define( 'SECURE_AUTH_KEY',  'VoP5}`O&X@6rE3F|Az.OhPWl4K@5$1*!MpKNYTZc!%;^P[-iE!vHwQ}oGk- `sA1' );
define( 'LOGGED_IN_KEY',    'rHx%K^dV=(tMi8lm8F;&=@o!pAoF)^u{7mkiN!}?JZ$DtFy|xS$!q@z`_Vi6gq@)' );
define( 'NONCE_KEY',        '?YV!RO):;a|g,s82K!mM[f}2jknesf$,<v3v)+ ^xnliQ-&mz&h2j}MGdw.[y]WT' );
define( 'AUTH_SALT',        'WbmPf0ptIge<Q.S_wdb(ZC!b;5C.a9_7aU%A)mt-`6~*pQm-!sW(M*q:cy]eBd=U' );
define( 'SECURE_AUTH_SALT', '-rHzHNcIZsKElxXC4vx+kmp>H+B~S.>t<3Ek+pXDr?s<NAICB&d ?m5(tmTD`X e' );
define( 'LOGGED_IN_SALT',   '9[L6]:VN>53XZ9b#G(AeJIV_(1~?{tn-%UtGVRkHX|a,v@=Kc( t116VJ Y0?,X6' );
define( 'NONCE_SALT',       '31[_.3RAMQVlPGHMKGtbTJ;/}PSr;Hy,:zg{GfsY^ */m4Q<SpNB%z-wS>L+2VS~' );

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
