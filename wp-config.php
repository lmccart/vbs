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
define('DB_NAME', 'lauren_mccarthy_com');

/** MySQL database username */
define('DB_USER', 'u5zpw8mh');

/** MySQL database password */
define('DB_PASSWORD', 'bLNBv3D?');

/** MySQL hostname */
define('DB_HOST', 'mysql.lauren-mccarthy.com');

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
define('AUTH_KEY',         'PwqmrOlRel43pb*38zC/iBfMt@+Z50TJpVVocPfC"MM@1)p$7Fm6R#veDBWK5XMC');
define('SECURE_AUTH_KEY',  'XE(!MV)89xwddC)uN/!H%zNBHPx`#A+DCTO^H|tvMUrYW;L|vC0%nxqjgOq/J7dd');
define('LOGGED_IN_KEY',    '*zfl^Wafmtuhua#R"tuqs$%D@zyrjhTxy9;!5uzPjp%PR;L"m9LL*UJ#K)FXaX"w');
define('NONCE_KEY',        'H?Tb9)hG2Lxb@Qj!Ty)eK_CJoqN8Zj7hzHZlgamRNt!bI3D8k`8?GHa@L~e8U:(V');
define('AUTH_SALT',        '%$cUauA@Nroo3LwDzBY0?^Nm)iqpf;lxYJRibRg?AcqEJyp^6t3ANU_)KP/"PVeh');
define('SECURE_AUTH_SALT', 'nEF9h~IUMdZ`X3(GTXUedmJxh)h8I?+GxByO*ST9WfL9(?_wIZ+mIxnYo_+K*|Kq');
define('LOGGED_IN_SALT',   'lMM!i(^t`SpsH*bAPS4T9uS?if~bojnniBs8;P+kJKB4)%|;4wbvxC74p)jT_g5@');
define('NONCE_SALT',       'b094pWburl*_K*Y!+wkO:BLl`)8lSN^~hcJ|*Y@:F$88?pmk`Pc+4wpE@24*!m3U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_bs57yz_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

