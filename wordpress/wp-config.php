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
define( 'AUTH_KEY',          'R<gc_ue$z;wE$~$(eYQcx?[Wv~S2%%<:}>nld=g)GWk/[wUmL@i_!_]z7ALbA!;c' );
define( 'SECURE_AUTH_KEY',   '8B$<o@dTEgL-j-o$V9P8!EublHI9jIWA!f;JSC,oTaXzj}2!SrO70FF|p6!y}:2s' );
define( 'LOGGED_IN_KEY',     '*peMU=bf>-LGoFD:LfHRw2SgI+v+tLv/>6A >qPq!vQiB7m)n& ~<sv,rcm#]4U&' );
define( 'NONCE_KEY',         'di+vk6]4&2/7T@`4*S;SP,YsUs!FF`XZ?9=9!^9dMv3BX]cb1Y@UD`BXfu*<=5`u' );
define( 'AUTH_SALT',         'sB~T8!hU2jkiZAv%W{@$n.o8zW.<o^kBcpu!Lr1!N^FB17_;2aEY)c3<ZN(P[!<3' );
define( 'SECURE_AUTH_SALT',  'u^W#T%qwC2+{qnAGy8r(uK7zEl_OZ`dwaIV`tbwn$NYX}>jM;#GU0]aB*0_q9,}{' );
define( 'LOGGED_IN_SALT',    'ZPP^ly>`wf|st4D;!b^XleH;c7UhPIlb[8z&i=z?q-:saOIL1cJID5>{Y.[*f1r-' );
define( 'NONCE_SALT',        '2f8U[/^jx;T1Rl.,%TZ8?tmEkTs?kC[E`OV/:*||9Gxavc@C&@}1z.k]eQ~0J%2A' );
define( 'WP_CACHE_KEY_SALT', '7c$>~S,h9WOt~:~lKc+UQ}?+7Yf?*NA`GeZ/lSvoA>mz;_vdrcq0[JmdS:i9Osbs' );

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
