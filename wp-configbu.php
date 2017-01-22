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
define('DB_NAME', 'freqeffects');

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
define('AUTH_KEY',         '} )(@t`lP$Kkxp$H+N7I68nA~J~~q;:6q}*vYa(`bK0R!lf44-B(w*wnvAts)2S7');
define('SECURE_AUTH_KEY',  '0JurOL+6a-igA/4MZQr5Q0@Ww>vC: M9)=L9gL2m]?wDwpoK?#4bFRw1/dwVG=nd');
define('LOGGED_IN_KEY',    'sV%|7O4(O9[%Zo/pj:Gkgq<6lz8?Se`p.8>Jfn%$04v|!]6CUeG]m_>,:QrhCY5N');
define('NONCE_KEY',        'nc=J&QI^tk8)wB*|+Z~mR6w-}<4&1|#2ol+d?VkF?bJ#O+y4C9FSp@T.R}-_[H&|');
define('AUTH_SALT',        't/vZw3/(H@+e [k+#lIU&<|(4i!BDf.@9/ClSf;)7<U8Kqm[@Gs5Nntd!QLbE4N!');
define('SECURE_AUTH_SALT', 'o@Jk5fs8c>YKM-=t]?S6oRRqW)GbUOB<P:K*f.d>Ta;(vKner=jOrTq`$NZS<I&)');
define('LOGGED_IN_SALT',   '}<KUD%q`|IHgoz&7ur6q52c<;M4H-rto> (R}iQd1yI7Cy{W??=-]mx#h kTmz;?');
define('NONCE_SALT',       '%{vmA%co~.r>8Br9]Q,O5Jk }R5O_H|CZ{id|*~$bugK?h`C}CT@[jZ;d8wi!:c]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fqfx_';

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
