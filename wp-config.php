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
define( 'DB_NAME', 'test_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '0)fn/QG%86O:0wSbr=qbuyE)J/:l,h!sI_l3.ba?~;)f^(D4w=yu9>KgjExt|u=B' );
define( 'SECURE_AUTH_KEY',  ']5L&iFah7O9bqx qvTv>7_V%*XhY5aV]Y6:iQLPxg,;E)h*WvPq_okY!PT#2@C& ' );
define( 'LOGGED_IN_KEY',    'oJ;z]0: mHK:@>l1,;qK34jIDhSAX&^gvPF_5u,L%2*z piv%Vgpp*<F-vC`c+H/' );
define( 'NONCE_KEY',        '<qZ6w+50<.`L|}m0<QVvr+y;yFOXr`eo;Yv8e]$2CS8ka_Pyu$bn&_@,tY|`bMW2' );
define( 'AUTH_SALT',        '[P_;QyL:hE,tB7<zvH <v0>z}sI`XM*^(b+B%:#TDe~RdwqT[E<@Cr,<?lXCi4Li' );
define( 'SECURE_AUTH_SALT', 'AOZwr.-M<ox{J9J*3RN&M4k/,VD#_i=<Wvv+xdFoA1N@^.;9XC{5/_Ao]6BIlNo.' );
define( 'LOGGED_IN_SALT',   't/L(L6+ L*4J7lv+7?~mJeW/S%;}3X:UHxf[?3*.:-;Go75jB_xh$s#~TWq]L-%$' );
define( 'NONCE_SALT',       '7fv6G2_&WDnm$~30DX<b#Ov?k%29&LXl8twi%XM<)^;n7SrV^wgOik*K9.##G{k?' );

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
