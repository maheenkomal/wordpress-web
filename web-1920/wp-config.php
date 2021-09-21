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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web1920' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'R;qgZ1ad:^aj|Pw{UCm~?6id2HtZ:+zZP-mWQ=@^K?mr/&)3N{/ O 5ZgW|R8o;g' );
define( 'SECURE_AUTH_KEY',  '-5^?f[N,eBEkwg%H/j.>hc_X$Zf 3&uGlQS-aqep7.+{_;Qx5p_g3:UJc()UTXU0' );
define( 'LOGGED_IN_KEY',    'Cb7s`~XN%];sS;-i&{:795->ogyS&_~(D);aVf/>EflIPQq))5(J*!~ ]T6jkzOE' );
define( 'NONCE_KEY',        '=yKN[Cap#QNry]Y<K_$<kpx|-A=Bhci->!m@O9S2@^H0+/aro$[i3rp9DMe9|FL[' );
define( 'AUTH_SALT',        '15y<6dzk#9{E#@ot6y6W0y)GpJT-4Bd-E+.s?NX9oJEe*&$qDIePn^f,,[*z^/(k' );
define( 'SECURE_AUTH_SALT', 'X3XHf(,[:jV3D2kmOzHoZA6zc_#woWuyp-Wwp$4fTW1#~,*kvJ,]^4_Wi-G!r)er' );
define( 'LOGGED_IN_SALT',   '?Tb@X`vUf#9zK.tHl5*wh5O*4{Dg3NO:|3SpnXXP2skQGQ7iCJ{c%/I54?*u[,B(' );
define( 'NONCE_SALT',       '|X4V&SP$cMf47pU#.M DUi6[;3f=kL*6mCEZ@XfH!gR:yW>v .KgP$y*BJOI0E}`' );

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
define( 'WP_DEBUG', TRUE );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
