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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'G!~K!M|Cx}GoS?xJMoB8PqY-X/!a _R[6uyIqOwx!-dCVg:(^U7UAs;$ns*puYyn' );
define( 'SECURE_AUTH_KEY',  ']>OT~(W-_|jOOv>Gg5HMPm/Xk.[dC)Pv[,qeZmG]zk[=9v i Cfid7*D>DKT6MkD' );
define( 'LOGGED_IN_KEY',    '*xV8=(CkC$UXE/5nW8%I^G/YT# fqjFw=uF=[9|L))n*5v_Z;n!A$zg`..{MRxu)' );
define( 'NONCE_KEY',        'D`hV.P,QhC2`SxVjo)!0(_z0K=bOjh[w_f)Jm,q{S)!(3oc^7w|uKun5]|;B .73' );
define( 'AUTH_SALT',        'EtKo%C^qKZ/j(2A/k^K`,,>5Vm>@O8V;Dgk!tc38uv[m#Qs0os5:UnDY{=Px%9W4' );
define( 'SECURE_AUTH_SALT', 'F3]4ieb*X{peJmk#B!X {9G:F(N=~u932BZ,SwF1@p$pR6gz .hV:gwa&__E@DKV' );
define( 'LOGGED_IN_SALT',   'R;kq-hVd5sV7*R;Dyg%0fmOZ9%sS+#mC6)FhNMg-qf6T58wp`)zZ0K{m<-ycb>ax' );
define( 'NONCE_SALT',       ':&d&%q8Oh%y}=38w:j-M)AW!#I~=W/cJSsw$Wkax;?K1_R62VP=~[?C&mBA@*O&u' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
