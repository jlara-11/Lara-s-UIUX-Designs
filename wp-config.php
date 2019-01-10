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
define('DB_NAME', 'personal_site');

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
define('AUTH_KEY',         '[k[e]5`Xf{@(re3K6vJm_!Tfx -Q(pZH]S0-Bu.e04f7>fEmyySSF<6f*+[>t[#D');
define('SECURE_AUTH_KEY',  'mIGG ,E W!=&@9MC}:@O!hBWzs&I=S d|}t&tZI>6fVY!rIyH PX`1jrslKmZWEk');
define('LOGGED_IN_KEY',    'ujG}zU84pU3<0(+VT/`j8F8gi.MxF{*X;nQV)NP7KhbI*!):aR<J=Y=8~6>sVNY(');
define('NONCE_KEY',        '[,Z3`GCfH?&jYnX8b>vLAV|>T=rUf@GshtWv1UY;o%E,3;yAWfSn h*Nl!nOkTn6');
define('AUTH_SALT',        'inuYLN3;XE|mq Fq,RokHaH*~)GA}ees~>O3$`pZSZG9Xv`[>8aW|L?_11yB 89;');
define('SECURE_AUTH_SALT', 'vg%Od `WA-kJ^M9{~Z$:6nJZT$ykQ^WAKp:L`sYH*l33CnwVmQ%0m;6-y:![Sn:z');
define('LOGGED_IN_SALT',   '_/q{|72}(MNetO^ .z#j$RAx=B*T57F4szF+$9KUB?bSo{@m[W5U!.n^5zl>;d`/');
define('NONCE_SALT',       'aVIQWS#-?1`4 /f%tiQ~c0-SG](pL$|I{x]dxn2>C-}n5N1-:cL>72YTU[@&+O/z');

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
