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
define('DB_NAME', '4FISWordPressAcademy');

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
define('AUTH_KEY',         '3m7F:TY%JnQwyZ9%f&Ikv01OOW+`238^,(_m#rm4|}k]:U^!KPY5@o-+O;eK6GAR');
define('SECURE_AUTH_KEY',  'eFhZ[0p@[~YpHj+0wE|w:OnHXeQp~VF%UsG+mr=>2A[ZtQ_7z3oce{pJ:9KrLj!X');
define('LOGGED_IN_KEY',    'D!|kYb_zGHNl?V/}sXG*dQul^Et>dA-087BF_-lJ)CyM>%5F)W9wk^T=FXHvw_B&');
define('NONCE_KEY',        'jMM;L.kHWr_rz~e4k]>{s{9%a7E2{9K ^yq-uD4=3`2F=Ym*&n0n7Yy!Gla Rx*[');
define('AUTH_SALT',        'S#;{Srp<@IdA# xaJU&YV]:{Z}#Q!CKU!=pnrQ+d Q^ ;V8=OU:NvL<YES,f.>P>');
define('SECURE_AUTH_SALT', ':<p-zd>zZ BaVIJ^8Jh5-zK=]n!xRkzLXqhcK%[oFW?_0H`05z3+[<%Jd.hl9se4');
define('LOGGED_IN_SALT',   '~N1U=9*~M`gu6F@>nddWEGf,1ySd+=Hj$Gea}[S0-j!WW67P+?0n:=T<L#Ik<6Ei');
define('NONCE_SALT',       'p]?&ySptwX)Dn%5k#yf+4JHJ6!xTzw-k)o(ajGYOevrq KdXMn#^&Hp}-H|*q]JH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kt_wp_';

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

define('AUTOSAVE_INTERVAL', 300); // seconds
define('WP_POST_REVISIONS', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
