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
define( 'DB_NAME', 'mukminapp' );

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
define( 'AUTH_KEY',         ':aD_S&e4es7m_T|QZ,y~1D6HNG #IW0[a{Qm9k!oCh,slS:M #~%WUB6Dsig?6Af' );
define( 'SECURE_AUTH_KEY',  '+rl-.JL7<f`aL.r4Wl@OmQnyE)LgJqm<unegG>^t 5prB(~.p9KGmVJjI)1w#J#)' );
define( 'LOGGED_IN_KEY',    '.bT9+Anlpa~FsuJ4|QY.tK2i6W+e<Ko5kM~ip)*$MxXA,KyO)j^!-0*TZ?#NLBSR' );
define( 'NONCE_KEY',        '!; K`^&GA#!M,WXV$FTQ}e0eA%W_B)AJgfSHB_W$#lq+@&5mk7.5IPLG^2V-L16~' );
define( 'AUTH_SALT',        'ue}0g`Cj-_&9/C`U2XUazson>Jr cebUV$i;o*QETSn=^mu!w2BA$a0>Me:%ilTM' );
define( 'SECURE_AUTH_SALT', '1gu:;>eA]:R]g%Ld_cSY=z_:ZgFP-.NK-x]b]=;JWHg&Qf:^9)E/ed$5|FzjFp?s' );
define( 'LOGGED_IN_SALT',   'J#S[uY1c:mE[a<2>AM@@MB;_;@XoA0?y})BJU@re~;fUi$;/-Z9vfG4pmuaznIdR' );
define( 'NONCE_SALT',       '^ g/j17sOaN,A!|iV2^8N:>sg:*~g7V:M~fHNlDMa..8Uv%[~~q3=#=O8PXUv/DT' );

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
