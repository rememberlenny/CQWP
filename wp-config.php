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
define('DB_NAME', 'cablevision');

/** MySQL database username */
define('DB_USER', 'cablevision');

/** MySQL database password */
define('DB_PASSWORD', 'cablevision');

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
define('AUTH_KEY',         '4HPL-<D^|sZMJIzUrW|YsdFS4$#>Q2:3Y;~iEQ|CY[b-n^>i)^?9 /K`;TIEZ&GL');
define('SECURE_AUTH_KEY',  'Hd=:YU!jtTRgz96y)MHrW89Il!H=2Rq#O%$9xcq&>wqt;fR-`ER7EPN|aoJk`kxo');
define('LOGGED_IN_KEY',    'p>VH-Yly0Z@I8$~n4n.YVn:@-+Y0k)l1LeN4}`s{d0KRa[KXW2{=( q|*v5i>YLK');
define('NONCE_KEY',        '~ |7K*pf8Lv-g`Y&sBLj?}[.rX4H lJ#THc`:XPP?5V;D2Qh-&dJ-*YTGF/roqB ');
define('AUTH_SALT',        '$Nqlv,Ap)1q}|U4930!vK>}Le*ogj:,-<m_9D@+h!VvJ=>I;(fRqG++a#/<W.ZEY');
define('SECURE_AUTH_SALT', '6?!||SO9:Y}_eIz,m&C+br.pz#Y!zt*-/g,5qWZF~NcUyb|G|3{`wIEQyxdK`~(8');
define('LOGGED_IN_SALT',   '/)=|51^u[).A_j(2tYd%Xm[u9|:o)}..Ci@RE9{gaX|?v)bvsmp|oJv%2bM+@.-J');
define('NONCE_SALT',       'gL$+]7^u$ SGOK9PBRN+L[$GJ)71HOj(.^{u/f7Qk*T8q2BRctvhWaGTx{Fn,am5');

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
