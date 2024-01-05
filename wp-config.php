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
define( 'DB_NAME', 'ilmaportfolio_db' );

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
define( 'AUTH_KEY',         'Yfj9jKhi[Rd_48_XC-TDQ%zeFd.emi@,b(3pG_{_JT$COw!VPuhTQuHe5B1sG11W' );
define( 'SECURE_AUTH_KEY',  'sF&)[wmw.X:6k{0.8sHM$USz_ZGr{QQ^(=]4W)enqfp6},g;r/yS}08Hj(2:Bcpv' );
define( 'LOGGED_IN_KEY',    '2?U2!Cp}sGn{HaXI1TN>vXu)J{v.$RNS^4q|c |~kd6vvk c0|e,7L.602(zFHpK' );
define( 'NONCE_KEY',        'I1qo&#.sbPCae.bi~H<70N,-v[bboPT In z:2?J&,=Scdx,,%D}VJ(B}dFC2MzD' );
define( 'AUTH_SALT',        '$mm[MTu9J8bg=wa^AX*FB[5 qkH)p)0m0{5e)n5$ wj&hH<V!:by*Fw7S{j3A!pT' );
define( 'SECURE_AUTH_SALT', 'O7>0gl)|i@(go%CrnLY&u_(C}Dv>Gcy%D}cYhNG6RMn 6&(F`]IQ160liiLtZ:7>' );
define( 'LOGGED_IN_SALT',   '~_y./6lfm w@VlWJxBJ0Tl-z9!;<kjMo~& 53kic 4Q@f@2b*:b3:Y$TVnl/M6V|' );
define( 'NONCE_SALT',       'z`^jgUHpyenIK+7 ;p]D&y`;-|:DizrD=|(nVp9z0)20/bwl1wJrMB3}* J1V2`=' );

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
