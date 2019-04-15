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
define( 'AUTH_KEY',         ' d}hKb)Ol@nQ6.Qct<m*wwZFAr-:#&<<t,b2*ql]))8Qx^-ESJ9hyj/kX65oieq1' );
define( 'SECURE_AUTH_KEY',  'vY[dTc_rT,8otMT9[STNCKxPLG,Xs}Kp;p}qL_(kI]m|L`*|(VB1G^YXPf0?fZOp' );
define( 'LOGGED_IN_KEY',    'C7{abz@Yi;1[=x.pe>!0!CB)o5pQ~^<UTS4X`X=ZE:w+jAf^=dOs@Qi-GQNFy!@p' );
define( 'NONCE_KEY',        '2JG.AzbZwot-C< m@UGU<yc:/72NrT/%y2k /dLbg~>E4a|HJe<)Tl*Z!jWS)v3Z' );
define( 'AUTH_SALT',        ')%CMJ7,r!lH>Cf^}^[Ckq{a]vN:ml)Ji*>@HBSL%1-rMMA$BGF}1Wf@ptD2$;h)D' );
define( 'SECURE_AUTH_SALT', ')-O}9nEjA&3H38$_q;_1`pnSO{iG!~uE%WC5Q&ecn>g6aw*Rpns.2.|%}Nvv$<%v' );
define( 'LOGGED_IN_SALT',   's%>K2(C,hTZyc$RhO7L1BOPJ|UIf`wQ)|vmu7|DlDHb[ ~/WB7af/<Lq7liqh#1h' );
define( 'NONCE_SALT',       'gk@mEK}|pfsg|sx8hOdFRKexOUEiqte,ev!c/#S-d-#Y+ MK{u7aLnn@Tw8Wg#ze' );

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
