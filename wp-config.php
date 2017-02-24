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
define('DB_NAME', 'teky_edu_vn');

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
define('AUTH_KEY',         '-hI(30^)AyJX^WkH9I8N DB@WcokXr=67Q@T`E03u%b;O7sJW9)gH5}M3K(x[rBj');
define('SECURE_AUTH_KEY',  'p:=WAUid=7eH]KeK^UpJt?6!8cD@n=~*Gp@I.]:ZV_P[q5H]0TF2(09cSt3?aV;w');
define('LOGGED_IN_KEY',    'X>AfE~.pjr(:(9p_oi+T$g;F8Kss?)aKdN-0C_hFLy}r(~Ym)ddv9D^5r0&t<bpp');
define('NONCE_KEY',        ']R~,%ld}VPJR5Z7-YLf2[63%doo8y)jU1BwsH8$d#f&mi ],mFVtq)}ORwup]V.&');
define('AUTH_SALT',        'h}u:eczR-(=EcEc-l/:4%5pI1h9COP}!op79}([5>SIq4zfq_{Q]>6, J%c0uc6j');
define('SECURE_AUTH_SALT', '<##(~JAfNv~tzwg&O3JseaW`Zd8yPKK,dt0/9`:EsTiXG[y:Hao.[N0Q+m7_yXmx');
define('LOGGED_IN_SALT',   '}kSbZu/++%fUQK lDQ243QJ3|Vd.;}}!LdG))+tiL8LdF}y$P+OLP$$s-Ytq^6V.');
define('NONCE_SALT',       'cs5Bxra6B$4!.Q0WC< )PqJ9j.+|+.w@~T?f,-t@y}58M4>LarKKdV6nc%n9?ZS4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'te_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
