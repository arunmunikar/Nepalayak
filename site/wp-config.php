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
define('DB_NAME', 'nepalayatpeng');

/** MySQL database username */
define('DB_USER', 'nepalayatpeng');

/** MySQL database password */
define('DB_PASSWORD', 'rdtyughht6AA');

/** MySQL hostname */
define('DB_HOST', 'nepalayatpeng.mysql.db');

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
define('AUTH_KEY',         'czZqCAURy68d5AoWCTg+jummx7k3i7UNKGXWjw1Z+fxXkqHac86AJHu45TZ2');
define('SECURE_AUTH_KEY',  'JBZASIafblTlsPbBKtcBZLIfsMTpwIiuxGYNysakTPDox+/xtnMKjZZMM2L0');
define('LOGGED_IN_KEY',    'i1xMG/2WtYfX4892Iv+6Ceq42fQDvsmIDz3aPkzhCYBofD+70WLUAgOFowMH');
define('NONCE_KEY',        'UrPOfTlAsRd3jlxSdZKgkWAOgnXACYld9KIicfLWi0hWB2BerK0J84Tg+Emm');
define('AUTH_SALT',        'p6On8AUhx+U6Z9FRBJPK8ADrdkgZpTOmrG33QbAzPxpiqAeRplEixrDtJF6A');
define('SECURE_AUTH_SALT', '8XKL+2U7Pz6qrDV8u5MoKUcrjJsE/4Hv/DY/I/YyYJzTLhduPOkayTvDsiUL');
define('LOGGED_IN_SALT',   'J58sln4nFlc9j8P4yO5F5quWLT5Wq9J0WfFFTxGkOsJduVgQEv4u0o4JuRHF');
define('NONCE_SALT',       'N4IBS9/Pw+DOJd4PsOZDLwMI1jDinFSuaD7y6DqZqq/xviaoInx1bM4G5xUk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod163_';

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
