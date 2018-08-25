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
define('DB_NAME', 'wpstart');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'PmQm5e9j8q3fs8JX');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+^,5&6cX_`[5:Ql}X)&$i1`,fHD+Nf.J_5|2eL/-AWhO16A_VIZ-LS%eKuiP{o{.');
define('SECURE_AUTH_KEY',  'D0OtE7;&>vU-sEK*nyp!@Zi3MGe,Ln~_b#rlD#4t/{(_$WYOYx9NDhof,GL$It4O');
define('LOGGED_IN_KEY',    'S3P-=Yi&EclD.+ 3,XU;I2*v{<Gg/ACNVmQz9y;`F~2G$ZqXai6|bck@z<6fal{H');
define('NONCE_KEY',        'WkM8rQ{4$+sr)-jr~rmPov{^>nIFux=-!K3X(9nQ2mX.J)s42sC|2c-e?f|tr8YX');
define('AUTH_SALT',        'H85@<p>qbw#!*Lk{lbX9OeHfedE U`v#<YeJbZy-GT25K1]d)a1caDlRn+_E`ppA');
define('SECURE_AUTH_SALT', '&a$b#{TEjinX<$4T=::6T-${]Bm?X|~+gOjR]Dhq2cAoollttA&z2ytCW3b,mNlf');
define('LOGGED_IN_SALT',   'yQR ?h #H$^yUzNPx,+1$W`bz~:YCm.1+%]L%0X|V0 G=lwp#xYD5b!%w=Ux*&=+');
define('NONCE_SALT',       'LQqgfyNSxSXvs@^Z_i{l3){6q%7G{3nm>1q])<M0oTsPUs@i[QR3-*/DdV%.+ryB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
