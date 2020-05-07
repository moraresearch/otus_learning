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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

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
define( 'AUTH_KEY',         ' bPB&~WkBNzr#<1ml?Ed@8H)dUj/;mD-S6y0U3Z_2;rB,BE7.PS:=0}Fm2RJjLBz' );
define( 'SECURE_AUTH_KEY',  '#EK~Zzo4[6x_Ji[~ oPL&(g<QcJx8:1lrny)Gv}F>Y&Eu!jmlc:hrEbd2i|-sX)V' );
define( 'LOGGED_IN_KEY',    'kHOv[1Yzz#uRUP&q:UJU]5q%xRD;;w7HuOWiW%l?jc^UI 2JOBoM@G}3UMuSa}Hm' );
define( 'NONCE_KEY',        ',~>z7OTj$FQHccy F1<XMzw6~cZ{#8(GCsrhTp;47)*W[lFD2f[iL/lRb4=cj z`' );
define( 'AUTH_SALT',        '`ZR{2X_ZEITcPaqb;oa`n<5j^/F`1HVYOrNd&0GY~>d&)`2)bSL6Q~p>K&R4Em+/' );
define( 'SECURE_AUTH_SALT', 'y<f5A5w%*CU7()qomYzVYa*;;$~xX:9|wN~8QXC9Y?A#TxWDzRL,/OeG$6E+OR}!' );
define( 'LOGGED_IN_SALT',   'yAHF)n<C!`L[gyF9y).VcWkg3~}V-Q!{g)@kFulDk/1J &9YsMVX#sRo)h(N}b)k' );
define( 'NONCE_SALT',       '_v;l>`Nu.$11Z !y;t_r;*3oQ;o+fRMf{^/KXhymSj42=:c /RV_Kf%n.2?Vy F6' );

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

