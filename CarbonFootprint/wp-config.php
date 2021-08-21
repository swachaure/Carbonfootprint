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
define( 'DB_NAME', 'carbon_footprint' );

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
define( 'AUTH_KEY',         '<f.l%^py+cdU ;}jjD1R7h/WA@p@bmYS!D_[fGA_PM~RBqs6PV=tKx<|*k/t)J;=' );
define( 'SECURE_AUTH_KEY',  'W` t;EtNTuRfeUM/T7sB^#Xrr](dg(KH7ZnG|3pIUlan=Af[m&}onDW8;W,{4N{(' );
define( 'LOGGED_IN_KEY',    'TQNABxp9 i}[`RatzphsH_u5S96c*>|O4`iK9WD10SamiqIF lCvco:o+N/xZx,S' );
define( 'NONCE_KEY',        'fbT(n1N@_q|XZ=,W W(~yP^-m<NHCdUS!F_~R*pEx]Lea~}.QsvypQ.H,pCnCvMc' );
define( 'AUTH_SALT',        '~%?yP:&nvzp kO-hxVy[&9[.dRa;_J/g 9qo5K$dN<Yxd LTw517$rY2FOPmNw4v' );
define( 'SECURE_AUTH_SALT', 'Y#T~WY2C/t-8jG3k<S`l91{$[FP[R]dI=PYDMk+D65|*4>YHorv}jRxnyp~TA9>w' );
define( 'LOGGED_IN_SALT',   'nNGsb&M,z4+T}`>5~94Qg-V}e1?dOH=dPYqk(9#_66X2J~r:b()p::Z[X:hGSVKs' );
define( 'NONCE_SALT',       '`m+W?u<n[Dj>6fMG32)evYH~fNxs*0hj=^mzFQJzB-1iH]u<(dkoa$7gl=4*`J+w' );

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
