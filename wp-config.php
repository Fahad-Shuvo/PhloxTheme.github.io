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
define('DB_NAME', 'new_db_phlox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':kjRy,V~Lt-;Vj4c5bn.*.[H2e],%k1K-X>y|ouagxqaAqK:H/.%4,8KHiMsR2_W');
define('SECURE_AUTH_KEY',  '],O|`?lZ}(bN;%v2e)8_RUnH,D`wAb6t?VE[VSp63eqA%e{j)?;L<Ok>u-%,ih2m');
define('LOGGED_IN_KEY',    'Fr2&@|4X^m2cG_)IDEmnJ`e@y%nC(o^h<![noL^50*1:Lprj.w-dMNlNKw}3_7*u');
define('NONCE_KEY',        '?`um~(TB(GM6TQsk98|Z_$}-V:i=ybfL.(K!b]}*drW!X3vK=1{s8H<+5Wp;qrkN');
define('AUTH_SALT',        '1~u)&v/flC_kjn|xHj~4#fZ7)v@aRAGjRv~J&}qs-Id]k71YE<x_^-9F0/}Qh!$3');
define('SECURE_AUTH_SALT', 'dJ~4MOQ|:8`8(,(_@[Z!9?=^YIfmsUE3l9/@z3)ik7bb=karW;7(>qU,AfFT$8?.');
define('LOGGED_IN_SALT',   'D!!2G=3:a)bsZ+a_Fh6Pcq{I9<UHs]W@kOuJ|h=n#eL[YiR[@8B{>n3N=%fV(T3O');
define('NONCE_SALT',       '6%Icr3/_fb1Lc$:z+b{57|8nzo|ZCIC$+~pb+}Z}mrQ(tYch:r43`JC,[@V/E_24');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'phlox';

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
