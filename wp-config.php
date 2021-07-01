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
define( 'DB_NAME', 'sist0367_wp796' );

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
define( 'AUTH_KEY',         'ignaphrlcjee7txbyg27glark9bgmz6crqnbhd7ychaldjasljy2dsdq3lgaapyh' );
define( 'SECURE_AUTH_KEY',  'sj5wr2yikshktzb9jovkd3negiqfay2r3wslj0lsmwuh0gyldr2uz6kxn9rfjd77' );
define( 'LOGGED_IN_KEY',    'xko1zzxbgvdi3wxptgynqqg0c3qxmqyc3vtv2sf9ecljftglkw4e4hgj0i2ye3xb' );
define( 'NONCE_KEY',        'glajjwse3k887bzsp4lllpecntlih4hhqwyrhis10alefwda3f4ocnqj4vuf9if9' );
define( 'AUTH_SALT',        'avvqoazyudsxbfwwpvhz7bqpjguspf1tlq41nwm9mqgq8qm6ip3ii3ulklt2epsa' );
define( 'SECURE_AUTH_SALT', 'silttn8efjfclku1lgku3vhxs54ebqwfftklk8zsslmolvwy8hlmh9zkyscj5w1s' );
define( 'LOGGED_IN_SALT',   'x1cb7q5b8gkurvjkuijsajamfonenba1hqtqazgmboncvioeti0mg8fu3tzeqwqi' );
define( 'NONCE_SALT',       'iak7ga9cijuxabaveozrcyno2rboqh97zswkejgoe2juc3sbvf0wr0skkx5f1fmn' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3x_';

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

define( 'WP_CACHE', true ); // Added by Hummingbird
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
