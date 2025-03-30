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
define( 'DB_NAME', 'furniro' );

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
define( 'AUTH_KEY',         '>7Mout` cZUFyHIf:7>N@jJ&LS9$}axI0J$K0@zhQir=28>_r4*3~K@A;L)FDcX*' );
define( 'SECURE_AUTH_KEY',  'WU7W$~#Kcfeit?8fmi0S5BeM3+ N?x^4E8I=GH0$$3XjHxgbduMLDM<AEg3zx9&/' );
define( 'LOGGED_IN_KEY',    '+9P+b}8Wb]32j+xD8)`_`nI^%yv}6?7~P%x$pr5U?qrgyVKg(#8F*oa&$Tsx%wns' );
define( 'NONCE_KEY',        '51f3o}]T;?;oq$$5 =YwdZO!vGRCp}ozh2=tk9pl9o{.0rmqkz@R,O<itd@~l7h ' );
define( 'AUTH_SALT',        ',T_JR>=&DlJRP3pc3qrPSnVrhfM!m!GF$yI$%L{ylh(sSFQjZp3[/~] *j!E+JSv' );
define( 'SECURE_AUTH_SALT', '0*BFZ@eW?PCT>anzqWGd!dg_?D@~1Kk5?~hVA056 [}p(6syDr!?Ii88Vu|H%ph0' );
define( 'LOGGED_IN_SALT',   '.tE~OH!/HCH%D1;wWOY|M}wKxI9%#M)M4brv7oOSE $%#4O[DMV-9xuv(Lw<dAHv' );
define( 'NONCE_SALT',       'QS3P)Si,*R)k<SBQm7aei.phs5{q/XPqd-U+Tnb3wBr!^euSMhP<eu(X;B`kC.V-' );

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
