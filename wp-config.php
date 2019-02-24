<?php

// BEGIN iThemes Security - Ne pas modifier ou supprimer cette ligne
// iThemes Security Config Details: 2
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/wedostedvn/projet2/wp-content/plugins/wp-super-cache/' );
define( 'DISALLOW_FILE_EDIT', true ); // Désactiver l’éditeur de fichier - Sécurité > Réglages > Modifications de WordPress > Éditeur de fichier
// END iThemes Security - Ne pas modifier ou supprimer cette ligne

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
define('DB_NAME', 'wedostedvnstep09');

/** MySQL database username */
define('DB_USER', 'wedostedvnstep09');

/** MySQL database password */
define('DB_PASSWORD', 'Julauluol82');

/** MySQL hostname */
define('DB_HOST', 'wedostedvnstep09.mysql.db:3306');

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
define('AUTH_KEY',         'OEj85ZNkrDNBWZzhRvQenom8KV4Hve9W6hSt4mXtxbsNI/BKWx28y9T5nqaP');
define('SECURE_AUTH_KEY',  'nMtsn/+P1b4S3wcnbuTJinOvIo8orMwzYeQo2LC5TqygtePHFvYoe494BAGO');
define('LOGGED_IN_KEY',    'scs6UN5O33mnwmErjoqW1LYwG7IsyGBsmNaEv24IcJQf7FGruaV33CDzRZMr');
define('NONCE_KEY',        'HU7g37l2FkTE+M6P66dsvJCP5VPlSJyfpY37WaaShVh8zKlMXC+rjJSbF4if');
define('AUTH_SALT',        '1Njd+C9nWGMtjMtZpj8tI/q03liseNE+ykNzlHArIxSLD70wBU8MzwMwPiYR');
define('SECURE_AUTH_SALT', 'qpa4i83lrwsdXwx/8gfzPG5HDXdCsy9hJAx/z+EENcYtw4oZrtT3jR4kUJKI');
define('LOGGED_IN_SALT',   '7Dza816+Xo/T1ZW9PaT6cfLfFdBvZCt7yipCd/KldlzEE3ysnW7PORDIz6Oe');
define('NONCE_SALT',       'RnCJSbUzppa8iBkvSxrpxcxfOgLOuDTHycJcKJ5rhuVK3sLTyRhXxGrlBS5B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wor1440_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
