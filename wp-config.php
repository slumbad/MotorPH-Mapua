<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MotorPH' );

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
define( 'AUTH_KEY',         'gEM0Gals7q/ic*k:gT}=aNy%TIUw0eZ qO<Yn(/XL})m]E{,|xm[SwqOe@0/][7i' );
define( 'SECURE_AUTH_KEY',  'MuxGhs7d :1**v+4=y5GICb<Xv|$L}vLK_tRFUC?A=O_.ba}sgqXuYg>_q:xasn>' );
define( 'LOGGED_IN_KEY',    '6%$0?ZDMyjG$<my)?02P2a2--xishiSDUh9y*W](WVs>.Y7~t.Q.3 WC(UUh{:Be' );
define( 'NONCE_KEY',        'fSMX,a7B#<%(o]J1e(+o_?Y(^x?S-<P>n v>tC4v_V2<,tX3(H>MG393[<-V5z[x' );
define( 'AUTH_SALT',        '^]oD2z>M%3sp$CPaPxmJ2or^JT{Bf3ZI%PBicXYD:I4$5 (^4.E4Q:,1(pads6qH' );
define( 'SECURE_AUTH_SALT', 'U3ET.9$S(kAeibELJ;9Z)Qp*Fo[Y:1S,l^g!l/ IJo`j#GCaM9YvtPwFP/Fq|}VM' );
define( 'LOGGED_IN_SALT',   't73de/+d-21vR;y,^xk~H!PG`O},R~Ge!w2;SGHV3:3a*MF42h<#WMX8wUhtS)TB' );
define( 'NONCE_SALT',       'MCSKY^f^eTQ4Feg?Jt+kL4`/*Co#q3E+&.n%xC3>|OUt<u,2JbExxLV^&J=kXqVR' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
