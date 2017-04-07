<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
//define('WP_CACHE', true); //Added by WP-Cache Manager
//define( 'WPCACHEHOME', "/var/www/html/wp-content/plugins/wp-super-cache" ); //Added by WP-Cache Manager
/** The name of the database for WordPress */
define('DB_NAME', "giyg_me");

/** MySQL database username */
define('DB_USER', "root");

/** MySQL database password */
define('DB_PASSWORD', "JU!m&D55");

/** MySQL hostname */
define('DB_HOST', "localhost");

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '28gjD#&%|0,sa*TYm^<QMt7Y +1V+^(4-0#I{be*,|L4-Fjc V4:U/CD|rAZ94jt');
define('SECURE_AUTH_KEY',  'K?NFmc)R3+;B,`gZb^p3qq1-}) SNG[_EiK[3Q9&aebp&-%-p|rmm9pim/;+(I4y');
define('LOGGED_IN_KEY',    '@7%u/~Q,?v^g7u/9;;Q=Q_wU~v5=sc U:fpKku?lbW+$!07H1mS6BW%{J9/mpIhW');
define('NONCE_KEY',        'Q0&H9)F@uJ#BZEK(yw7>Y*pAk~K`4[tP}NT):}Q%p++jibdZ 2U}{f=*)xB=@@^p');
define('AUTH_SALT',        'i(E5[P3E?RZd`CuHp64Gs5Q+N~byI{IZN^5q8&{v-wT[]%o_%oW[GGM~bnfq=4#W');
define('SECURE_AUTH_SALT', ';rK>D_[kA,X^46aJ@I[Mo#M&|xyzdi^Y#4Q|o+hIqQ;y2g<EDp<[g+PPB#2QYUH8');
define('LOGGED_IN_SALT',   'E0PJteg*ms/puC&cF[d<K1HyV+b-h*j(S:yiDBN3zoigESN*1V5T+Rv=Bo*a)&Z=');
define('NONCE_SALT',       ')$CR7(U~W_-]= PCk;:J-`0L_D-i}efQY->}tADj5b />5n>A+.>LS`.b)K(H+!(');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
define( 'FS_CHMOD_FILE', ( 0644 & ~ umask() ) );
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
