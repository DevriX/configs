<?php

/**
 * Create your own local copy of this file called it wp-config-local.php and enter your local details there.
 */

# Database Configuration
define( 'DB_NAME', '' );
define( 'DB_USER', '' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST','' );
$table_prefix = ''; // edit this with your local table prefix

/* Multisite */
define( 'SUBDOMAIN_INSTALL', false );   // Update, based on your configuration
define( 'DOMAIN_CURRENT_SITE', '' );    // Update, based on your configuration
define( 'PATH_CURRENT_SITE', '/' );     // Update, based on your configuration
define( 'SITE_ID_CURRENT_SITE', 1 );    // Update, based on your configuration
define( 'BLOG_ID_CURRENT_SITE', 1 );    // Update, based on your configuration

define( 'WP_DEBUG', true );
error_reporting( E_ALL );
ini_set( 'display_errors', 'yes' );
define( 'WP_DEBUG_LOG', true );

define( 'FS_METHOD', 'direct' ); // Allows you to upload/update themes/plugins/core from your localhost