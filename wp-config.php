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
define( 'DB_NAME', 'lamquen' );

/** Database username */
define( 'DB_USER', 'lamquen' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'T:Zoaaa|p:6xULA,JG(PHg(**TVErXBD$/%;EZ0QU`K0M]eU`46G#W]Mw9 Ij{Sp' );
define( 'SECURE_AUTH_KEY',  '>jK9%mJkrUbK6tEk2))Nht]zz^Ae~KDGbufoTk<soRGJ,CAc6[@I>?R`(lqB$4[t' );
define( 'LOGGED_IN_KEY',    '<_%mKd +eqn7tD^*[OQ0h7Y6*3l35]t05Mc!$FHYg4{p!8Ec4T[RZy]:79<>e=!-' );
define( 'NONCE_KEY',        'c*E/!vQ>Wh&F]jRl1 ks8p?vDs_Xykc}3Ft--Cxg6FH7IXfXFBxKcKvP(z*4k3%6' );
define( 'AUTH_SALT',        '!:G2{lO0p`uXT$}-RtK)3bCyni8aT+zY4]UQ|[7:lN>d4A!gprOCqX69vxu1jf{{' );
define( 'SECURE_AUTH_SALT', 'to=%4b$G)me]|@VFI$u Lj+O;L74h[$Hg(3S=4f$$^t|brq Fu:ud6)TNd3af1J[' );
define( 'LOGGED_IN_SALT',   'Tx7^/IDr^O-G]FeDehVi+{psM4AaS!Mtc$.3^eEy}Ytsps)q}%jDUkt2E-vt>Is3' );
define( 'NONCE_SALT',       'XifCDP2{-<-](&@$y8ZM<rSX?SAJ2A[<4to$TJe,oNga;lX3LO7:)OqT(^xH?.D6' );

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
