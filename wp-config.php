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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '_L]!yxEHiPXo6m*ajoZad1A(+Ik,S?yJQF~O`{j`;k#b4{ xzg^ITBjb0Mp.<QI2' );
define( 'SECURE_AUTH_KEY',  'KZw>o_)l%i5)IW-~k-T!4Rl*rK,EeE~dLR#NfxZ!-PUZ#i]]r?bH}3~?4s>S33.i' );
define( 'LOGGED_IN_KEY',    'Q(Yu+g|^RpSN6ogn!FQ-BEl 8Q &TJCL)x);3duLa)Uu.VmpT0EdrCjA%%koBW{7' );
define( 'NONCE_KEY',        'z4g&,A*V7Sn;6-CT?%`fc5!tUb:CVyXYCXZ=-0aM+}jef0$62.NhN>X2J_h%{J=A' );
define( 'AUTH_SALT',        'O+-$!J34:{3.|-:vYZ=PLr2b252zMC@v:9nFG.!py1R{M_+^]</V:##e9#>C}T-%' );
define( 'SECURE_AUTH_SALT', '+(xkBQfu1^bfg)YX/K[g:-caGv7T3_-pyX^N}|``yX|<oS6:tmFqvoA89:B:K3y$' );
define( 'LOGGED_IN_SALT',   ':G{Y@`O~eLW+3$B|n?09-B|h6A^g|iz?1A5wf8ilT.qk)`l?b+8sap3gwN0mopt5' );
define( 'NONCE_SALT',       'JfE?y[!+9`k00hOktp0_JmkQ}k~8k+^R+{:R>:M[([RX9_y$RHF8 Ab+>~#Ea%?T' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
