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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2niTRReZxz6PR2p/ui6KKOZpJqATU4qGrwNcld9fVXhF/3wrQtu3VOwvX8VWBGIwhf/DcXiQ/8FE6eXR8BEqyA==');
define('SECURE_AUTH_KEY',  'DlU6tF5rmmT7EzRuUMz8JOAk2vqBaVIGNATud/pwr1eIWBKDp2r7sLo/f/zlqNaqCCVlYcaV/ExsBGM5eC1u5Q==');
define('LOGGED_IN_KEY',    'yEjtR/6FRMsB1gan4Y1CWm7N8KOlxu8fYb0HDSdEIAp/ZUyEwOBmflnBLlfM9ef8Z66qLNYznBqTr9hbXXsUNw==');
define('NONCE_KEY',        'wArUFCdg+qBDLD94ATtiKGnCoDhHDwH6BNjrqgMoQm+PrDD8oerrbPBcLWeCuEPjR7VrxsdypSzlL4AvzDstsA==');
define('AUTH_SALT',        'WPAyEUsOwwr3XcIJc/lMaMRZdaXZ6r0W3d5e+Yobc+VI5Mfmf5iJwX6uQYua0hrI/DiLjKyzleQS7vEoE4gJPw==');
define('SECURE_AUTH_SALT', '61cEU91+iRdlBQcM8GdKnHHAmcuvfNw1C3GXkV90jcLxKXRFthHvi1aXcmQyaSNxvTTJfxCqGOxsAFgwLUGwzQ==');
define('LOGGED_IN_SALT',   '5sPU3+h8cfXLIymsR6davXJaNSgycjdqIIUf1as7SBBWu0JLULL7lSF0Gd74aP8IAfLwDoBBh+ApWuyY01/4DQ==');
define('NONCE_SALT',       'zawrdFMXfzaLg7l7xlDMcSKchRA8hGT5xrSdtXri6a78DvxdnYHedbCbE4kvzerdZDGUEkUtemRYsfc7B9Sojw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
