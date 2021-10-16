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
define( 'DB_NAME', 'practice' );

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
define( 'AUTH_KEY',         '_y&qtF]0bi Cs]8LMD,p!~T#[W?a|-,Oip;wd|28&H?GV2SuNuV#2x/kp-<*<Jju' );
define( 'SECURE_AUTH_KEY',  '_Q~U0OA$x%0F6vsAf(YQzj_wGEL&*/ctwpD?#3}a6jWT<2=`.(r=S]#v2#cxgzRF' );
define( 'LOGGED_IN_KEY',    'O.TUh7.zx@qIa)a|HS8FPeHYX3L#%C>J.,^r.-A*By:oU(]a[C=I#5LD9wXZb`tH' );
define( 'NONCE_KEY',        'u(SRD8vpMV4D%5fU1zBdfq!z0ae PiTO[C7A{C97<7mQg,%(d<x9K((rr13|Zu*/' );
define( 'AUTH_SALT',        'q^iLc/91XcAaPj*f&zwe]iG*Cxx50b^72-`468.^F9(1;v8hL+(4n4N,XGE1HYut' );
define( 'SECURE_AUTH_SALT', 'DaC@Y4[&*,)QQS_[J2wYd?aUu&4rq;F!6&Bb6aA#hT::%Nq>zIyZ?1/H+<T><VXj' );
define( 'LOGGED_IN_SALT',   '(s`NqXZQc[FTf!DN_VlU;;m@u0cCImZAhODJRq1pE|%DZ[VN@ NA?duX=_S-o$L1' );
define( 'NONCE_SALT',       '3-#mpVZ4UuO^a)w>;p^cgj0o+hPOr$-qIxYZQy[;dzHkIN:.IAQcm-x/v&+`4r>e' );

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
