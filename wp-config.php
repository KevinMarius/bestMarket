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
define( 'DB_NAME', 'bestMarket' );

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
define( 'AUTH_KEY',         '8N)BoEFY}y8x;Bur!mA1+D,R3 5KR`8N;K=%;/@YFi[l)Q+x,I>QMx&cE#.ipJRb' );
define( 'SECURE_AUTH_KEY',  'L{wFl<se/_0iqf3{Nwh]75`dudANO-H5>DS[%L5vbU0]bvUq_Nk6jbwnyWP#>SbJ' );
define( 'LOGGED_IN_KEY',    'z9t9X$tN)%`F}5#]M3TvHu|=g?<r_*Ed@zt)_1KOn:Mq6b^}6OUGyYq(.<CSuOE(' );
define( 'NONCE_KEY',        's6D}41~gBNTtlP])YW:2KeZ@t]%zv/,aD%X1o#nwhX1t<TExj~D?<)^e28PBk=wV' );
define( 'AUTH_SALT',        ']{z99|`&$h[?m7;P#)>([vxeMwZSl~f2x#HDN5KKfcucH(GZ^hb,;x56^H-ye>E&' );
define( 'SECURE_AUTH_SALT', '`paad@*z}}/0I{u$Z|GO&$(/+pvG}R_s51QZk%HcEG-fOLJWz|<{AF*;7n]~ZVlg' );
define( 'LOGGED_IN_SALT',   'X,1o*E3JF.s[8UBkZA$KUHs4@qU3-r&X[/Q1]Fauc+VP<;]crs}{~2Y|HjU3R{Hm' );
define( 'NONCE_SALT',       '?%rd`&hD &D;O;8k27Bg7F.FL;%cOgOU)<1[jS&)2$zoOfcD .~UYxGWE~#Ol|<%' );

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
