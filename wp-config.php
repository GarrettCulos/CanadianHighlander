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
define('DB_NAME', 'hlanderDB');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'u-;=4&tt*9fT9Y})X%3(:p&oV.0ty-B=J]xeG<a0,G4A~{%7N@y/M9;qg{9c(k!-');
define('SECURE_AUTH_KEY',  '}7G,JSo[^;tMCf,U6d-50/NdqCrvP!t@;(}R;yl)}rV#{NI*b8l~|U6R@46z|K^(');
define('LOGGED_IN_KEY',    '[]zjN:W@BqExYfL0Qg4QGKX+nul4eyNRJD)b8R`ow|V, _ss NI 1I+(y{m:$>rb');
define('NONCE_KEY',        'W`W2z-wrtM|==Vh2z- |!r_7f1,$Pc)kvvY3(=Sie47Z,+IFhetnIj7=%E $%U$u');
define('AUTH_SALT',        '+Dh;px`f+_M*0uB:/sY3G4-Tl3h)(/F`xu:l3f>?gkH`>WBv+qVr?sR&b|5niC-R');
define('SECURE_AUTH_SALT', 'xxtId(p_{FMHI4aLumBP[s)Y~Xv/|L;,kIk5}+X2Gc&)]e-*R-a!+SOwH!2;n_W5');
define('LOGGED_IN_SALT',   'ze9GK-F-6zTY;]Hazh[t+^rLz3H>qr$DtH2%:?~Dh^3Ib*lL.+ytm{Tqj4`h!}$U');
define('NONCE_SALT',       'u0D.-f3EFb9}D.HCmc-*J~8Aj;?H|+s``>{3PRhoqF4N:l($@ f1<~:ad1{p*2Jn');

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
