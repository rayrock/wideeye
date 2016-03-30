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
define('DB_NAME', 'harris1');

/** MySQL database username */
define('DB_USER', 'harris1u');

/** MySQL database password */
define('DB_PASSWORD', 'wideeyeclient');

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
define('AUTH_KEY',         'JrgYtij9lgFmrkABDBTRp8a59jGpsHZhY8htAI4woZu62H66PmZu33kW8QrIOhnx');
define('SECURE_AUTH_KEY',  'oKDTumIiHctYN0hZnmgujWb6ZZX4PDIzHVh7ojFXOz0KJrqtm54IwjOkFw27RI2R');
define('LOGGED_IN_KEY',    'qGFl6ubPMuUwZtk04QOPWy9g438QmItezyQZEuIBQgQM5gW9QfD8rEnOEgV235Nt');
define('NONCE_KEY',        'OofFaJ8gY6SVuMXtrI0Aax4X9juXctwZNbTyqoXpFfM8sLV9Zc6JgLRNjBpoCTU8');
define('AUTH_SALT',        'SEdWe1hnR9q4ITSKvRV597iMHUjwJV0aRtXCjX6Zh2EkNuhJPv9bMxn1jkXyUNAp');
define('SECURE_AUTH_SALT', 'Zk1uzrGqsyeaAabUaBKaeLCUbV3ng0CUoaNMZIi7P2bG0ZJH887zZkXMmBxAsDyZ');
define('LOGGED_IN_SALT',   'ez7KiSKtrgHfzv0TelbEhSkQNROkbsSq1bsex2wjMI96IbCfc9cSxGQnJvCp0DG3');
define('NONCE_SALT',       'XdWAJdgcp5I3Otws49jOUobtRc5GrgmguZyKkCh1mt0yG5EEYrxocp5CD9kagDO4');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
