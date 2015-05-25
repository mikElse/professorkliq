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
define('DB_NAME', 'wordpress');
define('FS_METHOD', 'direct');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '(8j_,+XS1Vr`I&{TKJhfiMJy)(>RY^1pNkO,[8,7[GHnY*jXmcNI5qhEOqOt66*#');
define('SECURE_AUTH_KEY',  '!r;GUs_^+-Of!~9W!Dxn%5)#u=,s!eLE>~MtW(7{ZFq7^&B+@_qusE|z,o+(v|Yg');
define('LOGGED_IN_KEY',    '+a+p@|e-m),-qy5!4Wcb/6G&1{vKXAP6`_1c>8#b$.}E>%<.lK-Clqin3*D]J$T6');
define('NONCE_KEY',        'HhcHB7UT1<I_dY~0fB|3J)Z<Myn%n3LCQ*],7E{84SaC2nD|0K|p,rp>PCUBykaT');
define('AUTH_SALT',        'HeQ|GUx3^NRkA?Y0R4$Y|0W?.+nV*A~n$i<k(+LSv%+0L`nz0R]^!NlSTVr5c#.)');
define('SECURE_AUTH_SALT', '={ByXGnSk(%,{z!(gHEbH:,9,{1,3:/X51dQtCtXQdo_%5xEE[#1 {ipA pS-*&f');
define('LOGGED_IN_SALT',   '<=M}g8F ~qah+vXU-7|Z<m|l}h}sX7|bI>9b_(@~Bx+^@e-=5K&a!YuojvVaCYZ6');
define('NONCE_SALT',       '$n-WG-+j Lkxta0d>d,RHh8E 3<b1 ^[:_zNpSNWG-^B/<6O{>Tt@s(vXLM#8gjU');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
