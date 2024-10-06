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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-fvcsa-db' );

/** Database username */
define( 'DB_USER', 'wordpress-fvcsa-user' );

/** Database password */
define( 'DB_PASSWORD', 'CZnNbXOBktHZ4@TD' );

/** Database hostname */
define( 'DB_HOST', '192.168.1.2' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

//define('WP_ALLOW_REPAIR', true);

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
define( 'AUTH_KEY',         '6!>f6)w)WvfNqYCqEa?V{7+2+xVmjw(!((6bK9-V<B^BVuQ<rTPLl,|AKuDF*7&M' );
define( 'SECURE_AUTH_KEY',  'O?N;:`vWa=@5%.bhu!mk(C5478S~kshAx!P{.E()I8h]hW}*Iaq#Q|Moa1yAD@~s' );
define( 'LOGGED_IN_KEY',    'zeB}MfpYB1CpdS5K{Pn/o%9sL5B/1NYYu*$:ct7d0&@A`sZ1q/=Tz_#MOdYg^`$0' );
define( 'NONCE_KEY',        'z,VFre`WSG.CZ@JeOB1{AJY,+%&cp`W|aG?yTL59lr.[S]:S.`><u_N~;k-Q)Za&' );
define( 'AUTH_SALT',        '6+f,-H;!l6:zF@rd8GX~36HmlUo0of/V^{XTkbDlU& mZ8h9Uq/#^RP2;ogC{mz.' );
define( 'SECURE_AUTH_SALT', 'fod0vKG1BuM9uMgcf)G9Opes^/)`AoVs-;#iWSq9!.)R OR>x@ +Y$qLX?8f3qqQ' );
define( 'LOGGED_IN_SALT',   '6zZYKo^]zasuKgGdM>-Ep4j{|E#d3t]F$rSh4:WxIfFX9FC:bgH~nM,ADN`xL9jq' );
define( 'NONCE_SALT',       '|-[{~7jSiqQg,pZY]z#&B3MGoG=`UHMQOt|y|;WAQX~xR!$hf)RX|u`Z7YW}!!G-' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
