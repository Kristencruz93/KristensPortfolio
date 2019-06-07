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
define( 'DB_NAME', 'Kristens_wordpress' );

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
define( 'AUTH_KEY',         '40=4r6hYHl3} ZzoT(1yvWgJxW961(wPI;A2~:/@A5/KbCptND^ZNj}b%Lg_x.0j' );
define( 'SECURE_AUTH_KEY',  'Ao%k42>tKEbf7U#K-WA%0Acj:W0o}HJ9UI/PLAK DC_!_aJO%L=vxRgu/;_X!^H;' );
define( 'LOGGED_IN_KEY',    '$EI>C0Fu/r!]`02ZiH`Jeh|.@Mo-ee)Ha$Ww7[r2MNdi$T3u,^ZBf{[i9By3YZ4X' );
define( 'NONCE_KEY',        '9r)7/.YoID.c6Guwf]w4dP6mQ?G&J-#pTPN[c)nYT+%a}h55ke,SH%=}.$+)``T9' );
define( 'AUTH_SALT',        'F?P0pFh?o?}0Xd3v&g?;=PtXx[;Sf.v:Emc IEj:_|g:ZOrm/xDskFGw1`A5%9l/' );
define( 'SECURE_AUTH_SALT', 'sE%foDOS2-79yTweYR7*_?R6GT:j&@BI9VWqEV1pV];@k_cD6aAk>Jh9H}k8_(.T' );
define( 'LOGGED_IN_SALT',   'NxpKb,e2ExP3h*&-%.a|cL0Nd%uR$3+UBt6gVvJj49!<^U$q5hOQb,*.=t$nQ$oN' );
define( 'NONCE_SALT',       'g9jj9rRkF );#N23YA;]0xlPFA-pZspRR]:*>$4G;hGD1ViLA&P ZblZ]OV/t^H7' );

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
