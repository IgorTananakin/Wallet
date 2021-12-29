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
define( 'DB_NAME', 'igorr4wordpress' );

/** MySQL database username */
define( 'DB_USER', 'igorr4' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zV6yW6nU' );

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
define( 'AUTH_KEY',         'WQC3f4|Sb]Xms]PQ2U%TXM^|)[Fl0Ybr--QimI1o*T{FYGc#W%{!qd3U&;[y95Oq' );
define( 'SECURE_AUTH_KEY',  'c6eiQdD1T`.}LIJ*FOGpPTI{:g1p[(]L>V>B~0$g^,7v^#NF-n[}tv#Zg5p}EO-u' );
define( 'LOGGED_IN_KEY',    'iUv&_@IGxV1@wA}6>4U.cG,ui[~-I,gH$cDhlK3yFCu8>>ut^MFVe.7,?ZAMokL2' );
define( 'NONCE_KEY',        'oju!d7<u9$k[]lv2.!&I^=mE!`+f|OQ*;5TV6Uv{IZ@_5]5&TP-=_YYerS.;r%6x' );
define( 'AUTH_SALT',        'b9ml,]uXYG8k:818O^w%5weBn|7_ E pG$QA`7H=;OF:B)_I_J?RB(<C9Lm$ZdX7' );
define( 'SECURE_AUTH_SALT', 't;+GCrPk^^~6#%^H0lThq%H&vmGIhNaS-@o+%m5FQmOk?zE6jgz@{Ylk#w-m7RjA' );
define( 'LOGGED_IN_SALT',   '.!oRpr$/q7&{lQ{H>#{W-DnTd[`k!xmyf4hbH o6@;GH >JuVvn>;J={2IX4AlY&' );
define( 'NONCE_SALT',       'ZK}h3D2NV9pu!]X6!0#6BiDm@<(5Xo*SH*fb0lqv}{9bJGxF~lSd}2Er!vVPUNj?' );

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
//define( 'WP_DEBUG', false );
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
