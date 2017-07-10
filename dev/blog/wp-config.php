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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'matt');

/** MySQL database password */
define('DB_PASSWORD', 'ktg5tg5tg');

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
define('AUTH_KEY',         '0EE00@EpK%kxRV:KC_Y%2hQIgwmB*wF8Q~9*9R:}:(0FUbIs/|/vLFn{ %lN.APt');
define('SECURE_AUTH_KEY',  'cvjPUU4%usoGfg3c*)x3gyIiEo%W}Y|c15^g#1d(tusO5FsyG{Qr|8j7lTJ*voPl');
define('LOGGED_IN_KEY',    ']9B{h@YbII<~IZiR%)ADAF3@@-WqvJlN)TzBmm9ic8p$17mcE,|V:VdTtM#)m/;@');
define('NONCE_KEY',        'vDJ!9:001wcwEKt,KJ~d:H7.tx+GcV~6s ,ADyUiCrI#Y:Ur~G{^DG@;B$L<ssRe');
define('AUTH_SALT',        '`*&l~-Wm:@8n8+[cyj^JPqVZXile%#^LLD8evDAcr`aZg}s?G?)hBJNA-bqaK)i;');
define('SECURE_AUTH_SALT', 'z>uA?dSZ/@2l1wIr-j+mDFqsTajZq2k08^JrK|n[l(|St*y>QEw!?m|$$AvCU0If');
define('LOGGED_IN_SALT',   '1jgK?]Cx`)==M[yw4)<.3/<r :?iV+BT&P=X*ik9:8QR!KE#P CbRs<wu~S;s|O6');
define('NONCE_SALT',       'mxmh/F-vsRy9y<040`KBr/iU3ClrO)fzIW]7m)fo}:`D/7&z[Ed_#LRXr^?>%m!E');

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

