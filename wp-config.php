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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         'uTZ28g=jtbEh^OrhTXN#WVp}.7A#QLoTI|H$&<O90a4L$;F.DWJu& >x;H=5bGP1');
define('SECURE_AUTH_KEY',  '.Wf)k+oSt.u+Vh+TZ*KM&#T!}7;k5y(D^L-^2d17*z25a:(.<|b-bZSlv5g:DsL,');
define('LOGGED_IN_KEY',    '#H9AE,q[q|ES>@5O`c0S^Xp_>Fm|FbzTPE:Hi,zbCiA.]Dft#GY|:#<#R:Nh?mzL');
define('NONCE_KEY',        'P|y.Jx:c=e9sy`zuqO|Rkx:<^QPS&O@e*6j+V`IH6.;g6Q5Orx*8h#cyEWmKgQ_!');
define('AUTH_SALT',        'D)SLJZ!2{mI88@%aUq(>y3o_$-=<};B)_)A!/U<#%[[Ck6W>G@YCK@1`D!+LRpof');
define('SECURE_AUTH_SALT', 'nbwTmjh+D?{xfc5&EnqcU^Cc,v7bVr9*TU=)&Wg*|?]p,]{`k/n:KYH&U i}@7,$');
define('LOGGED_IN_SALT',   'v@`{EU1NQ,@gt/%!PB#]*l$#H[B?u>,bljsssw~[yn=b@4n5U~O^ddYFEivjsT81');
define('NONCE_SALT',       '_3unr]7B6$uPhAt$}nPeoA>#bpy:S1]BXZo<f6 $ziGgo>cDzdLS)1A1M,0]dEtH');

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
