<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** Bypass FTP */
define('FS_METHOD', 'direct');

/** Database username */
define('DB_USER', 'wpuser');

/** Database password */
define('DB_PASSWORD', 'Litakely19!');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G`4wX+~d44jB1S.240O*A$x!3SP.HK/TR@i<I?-2}S CpkU,A]5(cS>*:/ZYdz]!');
define('SECURE_AUTH_KEY',  ' MH/)QZ13+?DW)<Wk=8Y7~J-dE4qY4yYa|vL. {.Z Yt[GD<ix3GVn@3^)j;gknT');
define('LOGGED_IN_KEY',    'C1BP0O@05ryroGso*GVg%y|6HI~F?jm%s#GP+}EIfS<_8Gb;5NaKCP$=jIPlD:sJ');
define('NONCE_KEY',        '5_rs^oUC8j/RN8Tt}Cdv!`u{{kP}(H$)T/I:gDC+efR1)x@=?U,rHhz>yfC,1:;N');
define('AUTH_SALT',        'NG:Yx$tH %u?L?p68~L~z63vb>GxV9O3CzjPa7D#%Yq&zZRtszTYFPZYnKi%O}P{');
define('SECURE_AUTH_SALT', 'JeRe@oR>$%TbEU+-Z,<#{Ye(=Tz>Zehu5~uX,VV^B.j!K0uIG[/3r^e*2{wZV{zv');
define('LOGGED_IN_SALT',   'k3x,T:{xwmB`Oc0I7db_rDxY 0MMn>]3})=LX/hH1XiDhVyMO{23j(93fMC>QJ*i');
define('NONCE_SALT',       'l&MI<aa.;opV$F:|uFvb:?g0E_GzWEs$Ws!p!Rlx,CSbVVyhKhhk+-%![6<u8?Hq');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
