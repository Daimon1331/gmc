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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mebel' );

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
define( 'AUTH_KEY',         'qDe-h0)%}Q?oJy&lIAWi@<Sq9NjN 5Q|?YX 1/$-kBg>L!]XpNL`QhFmG#7BBbAy' );
define( 'SECURE_AUTH_KEY',  'nA@N.{e<^9<&0u_Fs68b<|0e@k45C F78P~BrX|.jd|7ACiZ&FcqeM!?*soEx3/0' );
define( 'LOGGED_IN_KEY',    'xAv0h_7<d^~;l/3]{{r3ro,T&4kPT<C%CfU!u2&U%}=:C,g^zDfF|i:F_XJjr*bc' );
define( 'NONCE_KEY',        'B<zcDRKL9yD-1<*(]WX|qf%</~Y%Ujqm:Eif;u^|e,C,X[Zm^`Vsb<tMj25Y*&5{' );
define( 'AUTH_SALT',        '>wojEdUv8:2SZJQF K7+>!~zh9I0t7j*Og.P21zJPQR8fk,n-SS<*rNtvYtKzVto' );
define( 'SECURE_AUTH_SALT', 'uN+G+bt9|5Rv[D%9+nhUtb50Dy!1fJj%ei(sVWkcg9&$=9q0YjzWI8<()5RR+Q>b' );
define( 'LOGGED_IN_SALT',   '%]WksKQ@Rq8g69zW|r]Td4ukxWL*xy&SxVwg.T;?FeXmI.ZG@kfj-C.._}ObQd&%' );
define( 'NONCE_SALT',       'WbmJ/Skgs_#e:U4FfrbAiM=@My=}S2A*u| Xc9x,1C eM@&Kfioetz[v}`oMp _e' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
