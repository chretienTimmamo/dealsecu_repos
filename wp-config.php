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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/clients/1726c0e19d62a812fca7792215b7aef3/sites/secudeal.fr/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'iq3jp_WP611871');
/** MySQL database username */
define('DB_USER', 'iq3jp_WP611871');
/** MySQL database password */
define('DB_PASSWORD', 'rpsgvzsj1o');
/** MySQL hostname */
define('DB_HOST', 'iq3jp.myd.infomaniak.com');
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
define('AUTH_KEY',         '@uO#Gl7T=<Fzeh+v+VAm:O;LWSLp`S>S3!Le{6YM:dVo9r%G(OjPDO#l#klPgD7*');
define('SECURE_AUTH_KEY',  'l)fqNkkb=&OsRZYSu++|Ah<dLF-&ww),pywl<(8._)u~<Jg8^1SQlqztL/vD}G6/');
define('LOGGED_IN_KEY',    '<?qzJmfY81p7o_bZQ~BvRIsb4GMV<|u:sS!Nq~K,5-lL/6Q@X&{?2x:zYsc5`P^Z');
define('NONCE_KEY',        'lU%?2TVzMWSMwZ#jF&l`^AZ/R|:1rc{a!k?qW{,rfS&%9T0g?.a__?C<)bhRZLoI');
define('AUTH_SALT',        ';;%?Fj}5o;_kbd41^<*3KMze4k!cWyyuX8U?K!XKne?+61)R-aje>/oTQB#R3|-4');
define('SECURE_AUTH_SALT', '1;XP!CJ4)vgG~Y*jan9^@wRQE/I;3:|Q*RN(0F^p5*7QZuzaG@@|4Wu<&b2yqjLa');
define('LOGGED_IN_SALT',   ')tNby{k4W@c^/fl>??JU?,J>hR)UP.w>D)CHV1GkVj0tDzmPWK8,63WXnzQG}yK%');
define('NONCE_SALT',       'N/vg0Zu5oS^6#KB!ti9dN2~Mj8eUmn`w9V91LU0e{zba.4{@wM9-T_IpeJMyp7GL');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_611871_';
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
//define('WPLANG', 'fr_FR');
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
define('WP_DEBUG',          false);
define('WP_DEBUG_LOG',      false);
define('WP_DEBUG_DISPLAY',  false);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
