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
define('DB_NAME', 'nina');

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
define('AUTH_KEY',         'Si6BKWf}/^}:3w )k/n|^1Xi%~MlI_B5<8F6TypPtERJ@Z&b:6KN>5c!>zPV>N};');
define('SECURE_AUTH_KEY',  'rb_B~YYCve$fC>|wq*,z!owDr3jC22b$2_.-=`ZU)6H,po./P?rHH3>v~.QF:{RZ');
define('LOGGED_IN_KEY',    'nYwlucA=(4O^#=.VXpd[i}OGqu[/xbJkbkW5E?e [yPJY*[bi.O:LPX!mSwz-&Es');
define('NONCE_KEY',        'D-6CHmT$4.{s*4ecaaS6u01mB~>.MH9jYBI5%B2KS/(6mc&ra+/r^4yj~zQn=TI(');
define('AUTH_SALT',        '7|CheL+OG]-K2^WYbkN-13%GRVVx-yNBe=eX;!q|0rJ4fu[0SIZ*l;U=1xm.`.7*');
define('SECURE_AUTH_SALT', 'o,<FBZQwOOchF%BCZ3fz0vS0%zwb&H5s^+X&@4+-ybPZj9-V+;Jl4LN9f[rBd!]f');
define('LOGGED_IN_SALT',   'k22WWtk*Mf@0b@(d6c~FEMBG6(V(<?NJNvYa$iyhqR?%|omx3GpE#oG_%/b&0~#<');
define('NONCE_SALT',       '>eQ.qM)W).%PINwCsA5zN`& qH.afZSg7vH<]phYC.`Nzq`BMvGw=@$uX7VVlGH)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
