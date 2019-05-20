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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'korsaa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'java@123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o>E[yH=:DYRl-t]7GLvHX!vKq_PL@bAB43#(Ts|yWVp//.iy0_JmNdvC5[bp!.}A');
define('SECURE_AUTH_KEY',  '/@}kFt=kkOO|Ns-183=|.e28I~)qvJ0W3eA+&P;6)?y/~-Avz|&=>n39!Pm=~CH7');
define('LOGGED_IN_KEY',    '9fcY:j6?h?Y>A6,@B}a?-HswV~nMH7#E%5XaNB~$^$$RvWBsIb)jwVVGz3N_XkBd');
define('NONCE_KEY',        'Y(E<2KL7J(1>EO0*T;e{sJ&=Nq2g$UyQym +PaB(JK&9+EiZG5a;q-uI~!o&i HJ');
define('AUTH_SALT',        '=gkqww?PAdnX .Bww58RWqv1?@n[?(><&))d9iJPZH>T)E}Y!em${2.4UA1BUAN>');
define('SECURE_AUTH_SALT', 'oMIF3$}fiLn4R;q``TL`MSTWbx@!C^ U=$f>q%h3^scd`NS#hS()A2x[(fF)gMXe');
define('LOGGED_IN_SALT',   'F9E/Waa[Vzf<NB(bC0},SdCD*z{XhS~?A>I%,b}HL,Qvc0/E`^M+FB~da&Fk;{@u');
define('NONCE_SALT',       '5DXHX=D[vw{[Za39APrS/[dP7!tqHJ9B K2NH<!8G)$<=HIGw*U{b?,@[Ztx9Nv=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define( 'FS_METHOD', 'direct' );