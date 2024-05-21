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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '&1k9kmQu]*ETb~9BVn2hh|rWGjS~P{,;a<GTf.r|9B[#;pH.SPC`ut;>>yz+g^B6' );
define( 'SECURE_AUTH_KEY',  'V6Q# ~igeBEh6$a9cIu8=-O[4G)Nxm!m%VRme97!3Sy)YBPl.QO432ubqSpn*~Ev' );
define( 'LOGGED_IN_KEY',    'O%N=wsA!u}rLvHll)vX*R%$*My&$HiK`ak-t_/$-yNl&C=y:n{1?}W2C7;Y-a2PV' );
define( 'NONCE_KEY',        ')juT~Y S!U.+_(>T63(pqQU}A:B4y?.A&BD1*l>RV0u|ZcvIi810]& XPbM70*=)' );
define( 'AUTH_SALT',        'R{PZ._xXNLz]2r;BfZx7zWmE*5yV%]NP.#(1W+caTpBv,Qd&aUrQTwo <Y^ZVN?X' );
define( 'SECURE_AUTH_SALT', '}?bS8P4u(9WRQ>Y:ASH$>8vFUu6}24Tt,,qvm?*.S&/|#-H?0H,~fkOGGY3h|UT.' );
define( 'LOGGED_IN_SALT',   'x~:vISZs{~atW;9u4a*dzAlW_wCrARx.3-a51id}>ZuS$/1k7j#xxp7h77z-3z.&' );
define( 'NONCE_SALT',       'SMKf{lk/IRs2YNs2i#V4$wP]In5OqO2q;A]r^Xo@f,:!( W_}SraI,(tQ0!DS-M*' );

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
