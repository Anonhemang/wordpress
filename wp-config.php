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
define( 'DB_NAME', 'wpai' );

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
define( 'AUTH_KEY',         'IZ}BeeCn1]fjJw^LpNu~Z)RKn|k%pfN&%YE?hy7ts~@Z<9[eE%p%!-R0~/`HfNa0' );
define( 'SECURE_AUTH_KEY',  '+wM[_JgJRh-DHdZ=RiZ?tt=eVjwt)?{l2SNs>JF#;mb47=XpiMK$qZEQ~ ?@bPhC' );
define( 'LOGGED_IN_KEY',    '20+s9vrS-[R,?v/qyAd #YGf2&@QJ-*P*@rNdao(*CRa&BeKGb4c+;Zz J`aeyL?' );
define( 'NONCE_KEY',        'ao-|my4A{}|:6N^DR8KgG5C<{c|[p,U,kHkdK[BVm_pca7^cJ>B;ukVPZEQ< 8HS' );
define( 'AUTH_SALT',        'n(;uV6b-i4>y$A_dJX dBR,DvN`sC}>;lC`ufJL(}G<@lfjOFsVZk|je+<;cdlw ' );
define( 'SECURE_AUTH_SALT', '7mL8`^,uVFm0v )`c%JMd7!?>aai>vJrFpW*?/?.U`bQwp8Hfy9[+YkJvpBN*Pxq' );
define( 'LOGGED_IN_SALT',   'Drg>P^XB#{0ON<7RfnYcgM_Up~=LTejQ6 /&~v}OEzEPG~K/:)Q0sY^WUtEu0-nS' );
define( 'NONCE_SALT',       'Iuz81 AIj]RkrZ_Lx.[1*/!2+8s+a$nJK^E`0tI<o)KO}|/{mws2zxNthBL-/qVI' );

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
