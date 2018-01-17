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
define('DB_NAME', 'eventos');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'YC8*~SP=uGB,lye+R7sxK{C/D:#!kn:zeU_h2c>UC;P(NVqD1b+ov]mO1PApXN}V');
define('SECURE_AUTH_KEY',  '03_6^4H+cR/dUdz<1C)7u2Z%~;KJ2}N:_Ug.L,FM/K~y`[=lR,}q$/Wk)eq.H=(@');
define('LOGGED_IN_KEY',    '$`Ga(]M&JWe<n hS,*C$fGMR2|_tq,X>7KPW#,,;lOVeQ6Gol7cx[DnCif/H+aPp');
define('NONCE_KEY',        'wZ.T( o5Q!!!1L4gykvNWTqG?}=CvGaAkLyH;8JBKXv2UPM<rJ/!%bR1,P~!`Mpb');
define('AUTH_SALT',        '`%_x8jeT^kIUB>uM[7R2Xj_e?KzyBo6# 5tH5ITxL|KMglu`>{8F9(So/b9Mh#!~');
define('SECURE_AUTH_SALT', 'VRz#-Yt;B5ss/50qLK:?nwz,L2vpERu*%X-J7tfIA%mLNBUO5ZMt r-X3FUdh/b,');
define('LOGGED_IN_SALT',   'qlm(TQzu3$=9$n?@JL,q!6wrpe(:wIw-D$q}L,yCb7 fwh /iT=:f5*t_#NFIbh,');
define('NONCE_SALT',       '^_u0C[YZ+>+R+-A)aN}@Y&&HHM^qo?#^F5f:9HDl[)7H~#l~L2H$)TX%$.Y`nMz-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
