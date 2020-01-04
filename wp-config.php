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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'uoqK r32>h;)891W78BSw:&1C~3i:#H>@$:-FKNn@C@djx({Cp0JLoB0&V&0mysl' );
define( 'SECURE_AUTH_KEY',  '{~%p3M=)ut%NcSJGd]0<JJ(ZW:<nS.IR^>k)t7sSfk!dUv(6 zINbx=,cu!$ZszQ' );
define( 'LOGGED_IN_KEY',    '8J7RTSoiGWnI#t8lp,@hOG(Rg6/)pP;[y*rY58Qp:,K-%T90>MzU=x<]fvR&H@W4' );
define( 'NONCE_KEY',        '+|HyZpK6)TPhRH!-=sChoMnF{|j;!!kI#|[^U9-K9POHL4:rJbJF&io#3Pr)R?q`' );
define( 'AUTH_SALT',        'Sr]9oXWG2j%lu7Iv:Y%I^S+A6wL;TA9w!%C*]+5g{S{BNymwehI]BeT&fN6_2R=G' );
define( 'SECURE_AUTH_SALT', 'JmCpX_aO{?76?sA3?eYB*Sc`(FcpRi]Ai#omz@$}Jq!d!R#L5w58WhS%{taU[}Pf' );
define( 'LOGGED_IN_SALT',   'KCMwpJtyCf+dqa^J!=_3Oo0sMR_J~C8{m`]]r>]2lPC-@Pvw]w;PCqEZr]j_=nRR' );
define( 'NONCE_SALT',       'ZmAY#+@~W#nx?H$`>=KaEp9VMn*8:Q Y~d==W|yYU){!*Y/0EG0L@iLzn3xHkTyy' );

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
