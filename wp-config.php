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
define('DB_NAME', 'tristanmarsh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '5eAj&AfYfGIdlW?5?:qJS=l-?KViX`&5!e4;(F_qPYgf]EJGF0o##N~yYswzc6oO');
define('SECURE_AUTH_KEY',  'athE`d3$Os|YGuc6eClBSXx^E+[O_kJeogw|:yJZt6BdjqdpG|pBY;hikm/Acg@b');
define('LOGGED_IN_KEY',    '!*@kLT-@p*2-)7)C~cv>yOP([@8xQt,bNgj.sQj}G[Jo:y*XsB7eoy[2[7vd;[(m');
define('NONCE_KEY',        'ymg4+!DX}5+gYJ)D L>/0_Dm<_|@}-<bX-umc%Wr8D*9[1kZ=|DLe#>F3kXrenw{');
define('AUTH_SALT',        ':w8o5cR@cy5?X9WDFT=Es%t:aes|0>+,D,J]O+_;?d+HKC+e|dTlr&5)xoVWtaB$');
define('SECURE_AUTH_SALT', ']|p,R|JiZ!u&LXY2;yL|L:2|~PH$#N4MeV> #yf8rz}Wo1Taj6 G)lr~r!m%h9q[');
define('LOGGED_IN_SALT',   '1Pg(nbu:Fh93nE3e^Lo;:~$&F`]`Vkc6M:uAh[D0`a)$&|!+=+xyNkWt!l;=G-< ');
define('NONCE_SALT',       'Oc:Z+DZ|_%IT=t%oZbBH+kN^j$-wJDIz[U<ls|5fuW#`gl&:E%8?U)tuh+Tj|5H ');

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
