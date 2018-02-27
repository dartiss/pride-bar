<?php
/**
* Uninstaller
*
* Uninstall the plugin by removing any options from the database
*
* @package	pride-bar
* @since	1.0
*/

// If the uninstall was not called by WordPress, exit

if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

// Remove options

delete_option( 'pride_bar_option' );
