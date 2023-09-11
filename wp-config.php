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
define( 'DB_NAME', 'kemanusiaan' );

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
define( 'AUTH_KEY',         '7 m&.#F?39M+2M!6S}jt{TqoQ#l`3}$Nr/ }+fQW3BODo4pDBPtkg=B^t9i9y$+a' );
define( 'SECURE_AUTH_KEY',  ':5s55V2Ps_@;#*:<B)[KiBk}yfJWu^mn|L@<V({L`rJa?LZ):c33aqTt/=Q?$His' );
define( 'LOGGED_IN_KEY',    '6(blqY6W,.LbqaoPj?BCZlmr;nk3LUtYn1K3.9JMv&},~JR:{V:n2G3@#1HG#=Zm' );
define( 'NONCE_KEY',        '#-%gIPs!.7y`ZM{0]$KDe=K[3[scY0V; iS+3s(+@PH1xC$`Rwvh3zvCP8};bN;n' );
define( 'AUTH_SALT',        '9M!W>~Sxyw$Imu%OUW<Q;(,4AJ_&QqF.zVZc[3::{@Mm::iSx)wPd|&CTmnj7u*U' );
define( 'SECURE_AUTH_SALT', 'FCc{^6Ev~>@0d]`UqCPf%C0jk<]-HXHIc..Nk}mTJ-R@4KJx;VnnHDJk}$@?`y/S' );
define( 'LOGGED_IN_SALT',   'wFz3&fp C1~KD$WF*BM{4V=4:/.Z[EC(7cSLeh$WdFWm hP`YGj1N7(7LOY&w&%N' );
define( 'NONCE_SALT',       'Os~`Icx5e>Df|MiZFo&VQ3r[x&CTSg7oXjBk{w=)WL6zoA5/q:FZ8]!0: -e2>*.' );

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
