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
define('DB_NAME', 'wp_z');

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
define('AUTH_KEY',         'qxzBwwzr!N55p,0g;vJVm~by]4R2@?*e+B]wb(zqRoqDIIbxDqLRn=W%^Ys)D8g#');
define('SECURE_AUTH_KEY',  'zu~y[.k$ +u=nfKQNn0rtF#Mk9Hf`FT.dngNo!E|o>~UU9O@OVEI8mPx0c%2AfiY');
define('LOGGED_IN_KEY',    '~)^z1J:qYut)Rou?}{E:qNy0:.ghBs]5)+N*q!0B DCCoN8;W,OeCv3Fj<F4qK}v');
define('NONCE_KEY',        '3TP6uwv#W^$wId6^(I0fL12_oM(z{2Ja$.pzMJy/UcVwAat~l|{kvjpX)c-Ff=lB');
define('AUTH_SALT',        'Dd/jIN:9:`6w*7B*`ZkHI>$H+$-M<<k)+CyZdriSJMvi+[>|=[dh.~X&i;yc}&99');
define('SECURE_AUTH_SALT', '#P`[yYNPgB w;`8?6Ex$,O[|cf8K<KLUk;=+tKu2=Y,COlB?Xv9^<k(O.~Ufr4+S');
define('LOGGED_IN_SALT',   'gr&oNO[ixp-;-$AE%p8;G0N_`uQ_9$kQ5IcE,?b:{/C~x<Rg$Fozc2a;!^Nam`?(');
define('NONCE_SALT',       'QmPFSM<c2Mn`aYl(Ck_$4#0eyzDz?_DQfjCltX&,/8dJ0aK$P}-<YYkfdNW&/avh');

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
