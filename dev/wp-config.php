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
define('DB_NAME', 'imarkcli_theflywizard');

/** MySQL database username */
define('DB_USER', 'imarkcli_flywiza');

/** MySQL database password */
define('DB_PASSWORD', 'im@rk123#@');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '/7Ko3k##Vl3x$[G@x6Ey^<#KK+n!XR}e[`VO0|yyePtpQ_!*tJv}[I#p8w^ud/zZ');
define('SECURE_AUTH_KEY',  '6N%;qZ9`qGf%Hi`:L<! ~svi,HeBDD.5g,d6$B[X;^fn4I/4dX#ix#y!Z4#_GAuI');
define('LOGGED_IN_KEY',    'zu/tou-eW/=dg67CP8?Mk0}&kQ&+E):3T.)^BAHobK/:xTBVaP)7QXpt}D4J740H');
define('NONCE_KEY',        'bj;X+MCJ5N)# `,=I-c|_?[)IBdzmI[QDTZ[|)78uvNV3h_I&_]X2bb:L cwIljS');
define('AUTH_SALT',        '9qK,&u&kq`F&eI<EN#3;MG9a6oQ|+OY,Y#.uZ#a?m!Vbq)uL+E=+k7Lq727:XFrg');
define('SECURE_AUTH_SALT', ':FqOERn8#NV~!>t4X-+l6zi^nsJ9#j@q?8{#x~*@R|x<8N%RmB?mS|-K}!c&Y(x.');
define('LOGGED_IN_SALT',   '*W7@SF[!ILF=p [VXX jr[<|`DIIvd]*YT<H64Lx!%bv.[uMrq61>=DQ:fN>p7)*');
define('NONCE_SALT',       '{%JlNpUp@H:ub}Jmc)*:7o_:<.m/y-Z]LVeZdqu_qU9jQ%usngjOi`>zaUv]11{P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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
