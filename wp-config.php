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
define('WP_HOME','http://xemwebsite.tk');
define('WP_SITEURL','http://xemwebsite.tk');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u196318776_wp');

/** MySQL database username */
define('DB_USER', 'u196318776_root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.vn');

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
define('AUTH_KEY',         ':TN3a7*.(MG&KYpLOW:LT`7tvu)`W$1/I{^MX,#($ fzm35GWD&IUa`iS:_djmaF');
define('SECURE_AUTH_KEY',  'tNpYzk>A?> F,t_Jc95G$0@xpBN]DyBN<8O*4kjx!Tyido`T9(uh4u ,p^&G$>R:');
define('LOGGED_IN_KEY',    'KjF6k2Bp-$tD=0(e7|_u$?4567y0/zZ-Nn@ .,hVi^U7)bKL&&`JTwR^@2M,7@Rh');
define('NONCE_KEY',        '!L@&+il]L{K?N@/gob2vB8T69&WhVjXfxWz9. 3CEBn_H!)QY,iX6Y4VQGBhW!:G');
define('AUTH_SALT',        ')jp,H#U/>LDw_zn]Ul.J%A9_P;:,L`2m_@>j. .K~p>~fe&3Xv?9fLn(JrbGdC@.');
define('SECURE_AUTH_SALT', '71B,xU1R~Z;)zK7b Q5KNGpthUd8BJ7W0&MIr<t#:Pq+z;j:W O5q~L<[lWkL_6W');
define('LOGGED_IN_SALT',   'VOba+[Y4bc:yqOZm]ZiDK1JmM[`tM.[Dm #wh!@:*1W?`sFC^5NFX5wf`+5$~+nj');
define('NONCE_SALT',       '.c(IXuVt)b9)/QBQ?elf8OjZKUze6wu}:.h0@U%-x9wk$w`7j+%dk9C7~Qc^Wr!2');

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
