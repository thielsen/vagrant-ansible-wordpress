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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'superpass1234');

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
define('AUTH_KEY',         '}!FLNJC3I?GHN~imwogl=9&`R{qKq4=)`X*8n%4J;.Pd^s`T?6N-FX&wYN=wzv_k');
define('SECURE_AUTH_KEY',  '` $hR{)@/-S7tKM|C1h!(a`m65I4Rqn<Xev-qyJv<d*v-H5fSek:Sj-RZm.5xtNI');
define('LOGGED_IN_KEY',    'TPKyux/5RQ7Md~z1$4S|>RBH;-eT7_iz=IFj|zdiwq`l{^n+Z,4jBF|p@pNK<]3=');
define('NONCE_KEY',        'J%`?,(p(r75*{x7H#K{?3KRZ;0=r!Amq1&NSv{5_<1O3w5oH=k[<mG2g?(!%fz&B');
define('AUTH_SALT',        'Gn-5W^l6W0[?pbsM0&L6evRd-R?ar`1>KQ{ [^:vKaYM!%D6OK#(3)j1$ V+V s(');
define('SECURE_AUTH_SALT', 'wvMc {ulNTf`+z3l.l_-i<^;Bnv2IZcVd,a*u?eNw}fn6JO358*Ry]O6lDci7#Ct');
define('LOGGED_IN_SALT',   '9XQ{0pKwssCicnA6<#_2eYEZs6YV._eR*wGm&H4<a+CB}.f8HI0BR6ybxOW;O@20');
define('NONCE_SALT',       '!jb_&#1r]+d<B=~mPtr*BBT>T6n{+,],0p`%k]Z5S52ttEixa:7o*fpY=zi}5D^m');

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
