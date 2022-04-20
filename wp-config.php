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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wbafg_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'AY}6VRj0&]TWsRWSc.5>27tI(X=qP^(nj)!h3EzbhOixliccb%/ed`~^:n&P8Sg~' );
define( 'SECURE_AUTH_KEY',  'B_Vkc)l$SFJ[E)HZlvH]bl.yh$~IQJ!kT<e%~6j+R[M*Hb2l3KKQN,=]&|~sXVwf' );
define( 'LOGGED_IN_KEY',    '7q#USzg&d*ob16C2f~=L}[h?*/5:I(b&[>jM~_#}+(@$0/^M}0kIM-BJqn<`w*am' );
define( 'NONCE_KEY',        'N{nC8>MFxhz9whX& X`rSw,>!-e[wBwsa@S[q{B%B/H,oiO?xPh;f.Ji$RGhilh]' );
define( 'AUTH_SALT',        'l/D&PJ8Q_Tz#z_S_gqyg@~pf(Ue.c=6!4@9H5M6;@w_;Ui2s1.9V;d/z;2!Crz,t' );
define( 'SECURE_AUTH_SALT', 'Vq[@eLmFl<=wr/pI`YzChIgjf*<U.y54QGFy@<maSYR/oK#?3mr&8m^Y#w7f(VYP' );
define( 'LOGGED_IN_SALT',   'tom[kS.CdVLx{}n;Eh(nj:HK4AuCx&|*uS(;]P!Z EjLZmrxL#va)PrX} FTKy&I' );
define( 'NONCE_SALT',       'A%L^mh6)U,AsKGZ7*=S@|sWEHJk[-&zw:Jrza5d?_s{H!|B6;!?wW^tO|NN$%S;.' );

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
