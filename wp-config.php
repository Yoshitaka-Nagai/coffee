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
define( 'DB_NAME', 'coffee' );

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
define( 'AUTH_KEY',         'fEx:lI&O2<A$~Rz[-@2(-r)?*UhtIc5S)-wh8&}yT_d5!4_MrS`IQ]<NA.1%p!5f' );
define( 'SECURE_AUTH_KEY',  ':iZL31vlAjj2_7kOYZR#q6!0Ao~(h`a.#7Pb9A1k%7X#[Ac>4S<-9WNZy =|IH4j' );
define( 'LOGGED_IN_KEY',    '|sH5;JBL.x?+::^p!Qz}lj>^3><I(+.Mtfmtia`6}?AFcCy1*yZJQJN?hk:zp5M]' );
define( 'NONCE_KEY',        '3v{+xzC3Dw7r%cNw-eu$;!Ll.FW+!;`PQ=Tmj`9RC!c%J3g`c=^uXUJ.F|Z/`K4+' );
define( 'AUTH_SALT',        '^L@WS^yFD!2tScU_ 9%+*f83FHq]fh2e1P!iyfQwJ=z_7V$&1B`mQ)it Pe=UqUx' );
define( 'SECURE_AUTH_SALT', 'Pc(;tI^dJV><pb(1#:2=/E!mXyj=7z->CyH|eKHxS2`HxDX-M<.^q:yG`t)o?u@Z' );
define( 'LOGGED_IN_SALT',   'DiW?W{K%pM*2iVzyF6S/&Z_.(JDKf,SrB,`rXin$9h?!Ji[zzcN.&S#&:.z$?@9o' );
define( 'NONCE_SALT',       '6Lg.G=|K*]*Ito1)|_mGe[m]_f#LR`IEpESO_mS%{SE@7Sf9B6)*iMxl7;^&zDwH' );

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
