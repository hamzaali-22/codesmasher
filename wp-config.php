<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'busniessdbc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'pg`S[|uU8?SAB/@.ruSf8&uB/a7Yb^4ud`O=4q=qa<W+$M9&xD$4TwZV-0_/b6M@' );
define( 'SECURE_AUTH_KEY',  ':E2p0hY A5be;6}FU2q{89dI<Z9!s/,n5f{=wGUIStCZTs[TcVs%r[W0>,9Z;`)P' );
define( 'LOGGED_IN_KEY',    '8aHK!J,CzBo2$;;28(=c;#@o4#d/A}PQWpQ~c$n-aVziM#tlxLuK=+HrN(|lIRlL' );
define( 'NONCE_KEY',        'Othgn<<JWt7e-@mywmpL6o1DX&z$.Q5mcWW!)6Ew3[Z.5]LAq.+3(|#)=AT!mIAd' );
define( 'AUTH_SALT',        '-3-F{bV.rG=M]rvl%RP/b.4xrwz#OgzlBJ;XW|%1r8(_M^:Ed6ai,C+!`.agRFn,' );
define( 'SECURE_AUTH_SALT', ',{G4fn&bpT)=PcQo5FzqEAh wSGIX{Ov<114`W,9Mk[55L{K>E~E:Z)WO?D;hR4a' );
define( 'LOGGED_IN_SALT',   'r_YrwVG1nt*G>_MpAK7Jzs qCF(X8Y~[eik?_`sAUAzevTLDFDFBWZy V=mw?xe%' );
define( 'NONCE_SALT',       'Fj;C9zeM#krkZ<Iam~_$-$m[|cu6fSOXrFA-O1`S]}HP&l-Q&]G@`Y!Lwkpx;/:=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'SURECART_ENCRYPTION_KEY', '8aHK!J,CzBo2$;;28(=c;#@o4#d/A}PQWpQ~c$n-aVziM#tlxLuK=+HrN(|lIRlL' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
