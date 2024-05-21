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
define('FS_METHOD', 'direct');
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']Q{&9O!5JP{,E3s7J~ bw&c%xE#Fqo59>jMey@o@+N)<bNika6s9<eeL0Djo[^_>' );
define( 'SECURE_AUTH_KEY',  'e3XHd8`@AO^JE5d`1P~P+2Lt>93xgBt&mU+nZn@kUB@R1WIr>yCymMPXer4.5=n_' );
define( 'LOGGED_IN_KEY',    'obQL%iwrq]&U~|Otf84_?oiKXV5%9aHa}`>Ra}6@W62]{sE+/zuNo7wB[jh?NU9A' );
define( 'NONCE_KEY',        'E|$?xR[{n`{:XUZov6B{8f0OOBZgHc<VG_6nooSy+fIwI#`/ai%0hS3-vf$$$:|C' );
define( 'AUTH_SALT',        'le1dCCbAPF=G!(cs&nUKdQ?KQ7G2+5=OO~D/a(M|K/w@&HHGvQY!XoiCIbl8C,3_' );
define( 'SECURE_AUTH_SALT', ')#%[@Hwo@0S]|.9iPKvCd@7)i)J)9 iMUlx:_=5~sNc2O5G%V%0:)5ePCn5Mov;Y' );
define( 'LOGGED_IN_SALT',   'sU@7QA&We8MwNT2V?{x!MBd!RTQ5{xtSURsVa|t4&aMN2rzl]${d_So>oCM}N0L-' );
define( 'NONCE_SALT',       'q6<j2^]#E~LrI;%}~pTAfYwy>wTz1yu 1fV[SG|UnwL38iie_metD8#j%lUqk*BS' );

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
