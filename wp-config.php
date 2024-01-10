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
define( 'DB_NAME', 'tamara' );

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
define( 'AUTH_KEY',         '2VZ`+0~@/]/y8%O6~g&%cd^,@`);ce4g];tO0Sn!Fe6M%`+93^V_yQ91Q&23;t.s' );
define( 'SECURE_AUTH_KEY',  'q{fhZ<mVXpaQi-> ^.g:*7kF@(m;QuWs~3>q4<uh=y|;<yM1ad:Fl4D2>eh`qBw8' );
define( 'LOGGED_IN_KEY',    'qXrkI%~Hw0DS=7Ve31 A+0`|VjnXFZ.%8#4rIU}-Gj`ep<*#TEI|QW/I.m^2qOu1' );
define( 'NONCE_KEY',        'HU6bVQ2gyj|kGL}&#F,w:Ow!S5*x=FpT`q)WAgSf}Yc1(r@rkM2AJ@}!Ga@po,<v' );
define( 'AUTH_SALT',        'FFT95u_+R3RIzpJX7R{H:}Jtl9{p$>9y]EBy(tg$f%<`6tNlU`,6Gp3-bd{<PYrm' );
define( 'SECURE_AUTH_SALT', '%y6CU:j+|8(`4FJHEROO40l~Q#B@r@)|W/:M`NWDXnxeyzpK||qSq_!;GOpu_v+J' );
define( 'LOGGED_IN_SALT',   'ppG@m(dF6nu=?mKFs)z)JA1fmX2hEScZO]jb#G^]:a[{3keA16OpVF}wW&AA(gfx' );
define( 'NONCE_SALT',       'dwy6G!ic} <A(xFF-N#?),MYUV7].G$Q$ J[xzJkL|yZf,Yj=:ch8RvemwnyEM%N' );

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
