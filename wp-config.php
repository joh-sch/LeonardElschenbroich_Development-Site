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

define('DB_NAME', 'leonard-elschenbroich_devel');


/** MySQL database username */

define('DB_USER', 'root');


/** MySQL database password */

define('DB_PASSWORD', "root");


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

 define('AUTH_KEY',         '|G#Gg5:,mDiL|F1Hb<qSNN&{7HP9A^O&2$z<09o%_e6gh)#I/T>x0]Y?K~[(,KZ,');

 define('SECURE_AUTH_KEY',  'FFHA-Rb#GIeau}_2LkpQfl!DLu8+1~-/|KC?u:V>EZ/mA1_zTm~Sp2Q^b`8>;9FI');

 define('LOGGED_IN_KEY',    '#)%Ur&aJ!SzuMIXR4+%v^gOs~CIG2}+ay51mhKvVoh9h_K<vumd)DiXE!hQvmxNB');

 define('NONCE_KEY',        'ADt8w~UZ-p$]zu<Y2$WjJ[99@gz[Y;*ndG-4)Cel7yV7z_w17}DCCpkP]`]j8K|g');

 define('AUTH_SALT',        'Vp!Z)$ nrP}7N02-pup|>US-XcgZ-Jz,:|bCw{-GNt<54!!KVW-7/3|+H0rva3_Z');

 define('SECURE_AUTH_SALT', '8ggz%Sp#bO%U=={x.yzDT#^qVM%{g!Ysh)C+tP}WZHc%hOp>TJPMiFIKbm6+h8l5');

 define('LOGGED_IN_SALT',   'QF:YJ-X6F,0pGR(`-AezPW:_Fx390 IW+vTHtaG+py}QBO%s.x>ww*;pXk/74kzf');

 define('NONCE_SALT',       'e IpWtR#H?y#e5Z@YWDgvbmrNz_S}DB}c~S0r9V:m(]*r]?~F95DJO8T$juW-Ki;');


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

