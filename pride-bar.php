<?php
/*
Plugin Name: Pride Bar
Plugin URI: https://wordpress.org/plugins/pride-bar
Description: Add a rainbow flag design to your admin bar.
Version: 1.0.0
Author: David Artiss
Author URI: https://artiss.blog
Text Domain: pride-bar
*/

/**
* Pride Bar
*
* Plugin to add a Pride rainbow to your admin bar.
*
* @package	pride-bar
* @since	1.0
*/

/**
* Add meta to plugin details
*
* Add options to plugin meta line
*
* @since	1.0
*
* @param	string  $links	Current links
* @param	string  $file	File in use
* @return   string			Links, now with settings added
*/

function pride_bar_plugin_meta( $links, $file ) {

	if ( false !== strpos( $file, 'pride-bar.php' ) ) {

		$links = array_merge( $links, array( '<a href="https://github.com/dartiss/pride-bar">' . __( 'Github', 'pride-bar' ) . '</a>' ) );

		$links = array_merge( $links, array( '<a href="https://wordpress.org/support/plugin/pride-bar">' . __( 'Support', 'pride-bar' ) . '</a>' ) );
	}

	return $links;
}

add_filter( 'plugin_row_meta', 'pride_bar_plugin_meta', 10, 2 );

/**
* Add Pride Bar CSS
*
* Add Pride Bar CSS before the admin bar render
*
* @since	1.0
*/


function add_pride_bar() {

	$theme = sanitize_title( get_option( 'pride_bar_option', '' ) );

	include_once( plugin_dir_path( __FILE__ ) . 'css/' . $theme . '.css' );
}

add_action( 'wp_before_admin_bar_render', 'add_pride_bar' );

/**
* Add new setting using the API
*
* Uses the Settings API to add a new setting to the general screen
* This setting allows the user to change the style of the Pride Bar
*
* @since	1.0
*/

function pride_bar_settings_init() {

	add_settings_field( 'pride_bar_option', __( ucwords( 'Pride Bar style' ), 'pride-bar' ), 'pride_bar_setting_callback', 'general', 'default', array( 'label_for' => 'pride_bar_option' ) );

	register_setting( 'general', 'pride_bar_option' );
}

add_action( 'admin_init', 'pride_bar_settings_init' );

/**
* Callback for Settings API
*
* Return additional output to add the new settings field
*
* @since	1.0
*/

function pride_bar_setting_callback() {

	$theme = sanitize_title( get_option( 'pride_bar_option', '' ) );
	
	echo '<select name="pride_bar_option" id="pride_bar_option"><option ';
	if ( 'wpcom' == $theme ) { echo 'selected="selected" '; }
	echo 'value="wpcom">' . __( 'WordPress.com', 'pride-bar' ) . '</option><option ';
	if ( 'halfelf' == $theme ) { echo 'selected="selected" '; }
	echo 'value="halfelf">' . __( 'Half Elf', 'pride-bar' ) . '</option></select>';
}
