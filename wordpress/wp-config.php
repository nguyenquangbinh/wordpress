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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Q+#|#Yu)G+Q;%i_i2fPQt|.Zg#vCgsY^ 2whq/YY]a30b{$:f!o^`](}nLaaTUyx' );
define( 'SECURE_AUTH_KEY',  'cfeyxlqtkJ/s=dXN<xU@^x4-+C~MORHPth,)E%evM/_>7q(7@f4W`z@(<~YC_W&+' );
define( 'LOGGED_IN_KEY',    '$yrIwV28Z]H+kd-X2Z;fw?G;=[ld>G!R(Y6`m-z2B3oQUe=PYY/[tw22S~+t<F&D' );
define( 'NONCE_KEY',        'n(gjGU4O)F4i]>-cNzvesU6&KdS%A;<G0 TmPkj>XB@FuM{3-$4&*zU=50(Yx,ZK' );
define( 'AUTH_SALT',        'S#5H]Dcr7Gz34~/15`FKJI2s n{*#*+~O3Wc(]8WID:eQ2(<Q{9jbwTnmN$)._ar' );
define( 'SECURE_AUTH_SALT', '&1(mdm3r$P$Cm`Tr Hmw}JFJ>uB<j0o=!6^<YQ7Vq#MA2~srNpQj?}Q!HiqE,B(4' );
define( 'LOGGED_IN_SALT',   '9OAg<oP^R!t7sp>Qsaa7Y}Z`ZK=X*QGP+*tz_%dCszpuq>v|Pf(Buvx1>S<du.}|' );
define( 'NONCE_SALT',       ':l2zm4p;{U$Pk?PAh83UQiKa_z:+e34_S7V/9v(1K;!,NnCDsK`Ky)%ZLGx(yW:R' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
