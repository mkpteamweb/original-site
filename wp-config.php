<?php


/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_MEMORY_LIMIT', '256M');

define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mkpw3b_mkp');

/** MySQL database username */
define('DB_USER', 'mkpw3b_mkpuser');

/** MySQL database password */
define('DB_PASSWORD', '!CuJuuAUeXE1');

/** MySQL hostname */
define('DB_HOST', 'mysql1304.ixwebhosting.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'A|IK>~;|0Ezy}Cxh|F`Il@%;!3PXq4:e}H+K$[epqkv4%EZ(]D(.]zhd twhsr+y');
define('SECURE_AUTH_KEY',  'cCW}|{efsG-ePuGMcB7m7n`]BipqWl$&n?2/brs@f30?xl(Ze+]|9#Lyz|*].YRS');
define('LOGGED_IN_KEY',    'E*3<)|PfQ|xOY#BQ+L+6}_Vs<V<H=:t-`AsUvSHeu!yY$mV,O#yD L(q |o8A+AT');
define('NONCE_KEY',        'u eKppm 4-^49+HNBYTtXzb+r-FBe^q<PGaA6|-XXV5%~X ~iIf3:186q+rz|^Kf');
define('AUTH_SALT',        '*Rj?Dcp}-20!?f<x)h$eXKd^B6gz%i-V9=)UPLwOToAWH!C@rSuS>|+qmmZ^:;L}');
define('SECURE_AUTH_SALT', 'rFp~24kN^fqZ-djNpmFyC<:6}|Gl?;up}XOQ&yEQ(| Yra~;1%;7[OAP6w2t!:~6');
define('LOGGED_IN_SALT',   'z|5-/-&|~]aN:.Hi-*JrcPfU;+|]T-lMCq?VLD#Cvn<(>u}}#tu=+B6gyng)xt:7');
define('NONCE_SALT',       'tlRIm(S]J|eglg3|O*q0LUZT_IKLd052ez*rK:jZt~^uTB#+>M:WH)gx2_F :SW_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_mk6_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
