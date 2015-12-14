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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'x@JDRw |wQ8$<L##O95HNTQzwn}$_sGR^|cy*K$Sae(,uS; +$,nAaPQ0HY7-Wtl');
define('SECURE_AUTH_KEY',  'B{mW[&@#5W?3*[{=xAI}pO&WTe!ox&d5[AyBKP^}t<x5eY,C0|7[6nJc+-Q!Y(CJ');
define('LOGGED_IN_KEY',    '@:4f/=4]|#`2LDV`]o565a1kzE&5PZ3o9R$ETcue07;#clt7ofDS,H=-W8UlE|IQ');
define('NONCE_KEY',        '[Kl,yrM%-C5dD,Djy-.b|rh(ub%gfQ_#*nE5)bpW>+Q`0ji }p?Tlv`LNvf6;6*m');
define('AUTH_SALT',        '.3[{jB`=9ndk6+RAvPda&{SCBa=?VdpfHOIz1A-A~*v[Gzzb+|0t2~Oy;-h-1u/.');
define('SECURE_AUTH_SALT', 'BSN6YcK0+`6a[}8k+yTl=WN=0td)w@yD`+^oimi[&]]+|Htb/q,WV7tE9-$<Tg,;');
define('LOGGED_IN_SALT',   'y$-`(}in^<Rw+gqm#T 7hHGENTkks,E.eF+x|?w>+T14b&s-3YqD}.b@]{vJN`{d');
define('NONCE_SALT',       'i$<{+VKJbhDG*R.tiB%z;[{Zerg-?f|+oz~ga3 (1`lcZAqFAA`UUvd)ON6P^4NN');

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
