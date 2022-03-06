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
define( 'DB_NAME', 'learn-wordpress' );

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
define( 'AUTH_KEY',         'b3Vsi5 3C`Y;J4j$vB7*lce6OT4g& X=^l8GSwmwju[=e7qr#O]X)N/:h!:c1c**' );
define( 'SECURE_AUTH_KEY',  '/@`/:$jjeycOs_&Wp/%3X&IeN.g.c@%S9jS5,Kwe3byRJ5M.QCa9?CgJ*DaYaGa$' );
define( 'LOGGED_IN_KEY',    'oSpKw)Jy]nh%f|H|A~rH}IUeW=*APS$@c!B5%9Qf}uEf 7(`3=m3@8j}~yrztYk7' );
define( 'NONCE_KEY',        '+*8P,LgPKm&3y;]()kv2~iZ)O)uTACX6|(nzaG8Q>I{pW,C6NWwvM2_cl(l3w~Q-' );
define( 'AUTH_SALT',        'B<&2|WWVQ 9eYC3&-io$OaEfoyq!&*^##w9?@Sdc:c9EEEq=V&W..k(%%=<ePN6N' );
define( 'SECURE_AUTH_SALT', 'Q9-0CVr@RS~xlJJc(A7OaqdfUHJK*ceV}dm$A^nGi~T-7ek5#hEv:vvc,jM_+2.O' );
define( 'LOGGED_IN_SALT',   '^AahwePU+QQ>@n}Vd$G@diH?8;kG+=6gfR{~6S&|4@,:h$ew-#Ix,J/HJgv<m+~B' );
define( 'NONCE_SALT',       'DX?%8~z5O_SZnrQpcTjiJ {$0:*.K|Ngk&XBAr:*2c6Z>@~d#Kj{wJ0*z}~%G6p&' );

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
