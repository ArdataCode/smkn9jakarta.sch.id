<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', "websit19_smkn9jakarta" );

/** Database username */
define( 'DB_USER', "websit19_smkn9jakarta" );

/** Database password */
define( 'DB_PASSWORD', "Ardata2024!" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         '?><IEwjo5asK}#8B )Ky_JA*>A+PeGs^[LLBaA^Yk5^+^o{NC)?|DmB80lfw1^*6' );
define( 'SECURE_AUTH_KEY',  '?*&dAgTKPEFqg3_6f]`*wguJ{vSiSW!]a9Te;L4B[tW4nx8C:SvkD{9y~09Y}L,X' );
define( 'LOGGED_IN_KEY',    '6+I|J]>/.d~>,{5Ik~9>x(:+b8}a5i>^m}|PRSE9.c.iFvly(LYcllmaA0=jR[|S' );
define( 'NONCE_KEY',        'tF4~YDSV35?D1AX->1/B?Z7>kPuIx9ShAd$w+loq{k<5*{#=$1lOPdS_2v.!e%Ib' );
define( 'AUTH_SALT',        'IwN7f?&^5@H[U2^BN./GZ{=HNr!27kl*?;__L6N4[IT!H]1PJ!lIc+4-vRs2])5+' );
define( 'SECURE_AUTH_SALT', 'NO[sJeWf#6M0O{3/yKv[b{T }K+D+gJS?<CeN6!f-Pc%d! ]_pmmoL<vQ k! r1J' );
define( 'LOGGED_IN_SALT',   'p5*#-a5WM0w7kcd;}2Kh9nMkfsZn@]|%v;h!lnRjAE #wCyBAg?s~9Z!8O26XdYb' );
define( 'NONCE_SALT',       'b(/B+n(no qaC^b~K9n?M.Oxi-Tj+Qga,sq+h3D[Un-!zZH6$1@tT-xWUzGj++^j' );

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



#define( 'DUPLICATOR_AUTH_KEY', '$WsVORt3@&2 FJ1BW8svInj}&rw,k#?hkmrF+Y|`nU_PTy`B)eu6/LW6CEG)L8Oi' );
#define( 'WP_PLUGIN_DIR', '/home/u1567848/public_html/smkn9jakarta.sch.id/wp-content/plugins' );
#define( 'WPMU_PLUGIN_DIR', '/home/u1567848/public_html/smkn9jakarta.sch.id/wp-content/mu-plugins' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
