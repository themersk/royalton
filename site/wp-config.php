<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'royalto4_site');

/** MySQL database username */
define('DB_USER', 'royalto4_admin');

/** MySQL database password */
define('DB_PASSWORD', 'R1o2y3a4l5t6o7n!');

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
define('AUTH_KEY',         'pQxf-3 aGoiD9<Yp7dbH@t%-i~W{rR]h;L52Ge4UyLlt2Th|#Lf%m`zcKi}uhvO4');
define('SECURE_AUTH_KEY',  'U|>rYo|P!lt?;$1pj:nJBY:`W[cGhdy]xL7sE/T*R=5:z}cyQJ3Tu|dl[oQR:S3Y');
define('LOGGED_IN_KEY',    'K-..i+i1uiq}XuebB[P[R($]@Bt(7!o-x2 mI7o?FP6Eg;j?gHi}gN@+D@i-c-JN');
define('NONCE_KEY',        ']>BJr@TH}3D1k|r0>2k]-<T*uLiscZoLX6BE/Wkzygim$5-@>0eN=gi|{ XX+<}I');
define('AUTH_SALT',        '[HQ>3qQJQc+G0z +Yf)^Kav9N]N05yQL.?Z[7zt<x7{>r+`~;0p}N~s8lVs#HLR*');
define('SECURE_AUTH_SALT', '{.2ViWQ?5uiExq.nLFl(Nc,f))Ozb^cn/[/v~$4]]}Zp:+]r{)k5aSuz3%d1nB 9');
define('LOGGED_IN_SALT',   '772~%7nkKW.x?=.!Mak#VzfKE=99|nz_H=R}U}[hA<U^++`ZpSk!I;Bb40#SpjT}');
define('NONCE_SALT',       '3<?TB5*a>]ZajG CC>BZs!w<kbwp;>DVsG++7+sz<NYxxVx>@;G#*CU5G.EkC35}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
