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
define('DB_NAME', getenv('DB_NAME'));
//define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));
//define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));
//define('DB_PASSWORD', 'mydbpassword');

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));
//define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Xat|`X^W+=b:YnhN-!BW4Rbe<5kYIrXqTOX6*hF ~+p=FSvyThOPyhZ.ww!$`xNz');
define('SECURE_AUTH_KEY',  '*K`G#|=([lz_9LgR/P4>FUybj5IU@5qmR=!,cf7fST$E,)t_|T|X5Xd=SK]nu Z(');
define('LOGGED_IN_KEY',    '+Z;elS=.t/K*~+5XUE{9FuzL{UOJ<(-*?X kOsq3!~KBYQ,gP/fe&ATOxRd|!{th');
define('NONCE_KEY',        ' vY(,9#In`p4c&8CD>rh[66>6nw&Q{l7fD_NA(iV/kuRFwJkm*GI}TJPK>TSMMNT');
define('AUTH_SALT',        '#[eaf|D;|(/(>%9i,)z: zg,q761_|ax1AT-VNb9E)d,-~xAEsqi.4-`Zv*)Ex#9');
define('SECURE_AUTH_SALT', '>?mN5Dg:guYp)l0fFb_LB4^~DId$tt0lCJv){0@Z1I|fW8-{~A7D#dhdvpFMHOh-');
define('LOGGED_IN_SALT',   ')>80)embdy$K~<ot9Y%GC$a#3a2#JtkCX=7m1hs0ypV|auGu?AKpW9E^#4xYyK7M');
define('NONCE_SALT',       ':jYE6S=N;6>5^xFB5.4P!lAV^We0uBYIazfl/0aKUg+o*3(KD&$VT+S&oH3apIz&');

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


define('FS_METHOD', 'direct');
