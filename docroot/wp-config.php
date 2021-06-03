<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'default' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/?o{H~%JDF&nM^jvL~]wo/G@3xwcDU8_Q$ti5YuS`*%k`)tRb^W*r4D3{PxFM/Rd' );
define( 'SECURE_AUTH_KEY',  '}e<z jyX~T69iS30,OqPa8{ieoL:R?I<b&shI3]2$Iubg(NMKrfmTz)F3k4 @g0C' );
define( 'LOGGED_IN_KEY',    '-M{) {CToWN5on4C$wo:{n0;g?[Oh<7OW(@eXDA[v.mUe)F ]P2/MT!gUJcd%A&/' );
define( 'NONCE_KEY',        'G_/*Wri5s>|la1XWXoz A1_M`@UxWgH)3}r{[g-[RG3?)o[yW^fJ5E@Ut2+W&#?e' );
define( 'AUTH_SALT',        'B/{<(L}e2<!Kn;fQe6eC6,#/WsNSimT54iB|/{F$?9&#i!{DZ*C*W;_(i;tF-=sh' );
define( 'SECURE_AUTH_SALT', 'v#cq][t$uXdZ`x`k=$B^1+7ic@s,mqp)>_v^T*7]Gn?JZL3#j<y)jJGp74-b&9Mc' );
define( 'LOGGED_IN_SALT',   'uXLe#:C<Y+|~|iE[6W.8=+}]D)OkqDkGU$QGj&=G0~Ij&HRM0U{YoTA&eJ,yk=D_' );
define( 'NONCE_SALT',       '?sd-o-!1/J<w9G3QIV6s7g9mr^c,Z6;fjb6 +aS$^.T,%c=c|t_#oI@h9&<^ut~D' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
