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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'wQeyNqvvF+UY;h|c- }*4DR^f$:%H9=7%S+I jNM}o(bemOvh:obTr*1J<5bk.(v' );
define( 'SECURE_AUTH_KEY',  'R/wjIseElpx#P*_M)(%?uz</$8/m5JebEn^qMc#783XE<IMxPUQV zYd-oCx|au>' );
define( 'LOGGED_IN_KEY',    'YeoL,`po8O4r!OG`<DIAI.n4|)B& we=I%RC1B!N8N:bE{,VRAmp6sj)F_:5bE53' );
define( 'NONCE_KEY',        ':sVFlW8o{kkX`pH[r<EByx`EVXBo3(_w .K[FC4v T33a{aJU}uS5%[ep#6r%XTG' );
define( 'AUTH_SALT',        '4~:I`xLj}uwYwX@Yhli]u!co>hzyQ&R)<#@7FD| 1Vb#-l7uxI:WW6y2C*|icF$B' );
define( 'SECURE_AUTH_SALT', '>jbn[~H~mC6YNg116<cnBO1&+;?GR0=s*4WKgzTXEzqJx1@jbzG+M^=zCQ[4Bdm=' );
define( 'LOGGED_IN_SALT',   'Yf?(~<{nBg_eNO3IpEmpB/OIvL&FKnk(vuRTor_[Kuq,m7FvO3w-syw<Sy|_f,f>' );
define( 'NONCE_SALT',       'EMmN`vK!2^o4`Rz+(i`/7:|E2?9.NmbR E_S1*/ #~+pKbAN+]D^iD7uHFhT|@Dl' );

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
