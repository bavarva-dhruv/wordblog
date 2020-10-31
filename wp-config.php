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
define( 'DB_NAME', 'wordblog' );

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
define( 'AUTH_KEY',         '8?0IG^),t^VyLEK/|jKr%:ITc&K@Y>H=&NS))Nle4qR >*Fkel9lY.G0(gYAtwy=' );
define( 'SECURE_AUTH_KEY',  'fa) xz8StU28H|t+bQiFyRtUjmAv/+p@8L}~Ss`.|g7%7$r.`/WIob@Sk]sjHb!6' );
define( 'LOGGED_IN_KEY',    't*YN((w{}C<h?9|teP$e-LV}7~kyy[-bXh0C$.59oq@aLZ+4(y=ink-!h/xM`Go+' );
define( 'NONCE_KEY',        '~kD,(B(PzRoj[I6WG>Uj@s~V8!FVcq2Pn1 iaBRtWcHvsU})R0-*Y4 `-X>:~a${' );
define( 'AUTH_SALT',        '?;_;A<256q)|u]Z8e-Kt]K2G1[@VCL``3L|Y4xzbqR*!a%qUDwB``iw9Z#?p>GsY' );
define( 'SECURE_AUTH_SALT', 'Bd(7vhde_nf=RPwYSXZ%KLFqg?Ngbf6@hPeq|nSow.RR&|X#ZGj4h%^(r(5o:zGE' );
define( 'LOGGED_IN_SALT',   '`>~OmE$ryQJ(_;c$;7/CPy<e[Yfz2`o[:c~A#+e?~I<iH6w&(]L4K0r-kPnsSSVN' );
define( 'NONCE_SALT',       'fR e!?H)(365y_|L_8H5B>YG~6@$A*z(}*Uz54U5P}<jp4oQeey4@*6cX[s~*^RN' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
