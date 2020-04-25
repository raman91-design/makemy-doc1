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
define( 'DB_NAME', 'makemy-doc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '*xBs_zw_Cj4K<4Bo/6mu#.L@lXH({_GpFBtFx-8dE8^P=noTXg>L4!t}-_&uR1Ni' );
define( 'SECURE_AUTH_KEY',  '0%:+1sI69r2lu]J$v!*Mzh~,p {7PMpv)2l3:qZCqHs(BBGK#S4{Nd2n`>cK2wfB' );
define( 'LOGGED_IN_KEY',    '#su:|).y~vjS9CDR>`eZ0uVI8s`KW-ZBV7Y2oPHTREr]>l+mDO0102+6OHl#bG-~' );
define( 'NONCE_KEY',        'c mk.*CHTj/ISA9L|#-gMuY(/ tGQ^NyQwv~3,j,}J{gtB)Qv.+hwY{~2|hxZtBE' );
define( 'AUTH_SALT',        'x$AK91=<rAR&R :)+R]!`Bq%lFDg`/X*n_FPQWzvXI2O)l7jfDmyj^,ET+@SzhRb' );
define( 'SECURE_AUTH_SALT', '=U!Ir2d`7v=~}<QB)PRqs07;U4xTf@sj.W9d?1wD_V$#& 37:B3l8+k9T9%Pa{pn' );
define( 'LOGGED_IN_SALT',   'bHu6Fi&`w2A!G.;{V?H}7:MubV++TU`3B{pT.u0CIi58HzFc],1T0~6sOtLK?D@m' );
define( 'NONCE_SALT',       'HPK8Y 7?,Sg4+fJ.Bp|:n tp%42jAD a4{b@AAIg,Q>^+b)Cp9v@&x.{l3(q0BF4' );

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
