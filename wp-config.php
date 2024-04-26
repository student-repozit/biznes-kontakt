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
define('DB_NAME', "u53721_biznes");

/** MySQL database username */
define('DB_USER', "u53721_biznes");

/** MySQL database password */
define('DB_PASSWORD', "Biznes2015");

/** MySQL hostname */
define('DB_HOST', "localhost");

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
define('AUTH_KEY',         'j)(!ZlxjjvuNyerkEzk4B1a^RjpAiLEqg3@^swnqGY%rbVs^VhNxZgXu%rLZCepn');
define('SECURE_AUTH_KEY',  'i#gMEq8miZE5SdDTs05Sqsswhbv(QWibmRf8wKjMAb6!oJb2x8vq*!)St1LMopwb');
define('LOGGED_IN_KEY',    '@)@sjvg96A*v5x3sLysQerr30Aig10cO#a9gG*ys*j0oSSfjdwwRK(^SQqS5S)ws');
define('NONCE_KEY',        'W3uoiTbzzD3gCzNedCPeC^EYCW4qP)%n4UwBsu5MU1aqGKM%KC7Xaxxo3QdbE%Qj');
define('AUTH_SALT',        '5HcdWclmPHy@cIidcD%(NcyZ4zuIGqphaRDPmM1yVX72*ra&hBOxWmbJVAB7lJDI');
define('SECURE_AUTH_SALT', '*yF#t^&OzYtDQbqxb!Qpu1Zdxe4*Cnlf6k#AWBwFqywCXqtAvlh342DWMT1qWxE8');
define('LOGGED_IN_SALT',   'wVqlne@FEHxa%oDPnqNRW8gXCEhNrqnJjV1K8v@4*o!P3fnI(L&EhZoGqlICQxtP');
define('NONCE_SALT',       'cXYEYsXY0pJCQ!meBPOpgNaycuXJ#sJ@t)mxoe@YoMPJUO#kkT4^zfk1qZXFj2JG');
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
define( 'WP_DEBUG', false );

define( 'WP_SITEURL', 'http://biznes-kontakt.onhh.ru/' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define ('FS_METHOD', 'direct');
