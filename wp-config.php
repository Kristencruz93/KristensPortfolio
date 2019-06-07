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
define( 'DB_NAME', 'KristensPortfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'XnuMlRA>=wE&BED(B4^0u*8ys}Y8*P5P};j4:R2T/}Ndz:YUS)X`-g7x{d.M59UK' );
define( 'SECURE_AUTH_KEY',  ':u1VT2eQ;fE,_OMe@ZZguHxus(4Ls?zj15U+mh>Xd@G?nRX#1;M^_z!XA-~4T)@h' );
define( 'LOGGED_IN_KEY',    'qy8e&Tg^Cg,z$XaylCV;|<`C5SlcIV@`c# !/EvV,]T8v@ZX%2.RXUXsgPF/^<@V' );
define( 'NONCE_KEY',        '9N]Q>M!:9L,zc]_:%F^VO1Qw3W~L-m~8u2XVh4)IiFG1cllDo};V`b<pZL!uGQa/' );
define( 'AUTH_SALT',        'm,L !o8u u!pW/J},4ih}MabC26vB>5.R0Qcr.QD$^%M?1o)}ln?tUJ+{2J>!V|{' );
define( 'SECURE_AUTH_SALT', 'Ud0oo/tVa7GjJ}6B$YOv,Qo(e~&!$2kw^x.tYI 1sw;/Mea#@hP<AR(Z57Y%Qsbh' );
define( 'LOGGED_IN_SALT',   '@45nBuWQ5~[F/Y0.3s?zcLc~?Et(X`yE& |X(X3dc+efG5IbSBHM2F[[X.*)NDhH' );
define( 'NONCE_SALT',       'r>+rJ%cEn9l|d b#~F!A1:3M<+#~t#TQ;lKAK.RQ77acr+Z2oB]@AsH}7$EiW^!|' );

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
