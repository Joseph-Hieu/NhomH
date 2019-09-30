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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'UQaI[BtKPQzM3KS0gFQ[cV*[ hNx!+K)60D_KPUdB]LB&h:EmxQmc6Uoi&0ht1|r' );
define( 'SECURE_AUTH_KEY',  'xOz?pbU!Y~;1wZ#RU Cu(7k`~g9/mXG(O^rF^K*3^OIyWZ<e]uXHkRfHAm;Y0e-s' );
define( 'LOGGED_IN_KEY',    '$UE6:xX>t.iyHJa1w,NGWWJ)P2$%ntV-t)F0U)56:B40h@qfY[.ZC]VHlrl;#q6t' );
define( 'NONCE_KEY',        '3sE575WYfYq*ETBxFP0kl^Okf$ @}T#&d:v?;5y8uKk@>578D=.iOe!OcGe:[_Dj' );
define( 'AUTH_SALT',        '2(Z@9vq5c,$AWXYCmv!?Xpkw1&FPKBMlw.p;#2h4oreF3t$*a3+n|0?!ucQvpAZK' );
define( 'SECURE_AUTH_SALT', '=[LVfGiw3L:1dR8drI;Y5X_EL+kIe+c332(T)hXkhjL&O26UO!=Y6jTNC_IUd;`g' );
define( 'LOGGED_IN_SALT',   'YZY.]s2a32.H&6fyWfmFDrMvX/AYY/Rc=r![>+<R=*&g-d=Lv4<tz//%FC~9:bc~' );
define( 'NONCE_SALT',       'tx>4$GYA$B$mpWh%9E9bY6ki?]3W701H~J7+UdW:8v}< f8.J-@BSv^7D lK 4^B' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
