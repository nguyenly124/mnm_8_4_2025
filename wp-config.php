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
define( 'DB_NAME', 'web_education' );

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
define( 'AUTH_KEY',         'kT{dhu19DFz0YM9t+h4l38K@,HOh/nVy8pX -6IbF>qh;DTs*VKDRYc}c<UQQ$eH' );
define( 'SECURE_AUTH_KEY',  'ZPA+J_+@]qE+gKD~^u#6%iH8vJ2V=g5FD`-SN)3Xngr.J:eeb+WG,h|PTAY6/z^<' );
define( 'LOGGED_IN_KEY',    'ifySlJngmY!.dk6[fxX8ZVMtKlFEe{Yk*Q0l~T75aqH$ZvdM>&+;^g #$Sx$q/r;' );
define( 'NONCE_KEY',        '~~iGOF{nSt8]>aag7Jj5[)@ErNAy!4<dTv9(2{pyd6Et h^n7,?ZMvn lr_g%h8H' );
define( 'AUTH_SALT',        'm470?7$d*at6zx>%POi zLACk>W)%j5W%T[dYG& %.Xml50aws};>x;DHF%/(n&,' );
define( 'SECURE_AUTH_SALT', '44+hwPxG9kVj(}%8)1]>p#GjC MS{ixXVD<Efz!B8Z&RNMux|ntgL<,:G,FA0Bn^' );
define( 'LOGGED_IN_SALT',   '[!)K{?gnp;SWmQ1Z84/H^9_,34;Uy6U,~!NuxHdcL([b$!S<A=;O^3:}aTt|xZ!}' );
define( 'NONCE_SALT',       '6>G:tHcH4%vs@TR78Zrm;UoBjoEE%lL|_rMp*kRYv*N,g6gf7hr2F(8Zox|,>+8>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
