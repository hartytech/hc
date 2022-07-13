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
define( 'DB_NAME', 'wp_hc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '@r5U,kgUCfQirr#yP;i_sw-X*u1P`<}}lr!nz^gWs3BO-`x`Wifm=TN;$Zl]<=NE' );
define( 'SECURE_AUTH_KEY',  'do9AE,1Q}q3m.253S43W?JJ$|$ytVZB$JYYnq`] b|=kb*<FMT?^K%J.13yH]n3*' );
define( 'LOGGED_IN_KEY',    ',vTe2<Y)@oM|^_u{Ce?kC&_tB)k:|Ss70xy]v?|)Sz}Q<sI<d0qZaqM?,X+x?NyT' );
define( 'NONCE_KEY',        'sepddl`BMZRY^IFS&IGI^[p?lps (gMe+qflM7JooA{DWEK$HKvfr{$Rf<+j,UW2' );
define( 'AUTH_SALT',        'ivyo:}YG541;yk4UUoBSODkKt12 |B,]?:pS9bweThN=0 v|#0=.Mb^T70w{3MX/' );
define( 'SECURE_AUTH_SALT', '@C=T008Apt0{mxIyz}>#A-6*%^1`ey #P2u3Df)QLHSlr3om&3Ab`+4e%CCb5eB;' );
define( 'LOGGED_IN_SALT',   '%a&JcM199?(g&7[4T=r!Bm8j#EK*I[&;xpP,A~[~@MD5BVoLA@ =s2F< !x*-jt+' );
define( 'NONCE_SALT',       '^~wL8:=NB<.z|86n[8?^kI4e)xSe#Tk^(5W.%nOgpk1JQ82L91h051U%wj6y,uJ4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_medibound';

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
