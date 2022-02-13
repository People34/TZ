<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\OpenServer\domains\Pofo1.loc\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'pofo1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RV&C`|/NXWs{CAVt:ue-,byEKG:VrO9G!|O~DKbec3EHZp|t|QVoSzkkD(G#{s]p' );
define( 'SECURE_AUTH_KEY',  '#3b/RTREDGRc9Jz?foSTV1^A`*>F45k_gY&6^!:,pLV$)q69fO_i&E9&SehCPn|,' );
define( 'LOGGED_IN_KEY',    'wknQ;Ari*]F])n)s3>Lk?huga:R.9GqwXm;:k9LPG9K*;>767~IO|ttxBP-XN3a4' );
define( 'NONCE_KEY',        'k>M&*!*iJd<vb,g/2_is#:_hAWP_f1$A8Y_de#(2gw%q9(~wdC/!Y)pk 7ZbZn!z' );
define( 'AUTH_SALT',        'R~[kTka+Zo9`WF^0`w8~h.V7.K,I7IvG:Jfz*+|0v;:{#CfOZ/(7T:3&@ZV2(>Ri' );
define( 'SECURE_AUTH_SALT', '?RcfiJdRvlI`NC0cOJsgH:!Rimv22%mO0tv#>?<( UU9x9sN]TrcQ%9{X=!6y!eg' );
define( 'LOGGED_IN_SALT',   '>8. ;R,MqOjeD}U.XSz](Z<oXyUFp1H*HvUC27O.Ch3:1mc__TIP8Sx:8qENUBKV' );
define( 'NONCE_SALT',       'pC_T({d 5TJ`ZyQ!+,_W)c;}Y9J -BNUIQ{6B% VuuakVQWGsH{24tOz`kIO;XIM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
