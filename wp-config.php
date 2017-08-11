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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'PLi1>p9HC+8ON]Dl<!m*Ie[qs}XFv*;:QHIY}-!()*X0K9=ciC@7,h_33!7]F?Bj');
define('SECURE_AUTH_KEY',  '/]x,*U<[8!*_edTu,%@.SB4)T{^_%17SMxGxBR5U!&_nRVF# k|GR*MFS&W. $7,');
define('LOGGED_IN_KEY',    'Zk:002&?K!;rzC?ot$SD:P4P_vF#h|s$g%3ol?]U:G&JRYR8Rm`Dn2O3+R;|1NH%');
define('NONCE_KEY',        'U6/z0aT-/<|BeOFE,1r/,gFkj6cf *dzY0NtF>B=0`D}F.zFoT2pvykWa/$h$V}E');
define('AUTH_SALT',        'IA<k@[Js@7seX}l:#<ivGbT?|ay>g<0ZS,_+#5Oq4*N@sW;<VX~!3HfWsinN<9(@');
define('SECURE_AUTH_SALT', 'Gvg2aaIq% Z>OXS83`mJ-86Wbxd-?kU&,W -!nK=*:sAt3h5s{ $S17[B)-)FC8i');
define('LOGGED_IN_SALT',   '?;tsRP)FJ[.8PsejYg=eKnUzfaT#xGB/*C~Y`]RdQE.,AuH 6:z2$/@:Xc>Mq@sz');
define('NONCE_SALT',       ':RkQH4e6pF{6r`Pc,;K!xhCg-YJ%N!<X>V<4dy`pU#&L{_z073[k{D}aO#.g> 7C');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
