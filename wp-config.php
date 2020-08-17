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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's9~m|fcvkb1<}4.8<UEIon$1}$:$MT,bkNtx# kncG|$e%h,/hN`khK}>O-EOSBt');
define('SECURE_AUTH_KEY',  'IzYKo, S;s)MG-Z^34ve.`GQTtZ$gR-,8qD&=F>4n2;[eU3b~+Ajix-5EY E%vV`');
define('LOGGED_IN_KEY',    '5$Hessu+:WqY-|)oz|V+.}t;DXl;X]cdaho!BUJscKU9VGP-,Qn-pzj;8%Mtphx9');
define('NONCE_KEY',        '3E>4zw_BmiQ2T9W|C>XCpsp_QR6s o=0JsTyA(ch!x9~0S`dEE**H=%7@(lSL2Z#');
define('AUTH_SALT',        '/n)!twCjuly7OjPIC2JI{x]&NK0r`g.9}m.|M4%PZ/pxO:i,Vb*$Htrt@y4Ie/{H');
define('SECURE_AUTH_SALT', '-]S-lg|,- -Uj+prU: z-3uz.^2v9Lh&~qq5BvfAjKl<tm(`_FvzE/EE,BVZp~>e');
define('LOGGED_IN_SALT',   'Mtd`{RFXt-. p{/[n{pJ?Xm}Vb+j9S!Iy4_;;gvsmVkZ]6sI7e@|jT|gBt6T |R%');
define('NONCE_SALT',       'G:oWsQdS)-6|L%r2/@oH.1]8h+b`s-$%^nXys}hm`Ii:Y!6.v-+NeDnIzo5Y#65e');
/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );
define( 'RELOCATE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
