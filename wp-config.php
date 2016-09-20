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
define('DB_NAME', 'SITC');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'E-x/eH|j h5`_7l<F}4w|w)[}e]sdPjY24#Ksg7mKZ*Cj+LwCB+}i8Mrr/<c<Q40');
define('SECURE_AUTH_KEY',  '&8B7,.Gwo2|y$Lk?Wp5Vw918]`d%o]EP{;:ny^]Vf&UirdIneb]L`S)okY-5INu4');
define('LOGGED_IN_KEY',    'EB5hD^Psh`Wi1MbI{*Q|=QaMP~2f46R$xo%OwC<XnGZdddF#E`~vG3x4PQ&_:d7^');
define('NONCE_KEY',        '^gwxs&kYJ}a]%ppt<9:q@~|i`ZbFNe=~T_63S~dd#|CoXhvZ!Cm-5K?0!VGUK}Vb');
define('AUTH_SALT',        '~Y6$KJ+bEZ&Sks=KRbS]WgW/^lC]M!Y58yTm2O<bb|SJU>p/Ezq P}n?.d>X0o v');
define('SECURE_AUTH_SALT', 'Cw)$.em=4K%-1G`-~lf#8h2Ns_pz-/?r#+C7wTYX~_3mTz=T1U}+A[rp(FjKgc+!');
define('LOGGED_IN_SALT',   '7p a>2pYuBA5YwA6[;rFrkE=W(c+3z=*o^SlW4gbTdYf?LfWSYU |h3-(4ND[Y(q');
define('NONCE_SALT',       '0~2o+2PFT)ABg8cUC-IRX4&<bk3BDp8#T?rC4;grUew=d]mvOl-@M=}+yv4 b`^)');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
