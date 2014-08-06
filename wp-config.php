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
define('DB_NAME', $_SERVER["DB1_NAME"]);

/** MySQL database username */
define('DB_USER', $_SERVER["DB1_USER"]);

/** MySQL database password */
define('DB_PASSWORD', $_SERVER["DB1_PASS"]);

/** MySQL hostname */
define('DB_HOST', $_SERVER["DB1_HOST"]);

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
define('AUTH_KEY',         '0kBMWg|pE^V&5v0U|.V->n1m~nw|z-=ZnlX6&C_e:>5b!TN?LqzL+11EbWPV}&Mk');
define('SECURE_AUTH_KEY',  '+|j,)W?O*VX;J|Dh]}G7uU)ZqpQ >8i1j}=?bWL5 &fI&R<[)+;9ed*)q+{R149b');
define('LOGGED_IN_KEY',    'Ls,z&x.^`[c5bn2n3@do|{N>#,l!ANE!.e?isvF_6mLoi7(V^g;R-gx(+Ma:Z?%#');
define('NONCE_KEY',        ';<InrRGP@cy +4#Jxk>24-_s|Tu]~rQ6vzv%+| |&H46WnR,M)Rx*-MuMx[7n]6.');
define('AUTH_SALT',        'ig<W&a?NlR6G--r*|+G[_DZwY9dy;jIVf-AnBAA|:,+M9V(f()VIOf#8@A<G?&x5');
define('SECURE_AUTH_SALT', 'q>+q3W*+K7NcK:4Rl%I@i YRgK={}7]hW9Y5Pc;9)oZ=%YPR,_)mBatXLo)!F==L');
define('LOGGED_IN_SALT',   'v/}ZF:6Hd<B>5f0F_T!*+2PO$c4CB=)pE_Nj#rPD_?MoeR8=}w_ =G1.+WH7&-l2');
define('NONCE_SALT',       't$},6|qngp5*xQw&(=B=0Oib`4k=-1kL88w=G+@}|<dzmeSH)@of=f]z+,@{p+|t');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>
