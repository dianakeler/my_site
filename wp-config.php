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
define( 'DB_NAME', 'flower_site' );

/** MySQL database username */
define( 'DB_USER', 'diana' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Homicidal.272' );

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
define( 'AUTH_KEY',         'AFxf~qi],Xd+h0[>mZO8AL^<e2}|-~.]#OfBzg:uKtENL1BHRDfLS!bQ^P|6%TP/' );
define( 'SECURE_AUTH_KEY',  '|ysy#)L+RA3|8*2F s/>3xGd&4dM T:|;J;D^z>rDc|{j%fgC07~Z|[-wY^~PW-o' );
define( 'LOGGED_IN_KEY',    'a20QQ 4t_@v9s+=5 u.!MavU6q#ncg8|B&N?/FQsD6x.1c<=B8*HtN9be:B*=>i.' );
define( 'NONCE_KEY',        'Aj&,rx#p,7 X3-0w!r~CFm]Ho)%@^44%DPvnY{0Kt_u|@4SyfJI=~0U8O:lYPB|y' );
define( 'AUTH_SALT',        '5=uD/A8k)!k9qOE7I;CN<QF0[x=_2B)EO7)r;Xyg?SyF}3wa;fW5>+y+(aSRtP.f' );
define( 'SECURE_AUTH_SALT', 'Jm8c5sFhFsqoRqyLJp_~hN.r&0w&THmmD&hc+0,hh`mgERCaV$Mdt.,i,L1a/l%P' );
define( 'LOGGED_IN_SALT',   'G`rAZ:K#qeupA|y/;15=nPy-:[3zmxWuF+z2[ArT/6:Al]npB5ygFt.SN#&0y]}}' );
define( 'NONCE_SALT',       'rq#&>Dht6|%c9N1Q>ex,fI[+A=%Jt8sk.<DH=#f+epKKmKYeoo!J?Xv?.I5u7iI7' );

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
