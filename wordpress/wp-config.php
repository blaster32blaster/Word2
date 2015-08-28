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
define('DB_NAME', 'dbword1');

/** MySQL database username */
define('DB_USER', 'olaf');

/** MySQL database password */
define('DB_PASSWORD', 'aaa');

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
define('AUTH_KEY',         '/oQ+>|>h~oeV,|)6By;7/La+l`6<fnLU-`;6x^q6O[|w[_dT&7~]O[V/U7p#wbt#');
define('SECURE_AUTH_KEY',  '*4$zvLxh60^n-m+-H *IDn66qO?ijD*<`Q$+50QML-_yZ0`AU}AYc_&ivzCu!j..');
define('LOGGED_IN_KEY',    '5r0XxnJDp+U!<#ZyV9I9EO6WeK3#VU)ctbekTD3oJ]m6.Y2|jqS1zqmxFO*6FAH!');
define('NONCE_KEY',        ' ywq=u4zVYJ7Dd6503r$,NQi++M_;U6NSM|P!1$Cvl9a&KnRgrEhGR#rW9Aq}`<w');
define('AUTH_SALT',        '-Y7>1:NcF+ca@W}tcoY4tX#;y57dM|wy-Erha,(ehd<y8k133+zh.S9a}`/wji$a');
define('SECURE_AUTH_SALT', '|yF%OQ1omJw[~rK+B~daU$1<4do~bvU;.]KO)osI-M}R!)_q&`n?WtYXTOP*AOui');
define('LOGGED_IN_SALT',   'WJAQEh81=?1ZYn.r0zE~(|3_]T4Ap0lg62JwJ|5vbr-Ep,&1}UkT4^/r*:u]i3[Z');
define('NONCE_SALT',       '5xb7QV55)f${aS)>iH*@Ue)j=5sG}i+h!*.VhX6+|>7b?sv>=-m~7l}`V=nY2U44');

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
