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
define( 'DB_NAME', 'russellconveyor' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Jrcrazy71' );

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
define( 'AUTH_KEY',         '`;A<TmU[LDY#:v;wPGnKjHF2j^$<[/k]gO42PI~^c!XovBXHV.OM~gxUt%<{j]Oa' );
define( 'SECURE_AUTH_KEY',  'TW1.@,xk7HQ#X:|nzgV9`j5.Z2/FaGFw@pF@j,g-9N,y/@sMRX|<KYpMi)#cybog' );
define( 'LOGGED_IN_KEY',    'oL5D%@P/}m2p+2cB#5vlPe:^CL.GYT-kqGp0|-%AE@6GYca6!J&q~c{*@rA@+d`0' );
define( 'NONCE_KEY',        '{`:}n1=B=?m.H8+mUf8rBheE,na!8>#j^!$k~P8:~#?z+[5YzYlQ0stiEKvYTO61' );
define( 'AUTH_SALT',        ';nQ8OVYlV0=X)9,qbr0B6Nm7y@)%Sua1g5u,c6lYs**eJxnVSF_(Fk gorKH~!+Q' );
define( 'SECURE_AUTH_SALT', 'O]l~mczw;G#A&`2,u0A7o.,W$j4fUo<&X-R_l^1N!>4d]ic%s(Y,yBoIj%,f6z;L' );
define( 'LOGGED_IN_SALT',   'lq!VzgfCeu|`@|.ay3:|8wQKkw4R*2!mzX,7sN:)f-P^i,T7Zds|CJ8jXmR<[a4:' );
define( 'NONCE_SALT',       'S;sJOraF?*D)$S]C#r(w8TLg.4uNwY=_0X[<.D;i_j4u`P%we/wl{rpm|Qg5(p(A' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rce';

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
