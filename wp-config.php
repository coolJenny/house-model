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
define('DB_NAME', 'housemodel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'N~B3e3pB*/R_%Uy&$KDHAOF?>buaxS{sN/,L`|/j)3dT;UEeH8[]K]JNIiC0n/Zb');
define('SECURE_AUTH_KEY',  'tU>HXs~S|=8O}US0-0DWsxeW):#WSRiMB_XtPz{:/M}RX^>/-x/QQqo9mW#_toE%');
define('LOGGED_IN_KEY',    '4%:bnoE%7y#s.i%omcaxITr18G[x6$A(yVt(1P-i+F>^QDX~Sl|Qn_bOOIn6m+X%');
define('NONCE_KEY',        'TDB<U]&:%`<qA>2>?lETJ=IMCqjM#JEvcc]|?3[eXVu#C.wO#c&[k&YK%Xx1dg>{');
define('AUTH_SALT',        'QqTR)ZgK+p KH?R&S7>);>~!+Tf]W-oRp6-5vVa?~Z$FsJ/aZ+h.1y}h=(:hLR2>');
define('SECURE_AUTH_SALT', 'h=V~yEZ0{mLxG~.f,G1)IW:m&|/94CMc4(O1aL(9t>gK|(>g(S_wRwICMA/#WIud');
define('LOGGED_IN_SALT',   'o{{Je%k]3NFF&VwKfBse5PfK9U1<Ci&:tN/$rH%4Kjr[ChBF:5rCR@e{EClX;02O');
define('NONCE_SALT',       'ql}~Xw;:_l$NHLc 3+^a!41~WCS%be~:-5Z(sy.t,GL`+OV~8MM6/NPPv6+f-PJZ');

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
