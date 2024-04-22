<?php
/**
 * Settings Functions
 *
 * Functions to create the plugin settings.
 *
 * @package pride-bar
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add new setting using the API
 *
 * Uses the Settings API to add a new setting to the general screen
 * This setting allows the user to change the style of the Pride Bar
 */
function prb_settings_init() {

	// Add the new section to General settings.
	add_settings_section( 'pride_bar_section', __( 'Pride Bar', 'pride-bar' ), 'prb_section_callback', 'general' );

	// Add the settings field for which style is required.
	add_settings_field( 'pride_bar_option', __( 'Style', 'pride-bar' ), 'prb_style_callback', 'general', 'pride_bar_section', array( 'label_for' => 'pride_bar_option' ) );
	register_setting( 'general', 'pride_bar_option' );

	// Add the settings field for which style is required.
	add_settings_field( 'pride_bar_position', __( 'Position', 'pride-bar' ), 'prb_position_callback', 'general', 'pride_bar_section', array( 'label_for' => 'pride_bar_position' ) );
	register_setting( 'general', 'pride_bar_position' );
}

add_action( 'admin_init', 'prb_settings_init' );

/**
 * Section callback
 *
 * Create the new section that we've added to the General settings screen
 */
function prb_section_callback() {

	echo esc_html( __( 'Choose which pride theme you wish to use, along with the positioning of it on the Admin Bar.', 'pride-bar' ) );
}

/**
 * Callback for Settings API
 *
 * Return additional output to add the new settings field
 */
function prb_style_callback() {

	// Create an array of the flag definitions.

	$flags = prb_build_array();

	// Get the saved flag style details.

	$style = prb_get_style();

	// Add drop-down for style selection.

	prb_style_dropdown( $flags, $style );
}

/**
 * Callback for Settings API
 *
 * Return additional output to add the new settings field
 */
function prb_position_callback() {

	// Get the saved flag position details.

	$position = prb_get_position();

	// Add drop-down for position selection.

	prb_position_dropdown( $position );
}

/**
 * Style dropdown
 *
 * Add drop-down for style selection.
 *
 * @param    string $flags  The flags array.
 * @param    string $style  Which style is currently selected.
 */
function prb_style_dropdown( $flags, $style ) {

	echo '<label><select name="pride_bar_option" id="pride_bar_option">';
	foreach ( $flags as $flag_key => $flag ) {
		echo '<option ' . selected( $flag_key, $style, false ) . ' value="' . esc_attr( $flag_key ) . '">' . esc_html( $flag_key ) . '</option>';
	}
	echo '</select><a href="https://lgbta.wikia.org/">Learn more</a></label><p><a href="https://artiss.blog/request-a-style/">Request a missing style to be added</a></p>';
}

/**
 * Position dropdown
 *
 * Add drop-down for position selection.
 *
 * @param    string $position  Which position is currently selected.
 */
function prb_position_dropdown( $position ) {

	echo '<select name="pride_bar_position" id="pride_bar_position">';
	echo '<option ' . selected( 'across', $position, false ) . ' value="across">' . esc_html( __( 'Across content', 'pride-bar' ) ) . '</option>';
	echo '<option ' . selected( 'behind', $position, false ) . ' value="behind">' . esc_html( __( 'Behind content', 'pride-bar' ) ) . '</option>';
	echo '</select>';
}
