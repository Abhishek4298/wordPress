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

define( 'DB_NAME', 'theLibranHandicraft' );
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
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Emsx_SQMfu@V5Y7|h8pF$6ShRJzH=P!U>X-wPVh`rUR<@SJ5wohr@X@UKNwOWigq' );
define( 'SECURE_AUTH_KEY',  'HQW)`zGCpoJ&/j}zc.V~*;rl)?@S*]PE7c?PO$#VM^e8p6@nm~:XJ#?&wUzVQv@)' );
define( 'LOGGED_IN_KEY',    '/t%%|_3>s:a1QDgf2Qz2w?FBYkhECr+ fx$^gJ[nuVFdB[xBsWg~S5P.!EKrYip?' );
define( 'NONCE_KEY',        'zdF&0Dv{x3)~6c46Ov@u&Ya?*gJiG@u2+Ld`rIQy+xd!My0XTZL4S4tf3|Z~e*.;' );
define( 'AUTH_SALT',        ',Evg27&1&]&;yvBMueuvb_2#(:?MC?=ZOEAwbcU,;0<&4]u-%}JZx:4!/9_y4.Ye' );
define( 'SECURE_AUTH_SALT', ']ObRglJDbfi&!,m1Z|rc5&M](>Q~4QP?>6m,^w@dJ[CnbBT)H*m,;b=*OY,xZC,)' );
define( 'LOGGED_IN_SALT',   ';Y)a9n9&t%eRCONv[b-d XE^{lZMS{|@S&C%ESvo5H1my8hdC:|hdoAdLV7,H)ii' );
define( 'NONCE_SALT',       'F13]Qt5]^pt.S6lbEahlF6J`~8wjr:@P0/}atkZ_K<]{Lnnv@Jkg]`KfO!&*z91J' );

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

