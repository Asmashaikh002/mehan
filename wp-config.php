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
define( 'DB_NAME', 'www' );

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
define( 'AUTH_KEY',         'Jq~*:uQW8d9OA*z9fx{P#FwJM4u|Jnqcw@BN&%,XsEYJcT68Dy)<+o)1,yk9hpH6' );
define( 'SECURE_AUTH_KEY',  'rWb3+V;(c4k86@vHsLJ2[G_7<B,j&Wxj]@%H*8hGqU/4q89vB4P-]?Ag$@I7t7o+' );
define( 'LOGGED_IN_KEY',    '}lkt0u#@Q;*50f/tv/XQk&nG4YEvS*e]$VLLrvr!sn9khZ{,#}+LwF2RNNUtL_R:' );
define( 'NONCE_KEY',        'w$SFUl3TG.r#9/C*mw:9&d_m%;P2.Ki;c.H%(#04)e=oh6oEze<=GNKlU,W@!`)T' );
define( 'AUTH_SALT',        'j4=iclK/;M_M*$S1N Q?(RUR?D WJG]HLh/5_)}[>U)x:SR0w,)>|4R(/mhD]s!!' );
define( 'SECURE_AUTH_SALT', '<4.3@s/]ZV*1SPc 9cbQ5C;I0PL~m:wNUkSNR<!YX(I{hl25WDca&nflY!%k}~Vj' );
define( 'LOGGED_IN_SALT',   'ppmRryEQC./YjbQ7h_P78Udnh:BSJhM@_#&H~`(lwRLr_,R5`lxuC]9mVLM/9CwP' );
define( 'NONCE_SALT',       '+NZ}_t,+gPxCogAe7B#2>~RDo%j:z>@>Wo)o6A|_is7v1O(<i~.5j!a?9N?8q^pz' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
