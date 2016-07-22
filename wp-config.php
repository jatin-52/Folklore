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
define('AUTH_KEY',         'l3>Boi|bp@z^1(0vn6Ydrc:VL=Xkm$zq~Y@ -G%N3-if125pF6 $ojA~ .{kt8+3');
define('SECURE_AUTH_KEY',  'I=pJa6Lv`IO*vZgKr2JcGyYdG8. FhxOXLPc>UI3b!Tuq2zUq.n6d%G(8t18t:y0');
define('LOGGED_IN_KEY',    'z<KeRX@fthcpJ]c[-8S]/@D`Tt4O{`#[`$s~RXml}j1GKYMVNV6Jj8(wE^/CrG z');
define('NONCE_KEY',        'HZ(SS)JDo>txg~d;0PNB+Wz~E[%bsci@CE3pMmY2[et/unq9g2#WHKQ>p,(][6KZ');
define('AUTH_SALT',        'shW?5rT:bbdoTM_:6b{JdLwtW^CP8.O;%{]Xn5NKZ *^}Yx+hF[&[;:?i_r(&p,z');
define('SECURE_AUTH_SALT', 'OW1SH:&h_<I v{_cjd6Zk9^SDiL+7%4!D[jwSYFa}Q)zVi0eoP)p=-^#l^.5?+>j');
define('LOGGED_IN_SALT',   '}4lsXL#{Vyxi-*AF&b9_jc`V>FD*pu$+%<9?rqA,PiHu+~Rb+%!QJL!C[*O4hgbB');
define('NONCE_SALT',       'v&+n&xpR@2I}m>.t- f4fY_s`,M>E.Nc`H6z^./d$x24^~j6sr+E}L/^02:L_QL3');

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
