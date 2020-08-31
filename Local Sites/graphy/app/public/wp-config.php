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
define('AUTH_KEY',         '7+Y2/85Xqw4GGSqPX6jUvNT5indV14k7fZpIC9poFeXNozH6nv2VezLZdr+u/weFKompZDt7FhqNBSnMvKCwlA==');
define('SECURE_AUTH_KEY',  'uCbR7efGsP3FM7CwLroXq3xqQ/niVV6zjZctq+PQmLqEdcp1XdFAUbeB4YbZR1oT17tqSaMdHVzzoKdAQQ8N5Q==');
define('LOGGED_IN_KEY',    'nEwBriOdZSBq2FWnS6l/rPHYUf/+vXOXP8Rmr+4QXj27WdP33eTftCYY7OBoZT+U/KYk8Ecluh2HZAWWoZNaRw==');
define('NONCE_KEY',        'dOBFaT0Lcu9s6+Yfjre5K3ZkeaU+hI+pUaorT/jM2+2ssd5qGrQx1tVX/5c84MTCU/oz6VvhRGr/CUSj8RS0qg==');
define('AUTH_SALT',        'mfG/pA6KYUOtPdcpzwS73mNLqa11W0mFfWnyspZolqdjcMjR7ZO2Fe3qIIeeumVogZpw/1s1TI8NNq3evYPONg==');
define('SECURE_AUTH_SALT', 'vbyvXHsGHYUtMQ2iLiSvIx5INLC6XZoXDkq7k52U8xBQMJU2pjptiW5DrSbAZyq7NEnoJEvWbbLv35dAllWRpw==');
define('LOGGED_IN_SALT',   '+jNw1rmNXBYbsBQbE12UEbz8EETvXmDaMhThDCV8Vb3cXrUn4PTaY+vZeuG0dRBiX9ahf85fqoanfJIvSVZz/w==');
define('NONCE_SALT',       '+CvxXBBVutQEddFaYe3tRXR5TXJ4kuPyq7UCaWcZyNOFg1YOyG0s2tGzGFqbIkwS7mM2T17YjidE82abhCeerw==');

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
