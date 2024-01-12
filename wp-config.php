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
define( 'DB_NAME', 'devweb' );

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
define( 'AUTH_KEY',         'KUK+TP;Rjw5W*q&,w5]~$di$nPKWVD_MU|v;[s:B&e:`o,6?EgQ&d:y QFV@5vJB' );
define( 'SECURE_AUTH_KEY',  '/pWMjhLc:pG?ybXTW@[vNB]5z;~g,u5jAObmE%3aB@q~ DyIGMqTMYcWqH^O<Wom' );
define( 'LOGGED_IN_KEY',    'zW|(|,LZDdPzM_H~LKb=_w,E#5aUCty?@/s/&NP{&_5Ua&%Xh>.p8gDO</tQ@Ihy' );
define( 'NONCE_KEY',        '{e] yB3GF3x!*=AS~RP)XC=1,*q].<A]_P?plmCn5}c+Ig%MasS^|d#$Udf2[$ik' );
define( 'AUTH_SALT',        'X(E*4>waV.FsO!-gA;ZY~|o:s_Aws&6]N;H0w fbS?SJ:W%X3lbY^OR82X>PKvL8' );
define( 'SECURE_AUTH_SALT', 'yza,.>C8p)i{$fJZ;eS7?oGUPTD%tk%:x<o&B(qt}4R8|VcSZopae{Ee$5F{w22d' );
define( 'LOGGED_IN_SALT',   '&wx1a=?#peJlISsZGl2EEY-SMf53R*;on^W|D[0.~/i-NL97@,e%YOws~o7H8$83' );
define( 'NONCE_SALT',       't{w2M<0e&09!an~ui#8=>d+q/F@TJ( @{z4pf%{gX8=8@7s>FX7v9Q;6m1KeB%|5' );

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
