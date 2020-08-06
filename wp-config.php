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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressku' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rMLu0{q[sHUYt-?Ia0RV1h/#XU1El-ss9U=7+hS|9F^VtGIo!4?@~Zj0eS$k*`Qi' );
define( 'SECURE_AUTH_KEY',  'Mm9TTo}/OeT;DG4%XEP*)PP3&u>z#7UKX$DV%rwzv>bD9[(*GS#_tJy#@hnFKQbi' );
define( 'LOGGED_IN_KEY',    '4G`.]J.nG*eHe?52H5:Bl4[7fcNG&0:&J5ljVwpqU[o%.%Readmsdx-ez^_n:j?N' );
define( 'NONCE_KEY',        ',zTFFOwWocM]w9<qO#[c]M~A+Fcl~Ty$3m-|H|+a!Q]sJxX=q~-t-T|SmJ)a;3|%' );
define( 'AUTH_SALT',        'uI6VKc$}DR>B;/#4~7&u/*6*WI^,4Ax(dH!1eELf^4#>@5 };8$w9AP%0LQY I+8' );
define( 'SECURE_AUTH_SALT', 'a>>Cv0(Y,cbO~KY)8*<e|3KG+Zs39 X;>35qo! Exa{F0!]Xb?24`hOYZ$~SC;^o' );
define( 'LOGGED_IN_SALT',   'f@7|,;3?UmZd+]:[3kBt0m|tg}}pX7Ma$VP)@]p^2gCYSii(J%h@hW5[JL^e1o}w' );
define( 'NONCE_SALT',       'ifuAJq!=%GVz,.(7^lP&Gm+vBP3S]|C@|v}Wj&d_y~m9uFNAM.#5j.HIsQoT=4{b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
