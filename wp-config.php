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
define('DB_NAME', 'argotic');

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
define('AUTH_KEY',         '`8pRleE;Adko3:*NPah2G&VCGd9Y2<`[>,s-YSuXpg,F31LVnIFDvD#$ ^]=8(Qf');
define('SECURE_AUTH_KEY',  'SL*FM4%B^?kPKyCz{+#:g)+E!.`s$OJffV|57Gf]V8P%II!%VZVZ-uUXajV1RKUc');
define('LOGGED_IN_KEY',    '6zi7K:%Oq--h>bRJU/gsc]@JN%7Y1RLJHdOG_lI;ED4R=|F2qYJPmM4]ldJ%`]Sb');
define('NONCE_KEY',        ':oYBs#^ZAxmq0xKu:b)sD<NhDfwGnIQBL/BD)(}ONf9oL3X2kp9,5W;fp>]i/|nP');
define('AUTH_SALT',        '~%/48S,g[DqB <:9iVsE=G%4ph9kqf6f;GltXw96sf! ~`+Psn7*jL-A52A~a6+T');
define('SECURE_AUTH_SALT', 'T`z9+43QIHr>8lEPu6|<]C$EjXC:;,s?lWkTre%6eP6?z}vD4<FwI%C+^_}Ta2*.');
define('LOGGED_IN_SALT',   'a|DPhxN>O$MM5f_x5`R`1e 4#)TsBU9BpTkY*0t1l4=lWd5];ho=Cb!c)GB7I<Q<');
define('NONCE_SALT',       'Dk4e]Xpm8?hWO]t0b1WW}6qyS8L#7#R5+%^KEKN;e`;<89w U2eFv{qK&f~;q5Hi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'chaire_';

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
