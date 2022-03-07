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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wawelska_galeria' );

/** Database username */
define( 'DB_USER', 'wawelska_galeria' );

/** Database password */
define( 'DB_PASSWORD', 'galeria' );

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
define( 'AUTH_KEY',         '^[r%Dq0`#%(!{6N,s2+9eI#,^J{Y-i]YAL{D=*!>RN?$`|lE9.|aG*q0`H2u#*?!' );
define( 'SECURE_AUTH_KEY',  'G*{-rWk~g#ProF/8kMxVL!{v}!RE!upu,#_;]e_sOsD9.M8,/]%WBf~m}`l*8O!P' );
define( 'LOGGED_IN_KEY',    'GTy[SQ2$hD5t=0fp8)zG)8Fo2.r3}~=U_8TpH/_uW,v$d_H5Wygx3:M:t[]t|tpD' );
define( 'NONCE_KEY',        'k$Sh]bIzkq_(4Rg[{%FT4MDPA$L<<5iyDR3QIM>bUn>9]kY)>/D4,rAiDq}SXiL~' );
define( 'AUTH_SALT',        'm0:lJ~TgqaX&,v`C-v}HccajA(X dBGQFp@pt7|:&R#6V$zM5qaLbMe0IY|YtefB' );
define( 'SECURE_AUTH_SALT', 'Qb&Ef|*g/pSx}K@&#&6&@oYr}awR@QZ*^~Pmo6;OeD(4_iIyI?BnGhDY%v@crjx!' );
define( 'LOGGED_IN_SALT',   'PNd/Ffnk#&%GYu^8w:e}{5lLlz~cPslu2W*61NZcEGtOCxD&&zQ]ykW-FiU~P9Mh' );
define( 'NONCE_SALT',       'Y(f^*e.QvCEfZGdAv:(O4YhC/BKVlcZOn856*g!Ecf8|ln!2~H/=%;]L+^g%)_;D' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
