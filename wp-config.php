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
define( 'DB_NAME', 'wpweb' );

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
define( 'AUTH_KEY',         'I+:<.Rcj6Z~.+$|7zZcdty!^c,Np^+6YkpvX9}g|>mrQA2XE]:6+sLtSEmd^KhkJ' );
define( 'SECURE_AUTH_KEY',  '.Q*A|b/?]l`=vhEA#KGLv|vI{9F_Y_5F~_*|g.)%D!a08Bt#s<e|YUO<W}0YWnWt' );
define( 'LOGGED_IN_KEY',    'o,}. AMzy,?1=C~%H#eGFD);+bQHrNoH3A4rZI@H[S{X(YUnZ{A5:]a9az;Z%p<k' );
define( 'NONCE_KEY',        'V@?lMXtpa[E[v%DS!CKM 3b]Zijn<D^8?j7&n/f(M;X5AG$F4NYQ9JA75j/5|gaR' );
define( 'AUTH_SALT',        'LfciWt_/hvkGY9.KdeRdAk-R(Fye8L$2P[0~@b$d_cc(IOy;0kqm4=4?hu`%Quhe' );
define( 'SECURE_AUTH_SALT', '^p5]E,85<j;GdUV4j8b3B`81?mmm+q!Bll7u0 &C?OQ9*Js%sg;O86?LFsS$As#P' );
define( 'LOGGED_IN_SALT',   'O>f?,~YC%$eoVD8.kK;7])XVc4_[<3OBO# Gi/RLl4?(s.VrYaU$>`V*$ZY;7@gl' );
define( 'NONCE_SALT',       'x7mxFW`?aX#z(hjF*+u1,Fi[7S?0l)O<fY+i&L#]pv+8?(Yp4RYU>n2yetqqP`+E' );

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
