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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '7w32<ym:*]98q[6C?bht1I#jBS[jL-lgghe2o`1EZxf+#=+DYXQ(*1V)ITAdB2,1' );
define( 'SECURE_AUTH_KEY',  '<E4{x 18.o_JK:LV7!}ybog3Ah;9SzYw KGP>vAX48,K2@_[=jWOp^nR*m0L/,jI' );
define( 'LOGGED_IN_KEY',    ')HA0meS!9Kh4wd*ANxwn0Txu[qa4InrnCr[@Vx2U#~&Yl!#8.}wyjW;9^q&jquCR' );
define( 'NONCE_KEY',        '!o>(@`tNgFFsP:Grp}K:,{#o#2D$Z[+Qg4zsPv!msn|Ss,u9iC_~F2ZwKpn`s@9C' );
define( 'AUTH_SALT',        'Ix9eT`2V,:ao$,G1G>doq:TZ:y9D:SEZAv@XKV.P?E+WVk@:P<2Ftq 6UR>g<Zaf' );
define( 'SECURE_AUTH_SALT', 'O9v4HQO+pBsvG$-9<UWvgN~z?v26{yM`l:MsjP_Qe/NOYH>qn2vx<$!c5=m4J7AZ' );
define( 'LOGGED_IN_SALT',   'IZlf5Qs]~e):u.E3cm>idQ:GV0n^7{@(I(RIzaDauV<A[Y;roj#fy##w1E%: qyR' );
define( 'NONCE_SALT',       '#B||}.BZodF}-R}4]m6-C3qke<,H&43<1gUg7s@a$H^y@+V)yJJg*Z~i!:/s%lG;' );

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
