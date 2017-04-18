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
define('DB_NAME', 'db_chegadedieta');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Z)Hgr~4T2@h$v>CTH`0:k{XZfpJ|3-KD(oGKN0&i1B{G((O>MTw8<Tq_! owLy=:');
define('SECURE_AUTH_KEY',  'eh3sQ-n` sa|%O8.%R@bBQdC7A+ ~_f~)xtk,hMl?6z>PkLwT?hMwAtb) =NV95R');
define('LOGGED_IN_KEY',    '4R-;^fu&Y(ZJFxey3=yje:gt-RtIHKolJw_S4{}}4PfZ$CMu4Tl:-d%,.eKx8={Y');
define('NONCE_KEY',        'n_W:Z |D[-ot?YQs*K^7Pl/Dm@fO1)N5al#fB(@.`I>9mT:!:,NGr{)z:[spIK9R');
define('AUTH_SALT',        'c,~r5:n_(2t@6e)dvnms(z1?$c;J0PZg@S,<8tVv1O,u GX?BiT~&LQ)/H-#`E+y');
define('SECURE_AUTH_SALT', 'f=?qCD(M(78LR[RhZDQD r^npoY?U04bxhF-dM,aAIVNE0Ot<u.BLlofs*UDUn{L');
define('LOGGED_IN_SALT',   ']+I|&UPfoR$[i4q~bruK!h^tY=A8z[KyKc`We||Q5^X<vou{:]D+0nJN$0Lm%kg:');
define('NONCE_SALT',       'ET!#zKYAoojGbE9)Lg:p%6h`3 z##r{K_wAN[/3??6kW?>m^:5:iZWh}|r^P+T?|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
