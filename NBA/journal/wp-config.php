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
define('DB_NAME', 'nba');

/** MySQL database username */
define('DB_USER', 'nba');

/** MySQL database password */
define('DB_PASSWORD', 'bassirou199419');

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
define('AUTH_KEY',         '#ZdU_*)(V,r@78Yi#*dk13AW#hS~9Vp@yFz[WJf:bbQjl! bHy}V]7h`Y^-3_6u*');
define('SECURE_AUTH_KEY',  ';L(Vf#Y+D)j_W[kHq8fh[I&~gcX2_KdgRikBr+VU:Z0FG{.$o-9P?kEN8FLyWURG');
define('LOGGED_IN_KEY',    'M-&6g#M*OD6&Lf}[BI{l|8Z9<Y/!)it~B4e5s7Z_g.iAe_;TozJ^|[Yvf!%13}gQ');
define('NONCE_KEY',        'OBGWX]+ZyN!XxW-iFr6_U>5cxmn;Xs/b/VoNiqmcGAk2pqY/s6[*9N>FRYlwsUd-');
define('AUTH_SALT',        '#$/OeY{(qx{E,@V}/~<~;Fv$L/3EK $PGM#UU-`SBxPqA%qCs5( 3//Whrzv~TK_');
define('SECURE_AUTH_SALT', ']H;{PB>3hM+_fiyKnB?i?|%o#6:tTu=Jz=-8QctPh<;%Q{$S):[Y^epQ7<Vy7yc/');
define('LOGGED_IN_SALT',   'f%&gq$Lyzqhm}9)t#bs19yK3L[ocASP6Y(KeSa4bD^9lX,A|65bE3/>3ssrd9_G_');
define('NONCE_SALT',       'o;D1Yvu93-zt<+V*;R 89q}:ux4/x5 UB^/iJO{pJ6VbnC4<ieavw.>1kOe^8,F;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_journal_';

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
