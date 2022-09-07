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
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         'XX>COLIAYGofvp<9-:~H}v]8.l:j Q%^=$e4*C^-5T1(,Te0WJ$]IZ;)ELADXp[K' );
define( 'SECURE_AUTH_KEY',  '`Pddez/p(@A[$8*TiXAml74H=JiU )_VSs~iovl/sFD4*.;_@?)J5>@}[l~a:ZKE' );
define( 'LOGGED_IN_KEY',    '|7wu_BCxh]hV5L!u*qSdO]>3u7JIzpVuc Rd.c 7K2kmw5`B6xj*d2`/Ws/{z<^$' );
define( 'NONCE_KEY',        '9>Pows*rB(L3^bVWR=dpGcaAdek@H1i5_9Mn+y#b*}%4g%yQQb].ht%emTcxD~<~' );
define( 'AUTH_SALT',        'd]jk<DhRgy^;y*A;YR2H0n} <hHCRNA]z7ffO3x rr/<WC#Kxp%FweW]{&/w#/rc' );
define( 'SECURE_AUTH_SALT', 'rLE^] tHV=6vRn]akg?j+eyC_CSN%7Z!z sC WV:uK[.DVP}pi8Fgp.@Q@JmZH3;' );
define( 'LOGGED_IN_SALT',   'C<$o**=5 Ck=5-!6kL4u#k<BZVQ%5[x^8km*l&((o^yAtt2(Q<_68ajh8V]V]$yN' );
define( 'NONCE_SALT',       'VD}R,6M1oV^%C!M.c:eXo,N5_fK%DGKiS !rVJsw([e==6I+4Ecr(L/[EmFv>Y5W' );

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
