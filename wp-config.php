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
define('DB_NAME', 'pmartind_folio');

/** MySQL database username */
define('DB_USER', 'pmartind_folio');

/** MySQL database password */
define('DB_PASSWORD', 'S8q[v-66wp');

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
define('AUTH_KEY',         '6nmmcdoxnhsxnkphovygjdwdcfygcrkusbhwwvnlvvmc6pyzivr5shrjka1frg82');
define('SECURE_AUTH_KEY',  'ocn8oe2jk5p97pk1bwceymfsrwdideusempkk0kzhwgl4liw9orutrqyf0lwn50l');
define('LOGGED_IN_KEY',    'redhffaszbkm2ier9uwod3hlzpijm6ssri9fwibdmldhgb3ck90j0zi9hyczk36r');
define('NONCE_KEY',        'odjxhvqm71b9iozvieycwipbba6qlym5wesucdl92gjmo2u8wdnzvl0ozrqipynf');
define('AUTH_SALT',        '07uf5pt2vmhhgkeqkm2cf2vgprud200g1ot5th5wdgrbbywxz2x9iiezpdi8xow2');
define('SECURE_AUTH_SALT', 'fril9zu6csznhkoywgpfrte1ztedcttxdg19nprvewhf7epqtvf0efn6egy3txnm');
define('LOGGED_IN_SALT',   '3wyjelvit9lha7p2slpgrnuwn5ymfkg9lvtutyw1bo3sjrui4s2bpfatel7cogfv');
define('NONCE_SALT',       'uby2hiwziqj5pl48nc8ixmnezjf4icnyodjkcfi9miligatc4ajjhdqsa4riyofh');

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
