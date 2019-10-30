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
define( 'DB_NAME', 'carlos-francisco' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '9552835eeaebba2f9536196dce73d5be0de0a09fc5de3e6f' );

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
define( 'AUTH_KEY',         'Owqbbu>^+sUm<yAKcA?l!70A4`=(T,fv*6XVH3o?NUa+m?<L!off|P<y!LBTw^h/' );
define( 'SECURE_AUTH_KEY',  'b1?/D1te.|ykgK.iODe2V-f#eC_5teKNM;o+49>vqm<h6d(>6:F46In|?5:Dj?kR' );
define( 'LOGGED_IN_KEY',    '9~6sM-}fu$7w=n(Ms~pf)8)0ER`f_u1tE7Ts$rsllNA]M3yl]~Q1f]zwxf8G}>z@' );
define( 'NONCE_KEY',        '@.+&Dk),+_&E1=+@@~{ayjPz@t;Znl0E:F*n~1{$6SENY[qYN*+s&G&g-ZA ByAJ' );
define( 'AUTH_SALT',        'Qo9b5eNbWps(9fZikM;D b9(e9?uGE u881@tIl2VwgTp0@bX(?+yrSZP`!/GdF2' );
define( 'SECURE_AUTH_SALT', 'ixnQdAs)8yy2e=;XP}pJGOu@-c8>-WlZNR{7|Ou3T*i?}>plVE;Y6Hsm&&SS}wnP' );
define( 'LOGGED_IN_SALT',   '-i9gkuWk=.AVx>L8u O!A6&5=>l.xP6Is(@Gik~]0BA}AtK)bV.]Q*7bXJ-*<Y61' );
define( 'NONCE_SALT',       'N`(s.boTgCszwhhQ MS*{7so1g>{kGB_C$%|dmE)]yW6Em.!0Wn;tJu0Wv=Xu:bF' );

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
