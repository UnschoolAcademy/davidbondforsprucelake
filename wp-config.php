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
define( 'DB_NAME', 'video_db' );

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
define( 'AUTH_KEY',         'rY;JPs`}_-W4L(M6ivS2tGWRK#t7VoPkZRD~Sd<T &a8@~s!xerS6+y7.SL.C-a$' );
define( 'SECURE_AUTH_KEY',  'TuFu07fYB3@8^$E-91L|Q f>REKsi&#WuMc7#g3BlbDEHbZ3:s5rX:S6=_A5;a3w' );
define( 'LOGGED_IN_KEY',    'E*@j>7<0EJ5w##[q]Sjm(xi=Bk@4IjQwJ^#qD]5>M/k?QQgKdjh3{Ym1SX5YW8+0' );
define( 'NONCE_KEY',        'H6.4y6+Hu8;Qy=/X:/u(UwGVcM3{d$QRW92YHuxU@%WO s6kVZV(0wcnEO`;SPl;' );
define( 'AUTH_SALT',        'ix(n#wpc: .Da&=Hs^=9T5_C|p?v9VPwgyufct]Gi*0n&,I%@Je5smrI([$^rEC~' );
define( 'SECURE_AUTH_SALT', 'Tr=P_+/Nb|+Z0A8R~Jk9aE(_8*{Gz]Y[w@oSN^u873xjAT0B/JmJ|yY+8s~f2/76' );
define( 'LOGGED_IN_SALT',   'SMx@fcl44jnK_8Y;ltN,Y$69v:dwr%7p|EDr$]fhvha@>>Hqsr(&d>H4<ig2#^4$' );
define( 'NONCE_SALT',       'CKjkh~P2+aI<#-gCno|IJa*nO:U/Kq|DccD1cgN+*fzJI.2;TH+cn2[CFk0TNi#N' );

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
