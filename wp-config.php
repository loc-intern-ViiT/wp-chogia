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
define( 'DB_NAME', 'wp-chogia' );

/** Database username */
define( 'DB_USER', 'admin' );

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
define( 'AUTH_KEY',         '6zx> Do{IWBo~p}qjOx^3tWi9&8_ M&WcZW<B>1>uKBc1tJL>|w2kJ-h]:9(J)xv' );
define( 'SECURE_AUTH_KEY',  'dQjR?zkZ3#nOAQZcq)HMQ0u:*R+vQ|w)D_;2tjm!sAlDXP>5i3SBZAN;g*H;&Mj>' );
define( 'LOGGED_IN_KEY',    '8(evN~-:VrUUck-J*@By>E*7;dGm^Z&LAkh[A8@:4?#gGf(xHlItrSz/&w<iiw02' );
define( 'NONCE_KEY',        'ufikP2R~Z#SuSz|b.7#MW2dIIz-Z8XD^CwQo(#s;>ynpvG4`SE!U?yGoCkEF#JWy' );
define( 'AUTH_SALT',        'Cz:>;nGL4~$eOl!PiW/b$nUfoP99,Sb6KK:S^NuQ`prJ$hUUdo!M.ttGL&ylt|]E' );
define( 'SECURE_AUTH_SALT', '{~=g.ln::(Q3O)C)(]uJ_ZnzhLQiQOv{i%?La-wcP-`etk1F6)/~0J=/%nO)XSD9' );
define( 'LOGGED_IN_SALT',   '^m}ukheM~jT2X>#?KJ!p^h-qZq]O6)rz/clN+ nJ[$tX)O#8@-H/6BKU[dx{>n2z' );
define( 'NONCE_SALT',       '&d-KUZU}mY`TQ)LI)d!RvE 1x!yF_6BSY$60SESpERN*|&]cf%;_/M4j7 2If=dK' );

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
