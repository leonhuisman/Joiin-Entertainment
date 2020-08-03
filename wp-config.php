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
define( 'DB_NAME', 'joiin_website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'QPscDK@jv7ksXl2lo-gc?BIJ`eO@Tb@]mX7:9<d~Y%h/mf1L*^wlj@fPz&H{6DBm' );
define( 'SECURE_AUTH_KEY',  'y=_JA~bCi4kYg5>SP;;.cAumC4ayf_ppef`0U/F4_QVxrL#vA2Y}A@]o$$P(4%ZB' );
define( 'LOGGED_IN_KEY',    '{ySn}:HG,!7bT]aoIQ^>Un=gz>mS0zL~J;?l#52h4_I*Th&S(Hw2:.&$(-4l)ic!' );
define( 'NONCE_KEY',        ' ]/H{Tj1.]hsG0Px:,YP5#d2Rk&&odC/NZRjAe@wG4OV<Z2wLaui0Y?,yR UDvC@' );
define( 'AUTH_SALT',        'ZpPuK*M,-^:=G9t)XH%c.(:W$&|zwnT)gnQ;6OEkU@6r1 a44P@O_<b~Q.>E2=G-' );
define( 'SECURE_AUTH_SALT', 'O:?H $axk]wpS` T]CdE/2%/N6[a</AV.X&FO5:$:kiC1,kqYn9-._1mk`2Z!-?5' );
define( 'LOGGED_IN_SALT',   '.Z10V!x5fs]~O0vb$d4H/L;=E[g[BI-1E]5,Y%E2bKdI!%[Pkl`PU?d9HD S6x|+' );
define( 'NONCE_SALT',       '@}j&mJ:=dtzpL4yOr:]iftn__yNwsO{TYRGvTZUCTYK~(gVJ,HntG%Uadutx3DVN' );

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
