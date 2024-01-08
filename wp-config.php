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
define( 'DB_NAME', 'mytolcmed' );

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
define( 'AUTH_KEY',         '2XO@Ecu|:6X7)SLN]@D}lCQW es(]Fc-3Odx-iOX#ft!n;t[z(0+b_,ZS[U*1Rk4' );
define( 'SECURE_AUTH_KEY',  'Fcp2K|dtyAb`yRpdvnqnrZV)*q6]DBti.B1}?y.s4|,+2FI,e-(my)2e/50+b^A@' );
define( 'LOGGED_IN_KEY',    '7^NZsRM+}nHYQ?Z~jj1);^Ga- i;GAiuF%Rv1L)[xfCrL4^$dbp^pb@-,5{a=y24' );
define( 'NONCE_KEY',        'k,?>h~~1of;;kGb4?nF/L}0qZ*Qza_F<gv7 /344;Kr{YXskLPp47|QY4OGOqRS}' );
define( 'AUTH_SALT',        '1LG`vv/}(p?P8u3;|IQm8WY1!_-<n;57%%m+Bb<lL4u~PW~|iI$UJZ1XB tCY5Nt' );
define( 'SECURE_AUTH_SALT', 'OCze-tQw+Fe;o{$!l#i(UGh_1MG_ma<Lovs]Fx]:.4GC6!eVt|M.f*tO#J,qLD=m' );
define( 'LOGGED_IN_SALT',   'GzYK;SYS3oo{bAaii`~@=gL3YCVCg0geBAw6fjL7t&8!&aF^C00ZsdlSV2+rem[z' );
define( 'NONCE_SALT',       '$-Zu@xfXw1Jxk_f(=>OID_jv.X0~_js22f|;IrN5}PVibr+;r9+^^.`E86DPJ{4.' );

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
