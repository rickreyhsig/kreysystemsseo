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
define('DB_NAME', 'showmeseDBpnenw');

/** MySQL database username */
define('DB_USER', 'showmeseDBpnenw');

/** MySQL database password */
define('DB_PASSWORD', 'TZc6CIL9FU');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'IQF,FJ}^,z6Ay$q^.ybfTjnQEI{MQ3<{uEH]*.m<{*imaquiLP2TXA6+.S29;t+');
define('SECURE_AUTH_KEY',  'M,y$M2+qy.{*jmPqyXfT6EQXM3$LT6A.x*]2<quXx+eTbAHiLT2A;SW9;5+_D#]');
define('LOGGED_IN_KEY',    'UB}J4>z@I7$q,{^jnQryYfU7BQYM3$LT2Ay*{2<quXy^fI6E<{PDL;2+6D<]tiq');
define('NONCE_KEY',        '77y,UumiIAA33<b;tti6aA.;tlhL5]HL6]p5[-~o[-ZKlWZO9K5]:~K8[o|-koZ-k');
define('AUTH_SALT',        'qLAHTbE2A.<KSH]1x~;_]txa+_ipSaOemLS5]2VZC18_|5C#-_hp~t-dhKStWdkJR');
define('SECURE_AUTH_SALT', '0sZVzgZVC4dVN4:[!JB70$v70@vrk@vrkRJFkRJB80YQME7,$F7,$yr,^yfYUMrYQ');
define('LOGGED_IN_SALT',   'e;]DA#*+D91~-s#~-haWpheKD91-C41[wo1[wslR-sZSOGZSOG:|_VC80@v8|@zsZ');
define('NONCE_SALT',       ']2*+t#*xtmTxqmeLD6tldKD91WD5;#~+tl*xtleLDwslRKC5dVO5:|_G:#~-s#~wt');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
