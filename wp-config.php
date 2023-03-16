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
define( 'DB_NAME', 'signal' );

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
define( 'AUTH_KEY',         ';#/Sg+XdU0.KE6!$Ank$45eRq+4iGf!;eJU[B)*iFDKaQ}^g3NV9lvY/:WE$qn3`' );
define( 'SECURE_AUTH_KEY',  '#m+34,]VE.6${SVn<@8${eg6&Hvq+SIrEH;6Bd_G9n &@4sg$oAV^K!(=$,g<|,v' );
define( 'LOGGED_IN_KEY',    'WxYP3?e}G[MbC.0WTxAp?UV=vuxTp5QOb{]je:klEL;T)F[>NO[*VGK&KKfZ=s!*' );
define( 'NONCE_KEY',        'Ik+)225,/-C:jwqbi2 j+`Z<Nbt0u#S72Ix%@l|[H!`>=jHOF.~fJAGdM5:=C bP' );
define( 'AUTH_SALT',        'oW5YOQZ_/G$:MCBY*^ov7i~bc/X/e0V YJIr@%jxv<`NWo3 &q:v;2cmIi^Ku`s[' );
define( 'SECURE_AUTH_SALT', 'Jwgn_rt$E0p6Ah{jjjg5%K?)|_(*Xg*XQTSl=HS7U[xca3)v,)Iv5NVv2+R4fQP4' );
define( 'LOGGED_IN_SALT',   'l0q!!l70O|gI DV4b$M9#bUya{:QbyM%WhuU?4 wgP%kPR|u@jAcfm){bR,(LQ^/' );
define( 'NONCE_SALT',       '$R4/_3]*d|3Co6!@GktI[H` S53Vo`O=jo(&;gt.p4@8e5C=aePOkGZFf:&GW_n#' );

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
