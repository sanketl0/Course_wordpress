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
define( 'DB_NAME', 'courses' );

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
define( 'AUTH_KEY',         'pJJpgK]x@r|al67#).8Fd&*pT~!Sz:16P`[n~_d[Pt5fA5i`u13o,Ol;G5W,u20z' );
define( 'SECURE_AUTH_KEY',  'G4q!{%J6yT.N8h43+bP;Lw1[;3/7[P:a>l] T_-m2(PI;wYwb_VV,SHnw]:|`Eo+' );
define( 'LOGGED_IN_KEY',    '=~DGGQ-L[Ie]SBWz}6.9DL<es`4L-J`A=1TGIS/YuU<4YxKncDprt-iXV6?%{[UO' );
define( 'NONCE_KEY',        ',QjmbU2W`~3~`B1@@e:)C. ~NR7%jnxO:fn3;WPkCQcF#B=OLaO<jP:aC>,>OdB%' );
define( 'AUTH_SALT',        'T2N(X/SSmD_8tf6vxq&:8?Qne=]?[:!7V|ho4%9vmV!,2Z/r3mxLAj+t/R>(u#[J' );
define( 'SECURE_AUTH_SALT', '_<}YtQ/2I9F=VJDldF)wqpjBS8zpJVEl0 Y4y9+Auo>f<vEDWghIUZ={o5%0&&:E' );
define( 'LOGGED_IN_SALT',   'WGU$*wgvJQ@M|2s|02I,](DN-eF>{lY9:qxL&8!([_]o[Gyso$ Op>/d8Uv7$SOe' );
define( 'NONCE_SALT',       '0KsXd+_+oTR&YDAN:A_uV@$o=>bw}G8?dZKZt%]||!sI!s)x_!3s=t@7`M3* O]Y' );

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
