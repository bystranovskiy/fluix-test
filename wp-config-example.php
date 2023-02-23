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
define( 'DB_NAME', 'fluix' );

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
define( 'AUTH_KEY',         '}X7{:]B$sJ58}$/FC6jaOYPK%-4Z8Z<%5m8Ed1V4nkj&,x[8B5d(INxHi}W&[@5Q' );
define( 'SECURE_AUTH_KEY',  '1v,!:=b/F_NKNouj;tjdjwGsr3eh.6-h.^<Je8<6h$C|puwqO 78W|F[%C_%Mcc^' );
define( 'LOGGED_IN_KEY',    'Q^&)1OL8$x)]J hOI+.975M#?V3AcAU-C[w@tG(lg]FEcx&0;xNC%dMuje3J+[X ' );
define( 'NONCE_KEY',        'PzN~+Ms*#:>#x3lc%)&q(2SbuY~mG:cmShjJO`cKoH>Ra1bs$IKmtWle}*q/fYnn' );
define( 'AUTH_SALT',        'L=Wn4)NBN;`(wW=k[jP4cB5l=WHbRrW4j,n&I~;E}PSucSv7u>plG]biGzT%]$Ti' );
define( 'SECURE_AUTH_SALT', 'uCrC$_MQvP,Iot!.G(;%3Hl6?O%@l*^;P:z.]xZ.[f>5M2Bg<Nz]t-F}BM3C3j@a' );
define( 'LOGGED_IN_SALT',   '|[)@ !GwLuTBHN|eZ7He+EcUY2`?6KWzvuUtSjf9CSUiWtXVc:j!G,hlxINp`t8?' );
define( 'NONCE_SALT',       '7}>FPE=4E(<rvc.S7e/*WLO&k]-E6D]=/EN?,a^`-%#:pB4yndIUK=c~S$IpCX~Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fluix_';

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
