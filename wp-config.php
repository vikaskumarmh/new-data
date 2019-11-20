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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coairo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Qv6PT?,@jmJx*|mb4^7E,.C,<bB?ZNqQ[=,L(rYc5uW+#Glu%@u~Y!q%=t=/BoT3' );
define( 'SECURE_AUTH_KEY',  'IH_qD%KVs{/$`(Kmu>Bwx,Lu/i22SINB8xa!%G;h]%:kePGm#p9nTH6T._nuVM7`' );
define( 'LOGGED_IN_KEY',    '6nR,m>5E9+%3+G7Z:h,c`khp_c!;A dJS(2N#!/BvF&1B!_S#uq!l)WpK|1V/3S9' );
define( 'NONCE_KEY',        '|+f&1NR!KtS2dC@cPa$wc7pf AJh1O~;92#~:M6.#Z$xqL#P3$Sf!p93neif]/2x' );
define( 'AUTH_SALT',        '^!U#,h^(7~X]rn[A@8M#`-k]SQ:b<{[{Z;5MshzyFw/pKWS2gw;=q,vBiH^S@{^9' );
define( 'SECURE_AUTH_SALT', '~gd42IA0b=9qyBIY~:7;*J9LcH}2&I{)>ABj}N~~R2jn,%nQ>^rGHflC1{NjD&!i' );
define( 'LOGGED_IN_SALT',   '}w!xmVsxVP=l^@olj|:;0bE5ce>1+V{$n.5#^2[4BL4/z?.P{k1Zw68Ac/}E[H>K' );
define( 'NONCE_SALT',       'QqAJ3TI2~_xR)=lN3/Bc/)%qhH1bl._I;2Hkn (%vunG;m+B|8Ew;35(?EW&of;f' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
