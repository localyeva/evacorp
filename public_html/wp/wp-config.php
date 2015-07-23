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
//define('DB_NAME', 'evolable-asia01');
define('DB_NAME', 'eva_corp');

/** MySQL database username */
//define('DB_USER', 'evolable-asia01');
define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'P@ssw0rddb#@!');
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
define('AUTH_KEY',         'cFo<snR%Wq4I|U6,0X4R/2TrOig^5:=/yu3$YqvUy4]|{X&3mMl]Nvr#GBa}?zbF');
define('SECURE_AUTH_KEY',  '8}]ZAKNrg.z5E=`Sd/{bMt@WXY,mZTuOF4dWo5ki#AQEGGVMLg4@._(n{PQRVWAQ');
define('LOGGED_IN_KEY',    'jWh++m-iZjM1H.Vn.m(;{=TEY)[0?Ua:d~]D^w[q@y7[QMaF@O&}7p|k)tLpIHhB');
define('NONCE_KEY',        'UQ-]!mY^u&7=9)>3kGe;Pr- /9p;1u5P?yU!w.0-MX:R?z9]@jpy2.>-V=:)aqZr');
define('AUTH_SALT',        'n0@@}sD1<ol,%OybTT8B8<wm_w:E+s2Y$IPQq-jaa6>`nip4r:,quQ@=Dq|pwg<r');
define('SECURE_AUTH_SALT', '2Y*|K)tL-dD=BZF+s{OYTe>uxd|4>{0^r8|ns}J;{zzB>v&qy|PTUL+c:K~jm2le');
define('LOGGED_IN_SALT',   '}:ypP 1DEmhA<MJA1!%mq]y1S^dqKN^uJ4{TZ|[vMHDt+!qBr, G(An|w xCHqdG');
define('NONCE_SALT',       '`()q <RQVn4t!Rf@TS!f]RG8.;7yFQh2.WXsT0ZgV{82l+I:K.2j.LX!^zV2Nw 5');

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
define('WPLANG', 'ja');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', TRUE);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
