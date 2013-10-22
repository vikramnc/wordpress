<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '@J&@{}vCahg`0jNrICRV7/e+|#(CDPd|V|IT<?r4?WK<7H-5I{KsxbCqxbJm-b}~');
define('SECURE_AUTH_KEY',  '?1Tr?!#g9y<em$%:5A92C4>(|$]`H%8mzh:962BE|N-r1M2V.fNtpinRt]_hr`s|');
define('LOGGED_IN_KEY',    '7g-Ix-GBu5Hc9~E8*X55/omHewJ<q+eX+=nwCG?]5/dpol%L. &*hU+ojufr74Oq');
define('NONCE_KEY',        'QQ-0;xMC_xDTf%^w>]60+fY:`Q{VV3>e>HuHjL5Rj8v&F,%8m77dru#+y{,A_,fn');
define('AUTH_SALT',        'e,,Efr?|n0Y+BK8qk d Qh_Zh/n1vwl08N},!f|;vnwcqi9J0xC?`n%m`mf)-0h}');
define('SECURE_AUTH_SALT', '5r+JmKB)n=e&R{UH2@G-5QB|1c~*l/g9P8(Cfe(]{mPdZCcYbyK`i&z5RSaJxt(U');
define('LOGGED_IN_SALT',   'a8mLy|:.$-$YUuA7nup-S;$9]~k7l!SU<}m1T,#1tO|L`rF)}+h#fOT2Pd_,[<dZ');
define('NONCE_SALT',       '<-U}RyHk1M:2oe!5q*m{}Cb&S3ykR?J|GDb)/eBA(&/YT*|P7ZxyqBy:+&W Sv(m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

