<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brief7' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';dwb10Uz+8c[X@r=o1ztLn[;,_?;wAXh>aJ_KNW4jC4r=H3* 3!VY|--VN,*){]5' );
define( 'SECURE_AUTH_KEY',  '|5mCd+0kT0+L@P|1ne|FB[.r6Ri0c&v!WFr[Ns%2k*!Gl_/u868PZKH<f{0gG[4E' );
define( 'LOGGED_IN_KEY',    '&3?Vve`&RT^/XF_/WA?;>+[!w-?-VW:kC10f)&+oY<0!3Cr>gyana.]qB)c!F;~T' );
define( 'NONCE_KEY',        'jDy_@Lhnl.PJ0C|[J1h:|qH@O2R$HMt<+NLnWQ,2Xh:Tc;R+9m[!og&26g,r{X5f' );
define( 'AUTH_SALT',        'rEdZE{-9h[`sD)H,8|yi+;-5qC!{6xTjZKJ8vSJ|oY#d-K?0m#o*`b}jnD+?0g,h' );
define( 'SECURE_AUTH_SALT', '.V0_:1S(F=V,YXG:a=CCe3&h^ep*Sg=E*|pn{^)24^A6sklE@Q)6~w=+f_eR>F0i' );
define( 'LOGGED_IN_SALT',   'n+9/#qs/|u7F,~  =Z%myz|DAe(;vmRA2vmPpHZ?UNG5*J%)S>4>4pz N;*B9gVc' );
define( 'NONCE_SALT',       'b,Y)kVIPZy@Aw(@yQ;mYD-A{$rriBM=:9A9wWfOX7C}e;`B.m+7#J|I-T}ELA,u,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
