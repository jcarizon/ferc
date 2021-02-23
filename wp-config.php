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
define( 'DB_NAME', 'db_ferc' );

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
define( 'AUTH_KEY',         '~~Iy%HRvDMw.H*#t[9w2WL[|VTRO0C{Xdx55U|+`Y{)wzeryyan+|b5R^jP?a|/;' );
define( 'SECURE_AUTH_KEY',  'c%AY38?rB@d;d(_W2C@nz{u&)8L*K?O.i VlKHbe<c~,{@$eQ8@0:N&Tj$[[u?`d' );
define( 'LOGGED_IN_KEY',    'uKIj.o2#:r^De]57 r5^]EjD7{35P^SDKEK!6FuR`zX_M.nsp8*awHn.Km;kg&o)' );
define( 'NONCE_KEY',        'c8:Wu^0sS3ovTi#lh~{jqj:i`^%c>O8p|@;oSq~eyOS>U?KVu^,W@]2FmUv&^$~o' );
define( 'AUTH_SALT',        ')//<0j&[bkavF(rT7~IIAL>q5qA.YciU}Kp/3%#R>lm65x?T>26/rW4TAO*9B+x ' );
define( 'SECURE_AUTH_SALT', 'tT30(bpxGm8 $BYL0B}F/X_=*I>PCj>Z*O$L7 R2dp58,S5-#F-`3A1<I6HT34W`' );
define( 'LOGGED_IN_SALT',   'SbJ)Wk}F-;^:CZz)E&M^sio<6;c3$+!l%V=B@!>4u8mM{xm?+aenCx#lZO1(Ku~B' );
define( 'NONCE_SALT',       '>JffG`*3{R=91>HX<fcT9C ((x9n-}x#)_C%:mo>$f6JM2)J:1Dmzoa*W-P$i~]H' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ferc_';

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
