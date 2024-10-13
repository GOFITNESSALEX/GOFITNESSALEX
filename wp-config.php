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
define( 'DB_NAME', 'gofitnessalex_db' );

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
define( 'AUTH_KEY',         '/3)cc_!nL:y0%(|)O;t}iU/a }6KPV4y98X5a9D:TT89[#eb /O|+xzqUuyhx}:C' );
define( 'SECURE_AUTH_KEY',  '9gkC!|:eLir2O}qP=`cMdpp$Z@i#<tgQ}k>8Y/L:5^xe>x[k}ZE1Z3YyI/;f^]YO' );
define( 'LOGGED_IN_KEY',    'jh@wUzOH!dPmV oCVV!0A$Qq@f!bAU9,}B^Y1p{2!sS*Hwq?pnu&0;hyClve5x5X' );
define( 'NONCE_KEY',        '9F3aq(3{e`d1yH8G:*D|@< tZ7aXpy;pPRD 525?p!L2x{1-y_(OBO|AZJq6LlS#' );
define( 'AUTH_SALT',        '2tuNIB1>;/ e3,yCvq1#/j,*pU<si$nBr9oTV~>4E^bv6*(tw4t&B/S~VWTE~)1G' );
define( 'SECURE_AUTH_SALT', 'Ie~gjm]]HIT..nVXa&LInHB9L]zjFiNMYWa;!CaSaK1yiD>X-E|A@x}oXo7Qa4E5' );
define( 'LOGGED_IN_SALT',   '^U^:=2edh$T&8%|WN?tpW$bn]b!+OaKu8(O@ vbXH#^+SN&<:o_<n<.]4-i2#^rX' );
define( 'NONCE_SALT',       '8<3G}WqD~LT?]k:#ziX3N@Hcq]2y_4FRCD{]768x#JsmFKQZy-_nh=V&LzqGc2vk' );

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
