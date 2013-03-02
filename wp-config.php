<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/production-config.php' ) ) {
	define( 'WP_LOCAL_DEV', false );
	include( dirname( __FILE__ ) . '/production-config.php' );
} elseif ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME',				'villag_denton' );
	define( 'DB_USER',				'root' );
	define( 'DB_PASSWORD',			'root' );
	define( 'DB_HOST',				'localhost' ); // Probably 'localhost'
	
	define( 'ENV_DOMAIN',			'denton.vill.ag' );
	define( 'DOMAIN_CURRENT_SITE',	ENV_DOMAIN );
	define( 'WP_HOME',				'http://'. ENV_DOMAIN );
	define( 'WP_SITEURL',			'http://'. ENV_DOMAIN .'/wp' );
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// =========
// Multisite
// =========
define( 'PRODUCTION_DOMAIN', 'denton.vill.ag' );
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true);
define( 'SUBDOMAIN_INSTALL', false);
define( 'PATH_CURRENT_SITE', '/');
define( 'SITE_ID_CURRENT_SITE', 1);
define( 'BLOG_ID_CURRENT_SITE', 1);


// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );