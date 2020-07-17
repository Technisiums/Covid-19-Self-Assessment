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
define( 'DB_NAME', 'covid' );

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
define( 'AUTH_KEY',         'njp)<]_pg}`UY_-+lFCXX@$HNxV5a]|,uJrEOd:EtMr<+P}B^=OD$@agf._UMCgG' );
define( 'SECURE_AUTH_KEY',  '1w.2jG7wKBZpm=5aCqD^4F~$~_D;A!{EVtJPB%!|/V[YUH;;I-nNPn~627V24^g]' );
define( 'LOGGED_IN_KEY',    '_fV1P#FYhe:)t}b2}L<&<Z}R|i#[8`v;v([]B2+]mP7.dJrYkW`m0^om8Q)]XyG=' );
define( 'NONCE_KEY',        '0Q9ZY(1[-&lJy&&S|pCz`Ul6YoA$*+_2,hHBGQz[{`wro[3{qOsy*lrfb<ozq1U<' );
define( 'AUTH_SALT',        '8aXj_,`*(SwZqjKtw2f36!K0Q0._K:.L3=YMJ0LyCC1PVIr8Y$;AG5 }EU03<Rif' );
define( 'SECURE_AUTH_SALT', '*v@8fRRSFt@*W2SZJH]Q;6F!Q/;uAO@dyHgD,B}[Yto_|Nu U-5zHAV^9r)#))tQ' );
define( 'LOGGED_IN_SALT',   'Jkip33uo.CUe s|{$k#y,c{M6L}R2@][TDpG9AxolfUtd++#xR_4-6E5/Nn/*]*#' );
define( 'NONCE_SALT',       'bP.hRj[Gz7479.FU[spt5_(>j38<H0ep7MBoq2|{o^tg::Qk2Ey*&in;E/i=)Z.P' );

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
