<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'portfolio2024yg_db' );

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
define( 'AUTH_KEY',         ']/r<-%dV]g%,%WwR*oH0^4RE1sHC#p}]j/SjjGLN6sx9U)e}rLV%6]H[%M3LvqeY' );
define( 'SECURE_AUTH_KEY',  '*$~Uf#,@5bF,z3hG#NcK%=Nt+f}W(wujR,&MjBy?s>mPnv]U#H|`%N^z8iaZ^JT{' );
define( 'LOGGED_IN_KEY',    '0#XCzU!zh5)Mnp>m/&3uo.WmRu$>~KH=hJbC[.a&yia+9j{Mbhe+aR[ATcYFVV:h' );
define( 'NONCE_KEY',        's=n?5z9(#ck;Ezbt/IgaP^j(kY24XMT>w+u=!UL[:w|[!<{GP;,[<a4vYvg@,!FO' );
define( 'AUTH_SALT',        'y})|(Sf|%F^p6MQ0kun?/%$[sSLXx]Yv)N[h3~X tXrJwkn,x@xm%{^sg e?0~-E' );
define( 'SECURE_AUTH_SALT', '4|2mQ_aH@TEm7)4I>KM00Xh~9301{vC<gx+Ouy]%#XGJ2&${,{6-TNM~YTSIdrh<' );
define( 'LOGGED_IN_SALT',   'W-Q<{rl+:<jp@L_3jc]3gI_l,E|xq7haY(IC:TF+ //8DGWv{rndn%DJ(>T,M&8_' );
define( 'NONCE_SALT',       'o3GX3YF C7.:4hgtf@tB_xzSniqLDFSdt@oBUfNeF:bVMmj/2+,6(UrxmeW2@}l<' );

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
