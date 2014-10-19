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

define( 'WP_DEBUG', true );
error_reporting( E_ALL );
ini_set( 'display_errors', 'yes' );

define( 'FS_METHOD', 'direct' ); // Allows you to upload/update themes/plugins/core from your localhost