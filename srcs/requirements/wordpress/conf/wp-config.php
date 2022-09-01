<?php
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MYSQL_DATABASE' );

/** MySQL database username */
define( 'DB_USER', 'MYSQL_USER' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MYSQL_PASSWORD' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         'l|t|HbBXvLSlldtHobvYr[byf6u<~}i@Ntp9h GuYfcE+G|ZUh)&kdJ6^AE+T_;]');
define('SECURE_AUTH_KEY',  '*|`-J4.EfzJvi]<sx&}lBwb)Qyv~I;(4^O+G8Ash4~xf%y#4*C`OkQKx6QTsx41O');
define('LOGGED_IN_KEY',    'qUV};Tcda~%0P?(wdi(Q%[.l&n90?v|OCK9QzdS^;=vQ:`Y)U5~ {@DV*zt!Iluf');
define('NONCE_KEY',        ',g`fKWt$W%VZ7)[eOps5}L~ww<Y>1m/d~oih<G?Q@C9+q],J+)uLpkPZITY_&Ca-');
define('AUTH_SALT',        'UDR~>zaCyr^oWI$Qvf` T|9k.H;K(1SW-8E~(fS F|pRcNsZm9Ky4(eh8/2>(3_L');
define('SECURE_AUTH_SALT', 'VPmY:+@Y?`VcItOqDSh!y217Po2LB_G9T@Vr1-1EyO`S1>Uet@X;9G#8MNL>SR$:');
define('LOGGED_IN_SALT',   'imx:|Bxp,K%}V@;N&c/1; ZNu1wC/;|^qMS+o7YR86OH.dVWbyu@fL_w 2K.ywI3');
define('NONCE_SALT',       '*Im`e+ hz4^rM%-<z-}{L)`(hRCWU-+8d)&Lq-2{q/1Uv]7O vyT=ozE2,u;}(gb');

$table_prefix = 'wp_';

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

