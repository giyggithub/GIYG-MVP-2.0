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

/** The name of the database for WordPress */
define('DB_NAME', 'giyginfographic_me');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'JU!m&D55');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', 'EE280%q2/1BznV65F6]LP*1snSYK=!XQX98:!7]<no0:=sfKsq?VQ%WcO=6!7xhE');
define('SECURE_AUTH_KEY', 'AE^GLGZ<3<om,qt"m.KR:N(pj]Q(xAk7AIHSCk!"CQi?&-5m"(E<(fP9X/#SLd*!');
define('LOGGED_IN_KEY', '[p)sp")R@-S/*W+=N}^-#7M%5yJ4tr%0W6qnp~R7oq@]]<f%e=KVt/*a@pNw*>(/');
define('NONCE_KEY', 'nza0Cf({Q3)L]m7sT^3WD]dV">1mMw(c.C`t:6Su{T+xj("UKW(kHsXFmt.V]}>,');
define('AUTH_SALT', '*r}^]Z$ane0l;)6`DEC,"ivuv9232/O<^^q#=|]5l1wAKMuQzOa{AmT8c_ZXw~YN');
define('SECURE_AUTH_SALT', 'mw0PsOb,3[xL(GhTQghwpq{k0BsezON73VO[9ywTuSF4P)bXNc+OFG5]dMQ;ps`C');
define('LOGGED_IN_SALT', '*PUZjVKY@ss5y=_W"Dc(^%tXqdrJRqc96JTO>6?N";xdy/=qHt[,$aety(+yWWIY');
define('NONCE_SALT', '*/)t,^?)q{nm}8H]MQQKsH<L(VFsWX#fB6qWDn$#[,sjT@-)k#/xdpyfO%t$`c-,');

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
