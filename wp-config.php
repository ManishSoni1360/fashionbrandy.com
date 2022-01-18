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
define( 'DB_NAME', 'fashionbrandy.com' );

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
define( 'AUTH_KEY',         '`^e=d][H sZXfd%4{*>msq^&/e[GCmr*qDd 8F5B<Q;g3Z:CEc=rDaSq1yG&SdL*' );
define( 'SECURE_AUTH_KEY',  'fW;WZ}mc| Ktt4Cw3[+.u=4Po1XQWL#:mHNam}2?][1c(sJ>Gi^49+4iX&b{StQe' );
define( 'LOGGED_IN_KEY',    'WtbNm/[kH_RTfH^OF1?F7P5Fc8-#nZ0tI#UpM`2c7fwg%!W#U69<[RZ*|yIM,Vix' );
define( 'NONCE_KEY',        'ym,UIOH{,KQPd`$#z=tQj+%GEn (v3(JXp333WLbm$Zk(R)@8NaGb z]31GU2jE[' );
define( 'AUTH_SALT',        'FBL{8Up9J4 s3]QKW4$9FgAZe,Hj6(kT@c,:Od?JG`8/^(R>|Fp^OCOAL(QBkHoP' );
define( 'SECURE_AUTH_SALT', '(hf%VgD}I~{|JJ)kQPVLq^?f|k+EK4X0fL#9ax-@#9 Lkje)r?x$s7x[s+5btK9<' );
define( 'LOGGED_IN_SALT',   '|#z2P^e@*w9Q9E]:ruZ/ ^C)vjj|@0BA^DRL/9YXYDnFRPA=PDI6.M 4q~{8/rQ ' );
define( 'NONCE_SALT',       'ffIj+?u$IYugOde0 45u&IBhQ#Hw2!D,U;J7JZWpd&J$1YQm3wVa@SZ>Lr>pBZY(' );

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
