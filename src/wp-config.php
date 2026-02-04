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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'liceu' );

/** Database password */
define( 'DB_PASSWORD', 'liceu' );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

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
define( 'AUTH_KEY',         'kMC2Z+Qwnts.!bZpOeOSaG 67 t*Da/rCXy0c9>P9deH-Nwu,yfK/-T`|CGo4wE%' );
define( 'SECURE_AUTH_KEY',  '<4U+QwCC+-qUt`YH<d^#I>,?),.!grRrtSC1b_7ESHvAorg!Dlh@a}@e?R3mtCYg' );
define( 'LOGGED_IN_KEY',    'nno{5[m0x`&|T}u85E<F{*AJg@1@bS!%$Mh7lhA]_!LO{wugX&P6w JpALA^v]wk' );
define( 'NONCE_KEY',        '>|ogxgf LisYnh?xLtBy%|sL /olO}!{MqB;W,inUt*ln8T$3fMH){kdXF+Tc,`C' );
define( 'AUTH_SALT',        '/TZ{!:86^8/8O$9l `[p::jwbR>m;1yzxXp2o+]o_ ^zi#(P][2xNw)SIuKvZNmH' );
define( 'SECURE_AUTH_SALT', 'u}B2;{n&l2ME7X,1o@vE]_qej|YRk}:Vlyy6^1_<fSgw:FO;of&`|-PGG{UF^*!;' );
define( 'LOGGED_IN_SALT',   'W4M.nLpryd_sH&9&|G6Tv]POQ}hgd2a)I~Nm3a{j!f_7_eUp;_CWZ:pxSS_h7BO8' );
define( 'NONCE_SALT',       'Df;)*WyImkK(3]}$YZ~Hm<P`AH35T9$&5=U]MBmA[2^QSw5_v|IITt[p%KAu0iJ8' );

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
$table_prefix = 'chh_';

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
