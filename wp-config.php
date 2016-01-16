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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'n^JuUVu.}sQ3M<an`s8C7 xx(N3A&=GhOFs&v+r#+2qXXiJ%otNl%Zf:,3[.ixfe');
define('SECURE_AUTH_KEY',  'V{_$8]TFe3D7?R^=-`7vfE<W&,y]&e1U4k1Ia]{7G-91Qr~XZT14kdWEaD7fE}Ni');
define('LOGGED_IN_KEY',    ' bnb;L@_Z5namtbQT),@8.)6y.l5s-x_0hUkyuw-=uhU}.%!(|dn%>hzK~9D)mY]');
define('NONCE_KEY',        'Sp`Ixr;p(>#jYu+k>g5|VI08kf:,lmqTD%Sq;cV*q%T; <RESrB`J+#~sczD554Y');
define('AUTH_SALT',        '`Xutv#8^t[c#5H0DW8fkLLam70*rJE{|jhckUiP.{N8^U_l54byQDSP5WJaLPH}j');
define('SECURE_AUTH_SALT', '}+nf0vNw{D!@>g_hqbrJZvQnke,.t4+gRHT<eF9Sh+A^bx~{q6?Uib{,1~b%<lS ');
define('LOGGED_IN_SALT',   '`BuAWw:|Rt1s1SOiBoeYDn=O2JlBQ#Z5nw`)65?S#R<72W<zvPb!q*JO0X|569}B');
define('NONCE_SALT',       '#:D@rl?5Fr2CqavK5clTQq<)4+#3_bnsf+Q2k]$8Ia|SP|WP~6WZGUZhH;_}@[SP');

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
