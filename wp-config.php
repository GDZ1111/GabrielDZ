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
define( 'DB_NAME', 'gimnasio_db' );

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
define( 'AUTH_KEY',         '<mIfK(Gib6C1sW0!U+ReOD8MKB4`^v%v],mpvv_k:<~3l?qj$b >#TPUZ8Z+)UV(' );
define( 'SECURE_AUTH_KEY',  ']v<[!+DAt)RC. 5F4Kbmr^HX?2C$sAW_WSf72f^,gSRl,LGyiD531Gvx50}7srQs' );
define( 'LOGGED_IN_KEY',    ' EEls;Q4m nCP?J?6U}pS||lZQW=fy! XB>7p*G}sPG?bYzj0W)NqbsSAbP^7hn<' );
define( 'NONCE_KEY',        'DcP.&SyY-^!BA^ReEg_T_7`LaZRB@$^:8v6sSBQ|+5ZAPbIBqF6I_-?2BVV`Xr0k' );
define( 'AUTH_SALT',        'W1wG(R6q`m?kwW3<>Xh#}M9/0m?Wm<?V#_dS0X]FR[2T gUs)pY-MHH#boBw%!Nm' );
define( 'SECURE_AUTH_SALT', 'M`HnG9|&,8H9FM2cP1/9(o?3dS8fBxN1Rhu(Ch7 R%D!W_j%xE=VZ4>`J|XVoSP(' );
define( 'LOGGED_IN_SALT',   '%sQaxfzF>s8Em/_FQjZ5lh& %,VOUD0tW7u*M.3|;:B2w`~x~6TlW(6I9+KPl4IC' );
define( 'NONCE_SALT',       '/%f.1V|Z0uIPTbgTJ#9.{+B=.H+1O|^8_.>2>CZ>i+|I&=vm*sP+Xw$yr~Mng5)n' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
