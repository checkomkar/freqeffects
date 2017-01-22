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
define('AUTH_KEY',         'zu)^nrhr:;*K2c-W,K8}k]331#WW*(?9^<#D~8308W~#}d?4H;#k4FNKU%|@SJ8Y');
define('SECURE_AUTH_KEY',  '!aY*EsK+PM.D9km5[J02SN`lSx0h7Fw4iV6&y@QqE/}W{]u$afgz>U;79NQAGU};');
define('LOGGED_IN_KEY',    'lCw*j/mM2)DEd<d,h{*B;tuL0q_TrW>OWv6@%8e)2bPf]|4&&cF?uMzcfkE{I<>)');
define('NONCE_KEY',        '*Kx0%&B&6dHQU6tqlI-/BI>; (wK`?2C5-RrCOs]8Dy2E7jh$/E7qv0<JFXOz_Q9');
define('AUTH_SALT',        '@0V(?j:Y2H|NDfx~m7?Q$w=2)/aeCYrp_PKNE}s(,><pH;*<i2#l*@G?kJ.Nq@[ ');
define('SECURE_AUTH_SALT', '<CwHeZs4|!Q,Jgr-}h~^T02p}oc]5ES*] .[2L$=?x17Y?j8|Nk4v4X%927#)n85');
define('LOGGED_IN_SALT',   '!I>!(IA;s;vv$<2.&<``r-C#sEnP*!C1QM)9R!h60F,uJjC9JU$MRx5`AH$~ew$?');
define('NONCE_SALT',       '*y7LrKmNxY2b,7aK|9E*i.u<9~m )Y+5Uv3T.3k?:!74jzF`Q05]O TG41`t/e;z');

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
