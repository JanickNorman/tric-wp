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
define('DB_NAME', 'tric-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'badjingan');

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
define('AUTH_KEY',         '*K8PTH!&LQ9doI!Hk90l50p}jj(QzG+}52`pyeq4=Wm/`*VB5s;=%C4I_hL,M29I');
define('SECURE_AUTH_KEY',  '#l6(5vWyzem{&C5+rKCA!@.[{Ltqy){XP{~OlEOAP(@;U+88sdOU5yr#&)DwpIhu');
define('LOGGED_IN_KEY',    'p|+mu>Di{^k;+6~%om[ZU>w8A3U/%lEoxph*wI6um9xoJnEg!zri#u:MfN/WO+f;');
define('NONCE_KEY',        'nc%$zc(?,8xp} yWbp<0e_|A/:/[N`M8ybbdu^u2t5^GUAvG[Dkf(3g0pi>J=A` ');
define('AUTH_SALT',        'd9|Vx*Q3fRmi*S0Q|:r[Es{WG[4b:I=I8-FW(0{Sjs5HnCWB_gWBcOI~&1DK!5#!');
define('SECURE_AUTH_SALT', 'NTv&diz-[ZL3G?KxcyG/i:eo_>P5[dapqK1(]CxzONg8GZb;-1s%$|:+}thn;/):');
define('LOGGED_IN_SALT',   'vV|~/DXx;QG|xFv! ZA rWAvgJlL.fnE)`ml#x;k75sClSxL!aj:M9UC,8!K///h');
define('NONCE_SALT',       '+^RHh:d;|FF|_.Bx!#YFb:bW/gkt,u:bCch-:?[<%S,Iy`Z~+MP~b#}U77%C~ERM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tric_';

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
define('WP_DEBUG', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
