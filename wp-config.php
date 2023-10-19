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
define( 'DB_NAME', 'MEK-GIT' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ObsVo-@V{I8^kbcfA=LYM^|TGCIwQffwZXNja@bV=N%h}o0_RJMNy&s?!B-^KG]g' );
define( 'SECURE_AUTH_KEY',  '+)A.]^,;-(]3.6txIXzh73/z`&!3h|fB7yz6:4T|<BQ..wGYf6(7tug$f^49_O+e' );
define( 'LOGGED_IN_KEY',    'f|}OUOxzD2;N3g=WA8+gb-~t?eBk/mqc9vU8}<6cBoZq__ _;$Dx1UV==K38{-X2' );
define( 'NONCE_KEY',        'Z`H:JSzoSNtC:z)ZQ1[ELe8t!]kis492MSKjR(a$.J3P*W<@Ne[n!K]k,f!AFmv9' );
define( 'AUTH_SALT',        'VJCFJT3T6Lgz.EODfiP4]_G!B=.U?`ZFd^(-9g2o/Z4Vhli4;FaBo9Qq7n!n*e:!' );
define( 'SECURE_AUTH_SALT', 'Hn$Kwr)!t4F^g_kvqA{oJ]-6]h#ykgosXQc6gg?dqX>DQs21xZ?-6.6`@PesAS@g' );
define( 'LOGGED_IN_SALT',   'p|Q c=SG!Uf~yApM`/,l,iB5s|;hjxaLgJU6(::1sQ,!LS=gM6b$D~C8Tac~:f>_' );
define( 'NONCE_SALT',       'b.o(**5y4N}$GPHpf D^1<*p p2g+jOo$}vsN2U08L0V*-#{) (s4=vf>Y2g24&[' );

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
