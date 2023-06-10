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
define( 'DB_NAME', 'wp-restaurant' );

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
define( 'AUTH_KEY',         'k&u}Q<&WTRSx+w*bNv3ao&l~emi2A3?$L$wf0[B2gHY<@-F$2)ilQ9-;/9FeseLa' );
define( 'SECURE_AUTH_KEY',  '-{`a PENpD;m)*xHVZ<*Rqu6^{?e r<Po.# 4Dt3c/2@cZIHam3u;#O>kWO PLkh' );
define( 'LOGGED_IN_KEY',    '@6tv,%5==soC8RIw4nq3y<,/9+D@Ry*o|&^Cxx!b9#uJm`{`xvaOfFZQYya#`e7#' );
define( 'NONCE_KEY',        'y(<e7UKInxUljk@4$sj$I0#&R>J0}#?d/1)[W9i$yE2l/L1I]E+AO^ddOyli7!#p' );
define( 'AUTH_SALT',        'k+&%-LV@Q/@YjdiPbSxyn.d.nhd$rw(2Ssuia]r5}5J-FF:*o&E1ZLEnl}-$TQ7q' );
define( 'SECURE_AUTH_SALT', '(?N9_W%(H/jqOMVMON=++A`@D9&E=CcJ5/zH(?}HX%I6=vo3yTpiL:X/uy=VT%5I' );
define( 'LOGGED_IN_SALT',   'CE|2F2@@?Z#-UhfC;Ylw+?^L^)I e^kriv~C&g7 6Q)kL3_Uz=S1|}Ue6F_:ag:%' );
define( 'NONCE_SALT',       'RE{+4SY.z3k>+KYu5ei,aR@$8VBmn6eWmR>9en0+*d7h2>36]WD0<jYw/p^vS@@H' );

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
