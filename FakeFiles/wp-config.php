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
define('DB_NAME', 'wampwp');

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
define('AUTH_KEY',         'zYfoPKy9$|yY#1!;;MM(%&D?B;Gs}qja,+6:3*F4Xik[_aEIDV~M/p^sq!J:W.8I');
define('SECURE_AUTH_KEY',  '-#x:*u`9|O/)Db`rXGj{)-=BqT|=x{Tp,Bp(+*OKA]zzz.oVZnTY&,2Q1?_2q|!-');
define('LOGGED_IN_KEY',    'Fogle=@muK}@>1J&pi~:Hiw{Lg)H>l!Uh ftc{y=bZQiEht$;*O_E>9`9dXyR84a');
define('NONCE_KEY',        't|Q7|GHyY%)Y|lJHLl@-w5a[T?+$md+pcw7ucX~_W5$YB6HcX|?O;7}MJmci03-@');
define('AUTH_SALT',        'N<zWfCWi,`-VY9}He%3st&DiYAoa_jzi@~@MLw<@.Um]uZt1RP;I8B;U4fvZvk:Z');
define('SECURE_AUTH_SALT', '=jUj#(hFV}!%F)}E4K0+*.}(?P4|t 5]MzvgR6P|RR2sZ+m^XVL^YDS-FWa@$hiD');
define('LOGGED_IN_SALT',   'm/6USIk%%sTD+s=WtQ?xUc{ORG<qIvW/T(1%}<lhBw`xkN[giV&-e0EL?Z&A{-@V');
define('NONCE_SALT',       'yYha[;.T8iL%>]9glVVdw}9Gheo/;X(+sp2de+Wl_Ln$6Vd|99-R&u|uhPMVXm/d');

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
