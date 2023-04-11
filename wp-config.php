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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' 2#8KNklWuSvHgCi/WL#cnj~(5Dix$)E~$GjyGtKBT8ulSA44,yUM=n5/X#81[hm' );
define( 'SECURE_AUTH_KEY',  '-r8CUY!@`gdclRC9XXh&xyF&f-FAEU|HrR=q^AsV`mTv*I_]v|a^/a81(ddogjSE' );
define( 'LOGGED_IN_KEY',    'n4!:og)gR0!gL>mA6iXc<BWs:MQc6_DPK3N$vB9;WLPk-MTs%=]B^%uPIHXTiMgn' );
define( 'NONCE_KEY',        'g{O4~Oz+z2V/(b%-!ynNWPk:p/tab>+q=R/$74D?P M@y;WA8W3jEP!F;Dsn$(I(' );
define( 'AUTH_SALT',        'f^dM#vT]J]w_p=@wsF,a~Z4xL.Jdp?7&UiX0R)BemD8#x]W%]woPecr85=:u0X;M' );
define( 'SECURE_AUTH_SALT', 'd.*L 8`P ~*?1}u3,K4rN:gT_X:*XZ5{i:3Sk3.iz!`-)!Fsv9kfXmG1(/?nYwem' );
define( 'LOGGED_IN_SALT',   '%e|`ClAl41l ?&)0AMYRtjeI3p=+$}WM0bvNvN3I2+O1U8?ODJ^8]@hL:nogmjUk' );
define( 'NONCE_SALT',       '|)O@]9hv@Y^%.y!b7F>d+@5{>D^VV$rA6*cQKc1x~<n--1!LxKz>7DaThhN3SGpl' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
