<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('MYSQL_DATABASE') );

/** Database username */
define( 'DB_USER', getenv('MYSQL_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** Database hostname */
define( 'DB_HOST', getenv('MYSQL_DB_HOST') );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+                                                                                                                                        [38/1870]
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7i[??P.Q|hQjU+Oik%gkl?+zc;&:`,G#.|cPPDZh:a=h3g*Z@JabA-%zx&2,RHy|');
define('SECURE_AUTH_KEY',  'K*PmK=4_!bc?xTo SYfaeR[La^s4I&;J!j2Aeq:;N*CCkS5R&|[CWd@-R.+C`vxQ');
define('LOGGED_IN_KEY',    '|qFmUikPLtAT]]%^8JO!LxlcHyi@*%z*un=px8_1+3 =2vGF8d]pLNje0:ADG DO');
define('NONCE_KEY',        '}208G,lNgEPQ#zUH.snBLGh O#-ssB+G5!f?qNqm6,pc3+eqP,yiI@+m-c[2P]h2');
define('AUTH_SALT',        'S@|SIO9]8vWi>jy=F2_AQMFN,E0W5N[Z@R252Tt-|VIx-9^PU?$aC>P:pcD$}45_');
define('SECURE_AUTH_SALT', '{/g(a&|:0/j_:P>X?ksSoreYG:4x1cg-yA`{|F+!U7w}i{/n+2X/]2B@GrEy>I],');
define('LOGGED_IN_SALT',   '9l]:nhgH}Ydy07$|6hF6).{eS+kJRu{/CK9.(G,V^gH< :gt{+Iw~WWE-xG_u_mC');
define('NONCE_SALT',       'Y2OerSHWI1&4*nQ~-MKd6N8_1Zj^(/oFM?ER4|N7!>Dny|X-0|*:G5ij+7b~ub!F');

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
