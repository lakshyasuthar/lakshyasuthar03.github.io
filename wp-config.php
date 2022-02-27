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
define( 'DB_NAME', 'site2' );

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
define( 'AUTH_KEY',         '5%>t8+J}L,9NY_L3%LlIu#va!{fZHjZ/h},[pBKYE@~0-qjz%g2YmG7k <%K$QgX' );
define( 'SECURE_AUTH_KEY',  '{:e;)9+LU=%%!$No5n2|Z8OdIioL1kmK@|$b.IAFTHm!kmMY3b~ucE[5AtRjI68~' );
define( 'LOGGED_IN_KEY',    'BC~ZPiTRT-.zAK m.tZz&7fWxrWoteu~T!Q|(w%J99cJk2SR*7RiIsAdqRBY[ps=' );
define( 'NONCE_KEY',        '=~{7Z~(``ZDLK=a?dRi.rJOKVg{}(%eF_ NNiI~MufW:l;BnxYK2gtP3~gTgLrCo' );
define( 'AUTH_SALT',        'WunoDlgP:S#7wq+(Fc0lH}t7[`w(aaIus].ZD|w}rP ;^7Ct!i)!YQ^_;wvj#+>k' );
define( 'SECURE_AUTH_SALT', '{|ukA,]=@KL 5O@Q4 w:!ef`jYuU2k[~M@~a4sZ_7FN2~}oAE58x{`_OK`Et+@so' );
define( 'LOGGED_IN_SALT',   '7bFNpf,*7A#wZwlhm-6wP47DQik~K&A>=0.274Kp@}QhHUjPd9<KaTY>2(gVA.7L' );
define( 'NONCE_SALT',       '}9l2:N7`B71^PWeb3M^:~i3;TuzxpjofC/,bLkyUlAUs3,b12xIrG$T}P&HTe&|-' );

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
