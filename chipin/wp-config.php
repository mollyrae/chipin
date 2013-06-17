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
define('DB_NAME', 'chipin');

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
define('AUTH_KEY',         'E#ckr+G;jq=M#tr+vEt|a&Qr<5;5T1Fe*H=Z%(+Tt-B&%)T}y,&IjMc.)[H~b1x9');
define('SECURE_AUTH_KEY',  'bHkD+w Cq,tLP5)t|8/{sY1Ep|}M(j]eBY%Nre}2s!)hHhEi,rpxX>}+ii<S2Ol6');
define('LOGGED_IN_KEY',    '|7g#|ma2cb$mm?{<):L?AzJN2m-MA9/8(jyK. Q|kzuM2iRew!hjAu8Jh-)4j_-D');
define('NONCE_KEY',        'I{dH3NExrE#xvF,dN1 U(1abbYgq>GShqD*f2a25i+];{-SIjx&T>ZE?r@<a^!Z1');
define('AUTH_SALT',        '+V!`DZI@Kp4f69#&WKjLhv@zg->Bhb!;JzwL$)C)+fQC47FOrq48n =!;+_vpxsN');
define('SECURE_AUTH_SALT', 'Iud,W;fN]=b$8Qz;EI+|.qKqFUb9@,B/9W-r!4By{EB`2x^,PfhZAY3T|L@aTo98');
define('LOGGED_IN_SALT',   'A<~!CXWFeJK]Aa#mQdXJzt_lgYlVc-J.d+={;/b,+ve6d-5}*#n5q.4d,.pDQad9');
define('NONCE_SALT',       'xTxTT|uX|-.vP_<OY;hyl[2c_S6ySV@]6:&4&jM&Cq[=+?r9{iw]i&lI+;weVEDu');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ci_';

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
?>