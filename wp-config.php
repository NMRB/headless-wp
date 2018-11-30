<?php
/**
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* MySQL settings */
define( 'DB_NAME',     'headless' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'mysql' );
define( 'DB_CHARSET',  'utf8mb4' );


$table_prefix = 'two_';


/* Authentication Unique Keys and Salts. */
define('AUTH_KEY',         'i~9=bXRMh^zH+bXBjD[s~e9A+k!;BCI[T#hCSOZx-Gl TI@#pbt_h{:7nHmJ/v?e');
define('SECURE_AUTH_KEY',  'lX%BvI*e#nwXh-GiVC5s:@?iX,Oo496eu;nxHqpQ6i8CSG0?T-*@tdZwB_QGJ?-x');
define('LOGGED_IN_KEY',    '47K5)8e|>cmRGcL,++W5$iDWc`?*1k-b@KQ%8i5tr.jCK=gO3l3K+:t->I|+-A.G');
define('NONCE_KEY',        'PDPMv~,{s~mje8HCG3/~Xl-+N*pJPSF23Va(?=#S *g~Zib-E-=>6*ar}nwM>9cm');
define('AUTH_SALT',        'S3lnm(WB+2Ga70T57:3X|ZSpt=`|-@r!KPb)gJ&]Lv#29Tv~+S=/qNZJP$x=|(%]');
define('SECURE_AUTH_SALT', ']TmL;/ (pvJI[iWYtNRTTDJ%yL@T>d7/m>?t[XNum>fG=MFo-SPEQTQ%y1');

define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/app');
define('WP_CONTENT_URL',  '/app');
define('WP_SITEURL',    'http://' . $_SERVER['SERVER_NAME'] . '/core');
define('WP_HOME',       'http://' . $_SERVER['SERVER_NAME']);
define('WP_TEMP_DIR', ABSPATH . 'app/');

/* Multisite. */
define( 'WP_ALLOW_MULTISITE', false );


/* WordPress debug mode for developers. */
define( 'WP_DEBUG',         true );
define( 'WP_DEBUG_LOG',     true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG',     true );
define( 'SAVEQUERIES',      true );

/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );

/* Updates */
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'DISALLOW_FILE_MODS', false );
define( 'DISALLOW_FILE_EDIT', false );


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
