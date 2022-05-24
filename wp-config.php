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
define( 'DB_NAME', 'alphadiag' );

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
define( 'AUTH_KEY',         'Mr~qB0Oh&oSLk*!U+9YZ;s|6wi!3,?%;eP2(%:uUIz9C>V384e:G7)Cy#5WqiY D' );
define( 'SECURE_AUTH_KEY',  'Pw.&Y,jc,ha6zHWl<l6;euDGEr*P2KZeUm=J:kB=~P[;b2@[i H,E<PS7tB4G({i' );
define( 'LOGGED_IN_KEY',    ']FVL&f*tZ(:mG_ ja( oDW@q}4L`y,3hF(qq`]huM)T:3XUdnQ:OaoR%Z>vt:ycJ' );
define( 'NONCE_KEY',        'PG64tdt}DZ>JJga,wPl]+?ij<523)?J},6F*Dr@f8v^N+G|>O/8h])B0J<wyHFEU' );
define( 'AUTH_SALT',        '@~a-Go:?B=Qa=O2.euNkKh8ieZ$f7|_Ei)C/MNAjg3X#xA@<~qlgv~ijyAtYM0jx' );
define( 'SECURE_AUTH_SALT', 'N,D3ysaT2F_9o-vs[ QB=lcM:f9;6^*}SZ,2rCjJjTdRcshEz4!{$8]JE`N}`!,p' );
define( 'LOGGED_IN_SALT',   '/!#}]5L8yS Tz*Vw`_1(~4^_7$G(XC~{y9Lt$d;K@Aqug[;`j-|4A|T;t.:B%7Me' );
define( 'NONCE_SALT',       '?Gj/yqKMD$5{5j~LV->Z &a=#{SRn<Q,Sdw726v1pa*;}Q70H(<>xQ3*>aNBA5Cg' );

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
