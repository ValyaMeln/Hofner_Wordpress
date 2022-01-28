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
define( 'DB_NAME', 'new_db' );

/** MySQL database username */
define( 'DB_USER', 'ndbadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'valya0322' );

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
define( 'AUTH_KEY',         'Nl`oBUe|k:odS^Z5s9^F(>$4z[V<AHh%^^[@xw96#0,:pk$uT{,F:[0G|XFmt=aO' );
define( 'SECURE_AUTH_KEY',  '|<(h=Bbjf%i}yl_,IDMIse$/s$I._n1T/ZFF#@IUUdD]jdq+/<l}2TT=-4bT_k96' );
define( 'LOGGED_IN_KEY',    'b3ps1m}DW3(u~3;72hf&oo[ }sI&rKH~ki;THS4H ).d}m]#grekW#I$k9R4aL Q' );
define( 'NONCE_KEY',        '9,?St$?|dJgC]lD{a/rmE^is?3yy41BA8ZnLgDa@?NTs:iONZ~`^:Pds=X>n9?3S' );
define( 'AUTH_SALT',        '-Fftyv=,L#NaurXLj=_yD%E,GhhaE*9#D8gW~Z;Zn?>ql|j0I|&j#]ztDYMeV42#' );
define( 'SECURE_AUTH_SALT', 'HnUTBEV]*M8.~6!o[-.=&*?_g;.YW_,LDr%_%Cz_hLcT+N<?s,]?G7!$tut6*E#E' );
define( 'LOGGED_IN_SALT',   'gx}wSPTxh2~.|FAGV8;Mov.lMW0OtiUt4vc5P<$&rs1g,cH #kr$}C2VpY.VCeIw' );
define( 'NONCE_SALT',       '?AM7SEcJQOJ+ Ii]bc|:Kxt>61NFD=m8Wl7aP.UzbZ/HI1e_ThvYBeShA/ P%A e' );

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
