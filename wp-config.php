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
define( 'DB_NAME', 'pizza' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'qOigf-Ngl2kD}/#!T`3`=[Fq=;KkwqpoUm)bNX1$*U&]>MFkSr[(s!J}430Z}19K' );
define( 'SECURE_AUTH_KEY',  'N=[q%E:eAG~NSds5K;ZHo}w;kF<4g=tm;4uD37;&fi &7cY]Q+d#T#s#p^UKnH [' );
define( 'LOGGED_IN_KEY',    '^qw.ali^B<0;2.]W~R#|3!Xm}]=R;!IEsbMK&SWXb^A<!/=jaXoYS3D(r6~U!&4~' );
define( 'NONCE_KEY',        'LLj3R9&`EKyY#GL&&kl![ 2jNtR]mnWhA9^$fTfraw :I]M#?{MEx;V)Cl<YTK -' );
define( 'AUTH_SALT',        'gA !Fa+-z@ad_FX5,6iOnR&#*ZQ:NY>>B2Gw1@}KIa~=1;4xxB++36]pol#R>:$K' );
define( 'SECURE_AUTH_SALT', ',8*AzTTd!&<o<rQLf)Hygz>H#j!mS{1X,IZ&(KqQ~~|o#(w.l;aM/^6r*2V`}&]`' );
define( 'LOGGED_IN_SALT',   'N8o|IsS[M6@]T|Mo$oC:}MuaI<*3Sp#kdU}cv6Ny?0zxH_3Lh~OOh$);t]zF:7}W' );
define( 'NONCE_SALT',       'c0^}x<RQK|xv$Mb[*UGk0yM3Uw.iJ]u^WEOaaC_S..4zn~W:rrn>!o$CqDqN2n#7' );

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
