<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'snatche' );

/** Database username */
define( 'DB_USER', 'nikunjgosai' );

/** Database password */
define( 'DB_PASSWORD', 'nikunj@/123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
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
define( 'AUTH_KEY',         'hz>mzgRJuV!Hl|thabSnN|A&GvkT{gli^*((X*^ZEOOchS!H0WFJ#F1EaD(i>[Ne' );
define( 'SECURE_AUTH_KEY',  '*.X |6=0e;~aklATC0h.# ~d>`YyxQmQ3G5OYJYKU*D?@XA6Rgr|UE_1=,-<m8~O' );
define( 'LOGGED_IN_KEY',    '{nJJ4q,=jz8Hx}!*1tkG{1&xN:a]@PJ|&mWmk5O?muxrUjcoK>|Vj3Z8YQPRy+eJ' );
define( 'NONCE_KEY',        'ZZY-41RN>H^z.}X<OWrI#NKuMXyr$1gb1g62F;D^,e<7Jiqx5=/z6zr}MYMcf,Ou' );
define( 'AUTH_SALT',        '`9G[&mcR4w{k_F0U8z%D|EUt@a#SDU^Rd>iG5@2HT9)WH`3W:Z|F-SyYe/?!u9b?' );
define( 'SECURE_AUTH_SALT', 'Qd 9=42=5qz4m:<^xY_0tm8BiMVT7Hb$)mfp|!xMUlh1?C~Tx?.=Asa:GW&l`,0{' );
define( 'LOGGED_IN_SALT',   'QS6  B.kdPmBWn&6]omY>4F_k<d0ISQwPyj(^#CJnd_IVwz3~nc]:Bv]NUZsoA<v' );
define( 'NONCE_SALT',       'Ja 6$5f@8XBmm1mzfx)|M:oJtp,68~C|Y{5e#bO:&cW??e[}7(X[vyMPo_0/MVnh' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
