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
define( 'DB_NAME', 'wp_site' );

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
define( 'AUTH_KEY',         '=d/VS*m-d2Veg8$2Na}`~f:4sfxK<10jTV}`]JujYU 6}L3e2+%]( ]4Sa!fAI$f' );
define( 'SECURE_AUTH_KEY',  ';GJ~/l%h%6Ns)p+<F>f7vp*1Din]IA>L>[y[.dsIzh+*9xPKQ>+|i[`#2J$aj  8' );
define( 'LOGGED_IN_KEY',    'qM9KR#jbl96F @s.X}=ClgG2o+^&.tG-ZsS}P8t+~7X) e@hdf:qI8X,d7Jc2(Wz' );
define( 'NONCE_KEY',        'iek$0&p{uVLonT&mRE/D*M)@p@[#/t:`6[^R>;}`F!lAk=<{C+D|k$OAZ1Ck^.)4' );
define( 'AUTH_SALT',        '5U.1c(&K8(/1pQhUzN`]9#Y;#=:]!YXK6,Sk_E?Zph]&;${u3TNy8,Wt8o&?w2t4' );
define( 'SECURE_AUTH_SALT', 'nbJq,4S-u*PFa8&P4KKkd R#1m}~gT0OtAf6N*=/-!!262eUGXjtIG`t7M`6}Al[' );
define( 'LOGGED_IN_SALT',   '^fN~s>lhlEjDCP>`f?s_M^~{45REU,ejw4F?e9|4i|$*Avn`#/J:te[T3C:zUyu$' );
define( 'NONCE_SALT',       'gDG>qm}qu0f&aV:dtR Ut16c_7{EwTj~iP#epB&Zw<dCoIHW*^!Tn2=}`haG K$~' );

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
