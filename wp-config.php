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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '87654321' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '=o}djS-ZgeU-~Z^f#`-k:<5tFy+:m0DA(Q!$m&vgAxiU_vzB[i{SVl[~5%GUB_:=' );
define( 'SECURE_AUTH_KEY',  '|p}XSwgM*s2)c5f(gsA|o1xG`pL4XYkg6BgU<$-BODG>$[Isy)-[ea_VI7=vZ}KM' );
define( 'LOGGED_IN_KEY',    '{~>uoMWLH%+5aR.R:.RtD^4CfI7~^W>{$Aau.rZ=6W!Z_wdu4gz|E<GI7eYR=Ab:' );
define( 'NONCE_KEY',        ' d#RHZ(@46 Uv*p?U.~Cf-EA)tX.rl+y/>)D1wQ:/eRew-q[Q59U6Z%^wpG0=$jT' );
define( 'AUTH_SALT',        'pf;Zw,$)Vwx0;{5J=H=A3<,Wm!z_c&%Qkm|NRT^q`LNEr50!G$c )Mk{sa}M~lDb' );
define( 'SECURE_AUTH_SALT', 'RwE<WPD,vBc/_GHmgd>tp@y5eIHIpXz,hjNovmcEAu|U9MJ$_FDqz@7TW/b)UxOS' );
define( 'LOGGED_IN_SALT',   'YxKL*9[&}ZWLNqF)^fCAB?j5krk?qu)@[}P=!@w5wQ1V]!AQ,A{2ZQc(tUXo,^2E' );
define( 'NONCE_SALT',       'S:hWQ<,f2/0UnFRo9RoS5gV@J%:UaGo2cz@aQb9#taoEpvoKa8Q}%}#rxB(l ></' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
