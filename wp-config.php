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
define( 'DB_NAME', 'wordpress');

/** MySQL database username */
define( 'DB_USER', 'wordpress');

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define( 'DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dX%V-UJdb|B]O*3_{ie}-AH9$rGwiPNcE=f_lx3=j.e?9J]U}el&FF0jz[L#(hig' );
define( 'SECURE_AUTH_KEY',  '@mt82j,C~6)+pHNIgi9P6>(66x!,#vEhgb%8E:+e6!#@1YYc3W+$)P]j&, {w?Sh' );
define( 'LOGGED_IN_KEY',    'WxnCPa^aEUp=!U-8k4EmF4k!KQs!P~NKk.:$Ynf_;tk!Rr!DiFvXVBzHgD,7)^o{' );
define( 'NONCE_KEY',        'ax=R$4M9Y0<h)0oMWw::<[VLag2ClH:ef;]k1_7#B7K>_,<LCY@oO/+kD#+[Msg~' );
define( 'AUTH_SALT',        '%B^;}>D!P1yeB`*=20_ 9afU~!F)77Pu2NV,dtY>6:^W+Zs>MIew_sH-8b={j@-<' );
define( 'SECURE_AUTH_SALT', '.J@cYk}I_^AjiF-6fH&2@J]+n)G9yzG/2-N=``gUbQuOh{(p]0GAyO277W)Q@,[d' );
define( 'LOGGED_IN_SALT',   '!oK*k/hOK).m0|Rg*nY?}-]6UGArzAE;kw9!:]h~M7C_MzO_4X3+GReP1>XzmM^y' );
define( 'NONCE_SALT',       'y~CkzM4e6YsWUHV,PVTk@w}9Re~o]qNh!eitYC/:){$.+#@0W]h.@lPW![-1MIZN' );

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
