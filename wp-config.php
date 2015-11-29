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
define('DB_NAME', 'hlander-db');

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
define('AUTH_KEY',         'Esya-D4.{:VD]v$9-=Z{9$68D#YJOLJ9opeL2/=tC&Xblzt3uObc<TZ}E_XQ+N|:');
define('SECURE_AUTH_KEY',  'b0_cWbb>2;-~M<!,vcL32HroKU%~-odtE?Akwl-oOH`kQ[4:pM$L:.SYU?L1D{r)');
define('LOGGED_IN_KEY',    'Rwn~P;q7R)H+g-BE)u:O-=.P+N~R$dv})FMCsW=HG3-YXhOjztYh]Kg>Tc@|[F!+');
define('NONCE_KEY',        'I+ %?3L+?_50l,8f>Q* j|,eR<ilW-Kd$PSO<X(CDu77s<HBCQMo>!&MN@x0a%FD');
define('AUTH_SALT',        'L),b|(!9jlQpeUp?,{2rMdF|&tP16>y6ziMF1HBGm+I|sb>7-+#R-66=ak!=hdnb');
define('SECURE_AUTH_SALT', '!wcl[pIx}6}=u1fr[!8B:Pyee$8FKFw4nNcTKR1BO967(%A#r&*&L:k^EgZ-a2La');
define('LOGGED_IN_SALT',   'NI~Uc-jFs4jl)h&[#2*ltNgy+.lm-;4r>q*V_54FC+B#o>|jE*X(#$Ry9-[n&{Q2');
define('NONCE_SALT',       'e-Ds2HY+5(!!Z,!CoE*Ma ZmMrrwtVyt |NL10<#k5k.YO_Yy;8;UWxUqj8E6`O-');

/*** FTP login settings ***/
define('FS_METHOD','direct');
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
