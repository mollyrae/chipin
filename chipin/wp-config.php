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
define('AUTH_KEY',         'S3r)).$!;zKcZPC6lVfn+tSA1i2w{%+{xT%g!+*02 Y6!vI-p/+e7benu9/4#Cc/');
define('SECURE_AUTH_KEY',  'EWJ9C|GV0;alD2k+KHd>NaJyKz_hx!-Z&W(K5WY@[/D2rrjvQYpw/aj{-Jv)(9A~');
define('LOGGED_IN_KEY',    '#lR+Y1{X$-F/rYtwDu&l.{iw#D*4>P7d+$$8Laf3;-RV_U6uX,bNje[VQ,(|ZuYz');
define('NONCE_KEY',        'E-K,mbS-~o1 iQ$q-u^37Dqxm+(T-iL|L-~ sM:$J.X~3%>*{n%KJ#ml[74OvGQL');
define('AUTH_SALT',        'b<OF 9ptG9<(`fmd5vVP5P,0!5+0PT[D)TnO8aC4ryu@C~n@bg%|uRjQ<reLQwc-');
define('SECURE_AUTH_SALT', ')*g8q/wH@+XR:o`J|Ut@Rg&Q)j2.xQ|F+`x6}-?2XZ>I-y5Ticlq4ko$1;hT6$JY');
define('LOGGED_IN_SALT',   'lR]b(jJQw{a4XI;Jx_]|~t{0$iq}?9AyCtwBGN`*[u3tkU6D.(w&KLed|v$pY> q');
define('NONCE_SALT',       'OK2f!8sh!;6u+rgoU=406aVhnY)D*==~}|K+1y)-XFQ*i.N6`3O;xkIwQ7/md/[;');

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