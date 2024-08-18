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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '(p$]tgi(bZdS|s0G.&.vJ]*s}+;fx03HZ,X?RGhW!AFZN=KLwS{EfFx1sDKOeQ6P' );
define( 'SECURE_AUTH_KEY',   '#ByeE Ya|HNQ_+NAWX+]kyW~.F4>Q~$Os=ZKwc!y1!l^^i+sld_8^;rdJ1:X|zY%' );
define( 'LOGGED_IN_KEY',     ';2JHnDvD-gG^2%d>pH&@A>#_#3^3way@WG7AF]Vr-j6jQUi5)e9_#a8 4K(v)dy-' );
define( 'NONCE_KEY',         'nZlk9jouKWr0sKlDe?@# !jF.#VC5PHhmrz >|~hm~yYLaJMUe(Q54lO^u/`w-GR' );
define( 'AUTH_SALT',         '4K]zMjSd$}2e!T!1?uFz0vKXF[}N^$./+KL^sd}UErP%c6oNL9 1Bg=USH4i}zdG' );
define( 'SECURE_AUTH_SALT',  ':p!;.#[KuNf2VE$un=6>5(EbMN`Sa%/Aiu{UbW2kDH,L#HAw5%4fw|$GO?tHwhMm' );
define( 'LOGGED_IN_SALT',    'Z eBJwY}V$Q#MxIy{[Vwwwm3bSO^)`Hg/(55HZpebWlw!C>~Nf@X?i5@8nq7;b0m' );
define( 'NONCE_SALT',        ']S/,2Xj@LFNZ9K%pwSv#k8{*0g$_OerxG~VMS$)!s(biV_3J!xb~xCxZWRE5A|bi' );
define( 'WP_CACHE_KEY_SALT', 'QIo`J5>oI(&$Jn^Ftf+*Y,,EtXc:SJ` VQ4>@[eNm1J2N^btqLFtB_g@L6=[<vK{' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
