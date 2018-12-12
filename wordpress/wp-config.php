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
define('DB_NAME', 'desafio_singolo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}!V/Hcd`*<^n,t(y0pHb)mc!y0qPeZQ}]tb /BE9TW0uRTYqx4RVlF,y*6;s9AaM');
define('SECURE_AUTH_KEY',  's+zdM:C,VP7ANIw=*#w4LYGj?Iz0xs1tx2k~d M4iw:ruxy0>zp.snHJF1/Ua;$u');
define('LOGGED_IN_KEY',    '||DF_%cUVt6MefHlH?#zWRgwN^3waY9j:g8,1^i&2[;e<k7mW.9M9*Q2W9.F}0P;');
define('NONCE_KEY',        '%q1b5(fwy,V)0b=(UW]LCx~l) tZF7|*?3N_q&o;Vt_/Gpbe.`MYUdPm::x,XKNh');
define('AUTH_SALT',        '<BU?.1J(JBK*0;6)kkL>~Wm6x?S/l-c+p&8 Z7J~B=B{AO4%1G.^,K]|XqHLHo]|');
define('SECURE_AUTH_SALT', 'S.:)uVU0Ycfg%ZtJ_w`g~$p.n6r5.];+aTZ2]p4/+A/mWVBi+ DQMeY~_{KKVcx8');
define('LOGGED_IN_SALT',   '.Y)vw%.=~U^3-?TpU~*oDk]y9+gN[1@`-,0x&c}_[p!FCzBz*GW.%`U{yC?_t{*D');
define('NONCE_SALT',       's]o<!r~BVsUX[oq:Kvx$nYiy(9,sE00<_R><OT4bGa}1a6a8$S (^cHft&BuXqEA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dlsi_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
