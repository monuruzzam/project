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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         '<U%&3&KVI4/}U|Tboc$pEBNVYAFmuZ;PA2UjDVgASUw$V^L{ ]E44|-,5o1lf{?D' );
define( 'SECURE_AUTH_KEY',  '4zM?o%)fycou>am6K*+_4XK(tj7|OExfQzcuW}ZFp~Zf6PP7aV>n_^ (}{if/u4z' );
define( 'LOGGED_IN_KEY',    '7~PbG4jGg9U4+$:BJx_=:x(ItDtv} 9{<G ?Vu|yzmoy.TR#txZg2.beAU:eAMtf' );
define( 'NONCE_KEY',        't0VCTBAd1we-1B L`oTQu:6$B{n.F7&ykurYDt-D;6Quep,~lGKu3yjK,>I-2pq(' );
define( 'AUTH_SALT',        '^rV|}-}iWUB5PN7!=x!-QXdB5%tzUCz_Uk|a R(4tr/91!JJ`du8Em4dn9b?a+Qj' );
define( 'SECURE_AUTH_SALT', '7L4TX_zy_Rk3+*ssB(==KCDAMKA7QEK`D_<e}|+3oPMr+}%Vy!;t?{%A`6iCT/gR' );
define( 'LOGGED_IN_SALT',   'APmh{}`6Vk6)sl{JDzf;WL-JZS[%:DEP,= VW0KsbPlh@7ilD3{h&t@%R%pvh*.a' );
define( 'NONCE_SALT',       'Vk.gsL6JoL-;.s=3q< mpp`E,.f+9YHHY(k*OV%UmwI8/]{D#HvBVXB`O@xl9bW0' );

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
