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
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '$*d$ouL+S|MtE5{|CeIe!KtJv2UC,U?2i$<BNh|0$}O?s4^BE~uUE*PZLma5w+f*' );
define( 'SECURE_AUTH_KEY',   'VDa,BQZ(|Far%8}f7~o:NEzlh|6|VbB]]%Gb>{u}$3JBIZ4opBdVr: (3Hb7oC@8' );
define( 'LOGGED_IN_KEY',     'Tu@qT8&Hiba~s[I,7_x<n1575FSbY|)K/mpg[MIUx`{d`ZOPJu.lW7qU|b~2b3EE' );
define( 'NONCE_KEY',         '=!OB`ugBS}4I$EuVG<+UcFRQwG0D/-7WhoU,cAR: !`51XM<E`2S7n&jJ6k(oxW(' );
define( 'AUTH_SALT',         'yjRswyBIF#/lWW[`(Kz*Cqjs;F+2A5J9tKuU-i*qwtE37gVaB:U#Gf#tfL!AI@@H' );
define( 'SECURE_AUTH_SALT',  '=uo^A=?$H[oDg:bFnT,iEa8ou<nkepVyOZ!3&i8F]JI5.5sfS(PGYtSHNI>9V2@U' );
define( 'LOGGED_IN_SALT',    '8sv uYeqyvY_dA)m@`uDG[7)nFBsdT&(-b<rBkCWzBj#wQ.bQ(S[^hVr}zt.GLI)' );
define( 'NONCE_SALT',        '|rI^{vCBQV]&5YRhv=b#yoDTjlhJ*r(djuYm_-`wB@8U3~  ;Wl*]OY_Iun.^]VL' );
define( 'WP_CACHE_KEY_SALT', 'm#Ix,<*E7flif<(;XA%F^sZ{[wmwL_zke=:J{<[l1(<^cA@$K1w&i@LDRtnP*Ny}' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
