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
define( 'DB_NAME', 'nadi_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '~R^@A2)a1+[{1bL68{2nD@`G350&}9Qe pbGS<=RfK;+EkpJl}7} PxR{Ui2XJT[' );
define( 'SECURE_AUTH_KEY',  'lPkCD,2(ef& 1gMN)):Fzt-svGUvsWrN7`5F8y@;5,hD~WEXT]}bD|b0~Ty*n{u!' );
define( 'LOGGED_IN_KEY',    '!+4-b&<:`%q~F=ni#=xHJs}!I4lXD(y1TH~STfQiaHKwSXaHnGZ#p2g<i9T+yRjQ' );
define( 'NONCE_KEY',        '`9(D}6lY~}{{yJsC!H`2^2+N!9CLhe)X^CcYnG_YIh20cp88]E4<[1jH~J/I+0;F' );
define( 'AUTH_SALT',        'oS)ynLLlO+CGE@~a[P/GY&^)>Z]2{I6hh rT31{?R3jrA&YJ~$iH*dxJ?3%:1c4j' );
define( 'SECURE_AUTH_SALT', 'd,WMl(Hi;Tl dG[b05uTO`QAs$XmyHTv+Ox0o(ilI`Q^8pEu$E4CSl^(`g=~WU|7' );
define( 'LOGGED_IN_SALT',   'mP,R}uyfnD6e%PXa<#gE%Hdn&crdU}<9svTa=tc*1 6n]y*1<R@`NiJgNf5bc^w-' );
define( 'NONCE_SALT',       'W={S(y1ywd3nKHK[t(5=q&{+czl*ykEJQOCTKU6D`>VX~%[dfdmWA,s#wd{1)&u!' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
