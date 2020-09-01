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
define( 'DB_NAME', 'kazmisherbal_db' );

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
define( 'AUTH_KEY',         '@6@5O|VDU}*<Y+e|n`=,#+o>t7W^Tm~I`;{sF`dr`A!fB-0T!R[F&Mr}%FsWIyG ' );
define( 'SECURE_AUTH_KEY',  '&_s?bt_J$th*z F@D^t-;QkZbvmAmSXzp$]66;0~CkMSBw*S!}sM3L[N?}RLEYS<' );
define( 'LOGGED_IN_KEY',    'Dx*`n29CYg8G<%`[LqVXk{vb ygIlP{RmUYEd5h]I;W`F?psfL0;M0ti5Um11k,$' );
define( 'NONCE_KEY',        'zvP~`gyP _-<TqzQXm7TJP-y|Q,CkDLRR5e;^&iaXCco7A=U+k@$x K~1QDn?r~h' );
define( 'AUTH_SALT',        'kv$HmvB4kk1Qcc}Zi4]l,@`c?>;0cx~l~=yK*Z=>po-jK:m= Isw%5NI,Z[.PlXU' );
define( 'SECURE_AUTH_SALT', 'k-MS%FAK0D@W.#wenOoK&t{#0+,HZ[{U{hh=|Xpwh&uvBah8{d;<&|U%4JN8Jo0o' );
define( 'LOGGED_IN_SALT',   '[RC$BJE;PTtdL?H3fo{Lmx:(p7_DwCfM9&b;0GfQ.|FvgLP//~NqN>@*<mH`>D=r' );
define( 'NONCE_SALT',       '5ore-UTdCN6c^,P+,%)g((KiDvBD)GPnB0.9AIM*.UfS:Q/g*[UVK+5k5Bl;!yCr' );

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
