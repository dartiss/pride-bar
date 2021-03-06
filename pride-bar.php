<?php
/**
 * Pride Bar
 *
 * @package           pride-bar
 * @author            David Artiss
 * @license           GPL-2.0-or-later
 *
 * Plugin Name:       Pride Bar
 * Plugin URI:        https://wordpress.org/plugins/pride-bar/
 * Description:       🏳️‍🌈 Add a rainbow flag design to your admin bar.
 * Version:           1.1
 * Requires at least: 4.6
 * Requires PHP:      5.6
 * Author:            David Artiss
 * Author URI:        https://artiss.blog
 * Text Domain:       pride-bar
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Add meta to plugin details
 *
 * Add options to plugin meta line
 *
 * @param    string $links  Current links.
 * @param    string $file   File in use.
 * @return   string         Links, now with settings added.
 */
function pride_bar_plugin_meta( $links, $file ) {

	if ( false !== strpos( $file, 'pride-bar.php' ) ) {

		$links = array_merge(
			$links,
			array( '<a href="https://github.com/dartiss/pride-bar">' . __( 'Github', 'pride-bar' ) . '</a>' ),
			array( '<a href="https://wordpress.org/support/plugin/pride-bar">' . __( 'Support', 'pride-bar' ) . '</a>' ),
			array( '<a href="https://artiss.blog/donate">' . __( 'Donate', 'pride-bar' ) . '</a>' ),
			array( '<a href="https://wordpress.org/support/plugin/pride-bar/reviews/#new-post">' . __( 'Write a Review', 'pride-bar' ) . '&nbsp;⭐️⭐️⭐️⭐️⭐️</a>' )
		);
	}

	return $links;
}

add_filter( 'plugin_row_meta', 'pride_bar_plugin_meta', 10, 2 );

/**
 * Add Pride Bar CSS
 *
 * Add inline Pride Bar CSS to the header
 */
function pride_bar_add_css() {

	// Get the saved flag position, style and then build the flag array.

	$position = get_option( 'pride_bar_position', '' );
	$style    = get_option( 'pride_bar_option', '' );

	$flags = pride_bar_build_array();
	$text  = pride_bar_text_array();

	// Get the colour information for the currently chosen style.

	$flag = $flags[ $style ];

	// Generate the CSS output.

	echo '<style type="text/css">#wpadminbar{background:linear-gradient(to bottom';

	$first     = true;
	$prev_size = '';
	
	foreach ( $flag as $colours ) {
		if ( ! $first ) {
			echo ',#' . esc_html( $prev_rgb ) . ' ' . esc_html( $colours['size'] ) . '%';
		} else {
			$first = false;
		}
		echo ',#' . esc_html( $colours['rgb'] ) . ' ' . esc_html( $colours['size'] ) . '%';
		$prev_rgb = $colours['rgb'];
	}

	echo ',#' . esc_html( $prev_rgb ) . ' 100%)}#wpadminbar,#wpadminbar .quicklinks>ul>li{-webkit-box-shadow:unset;-moz-box-shadow:unset;box-shadow:unset}';

	if ( 'across' == $position ) {
		echo '#wpadminbar .ab-item,#wpadminbar a.ab-item,#wpadminbar>#wp-toolbar span.ab-label,#wpadminbar>#wp-toolbar span.noticon,#wpadminbar .ab-icon,#wpadminbar .ab-icon:before,#wpadminbar .ab-item:before,#wpadminbar .ab-item:after{color:#' . esc_html( $text[ $style ] ) . '}';
	} else {
		echo '#wpadminbar .ab-top-menu>li>a{background-color:rgba(50,55,60,.85)}';
	}

	echo '</style>';
}

add_action( 'wp_head', 'pride_bar_add_css' );
add_action( 'admin_head', 'pride_bar_add_css' );

/**
 * Add new setting using the API
 *
 * Uses the Settings API to add a new setting to the general screen
 * This setting allows the user to change the style of the Pride Bar
 */
function pride_bar_settings_init() {

	// Add the new section to General settings.
	add_settings_section( 'pride_bar_section', __( 'Pride Bar', 'pride-bar' ), 'pride_bar_section_callback', 'general' );

	// Add the settings field for which style is required.
	add_settings_field( 'pride_bar_option', __( 'Style', 'pride-bar' ), 'pride_bar_style_callback', 'general', 'pride_bar_section', array( 'label_for' => 'pride_bar_option' ) );
	register_setting( 'general', 'pride_bar_option' );

	// Add the settings field for which style is required.
	add_settings_field( 'pride_bar_position', __( 'Position', 'pride-bar' ), 'pride_bar_position_callback', 'general', 'pride_bar_section', array( 'label_for' => 'pride_bar_position' ) );
	register_setting( 'general', 'pride_bar_position' );
}

add_action( 'admin_init', 'pride_bar_settings_init' );

/**
 * Section callback
 *
 * Create the new section that we've added to the General settings screen
 */
function pride_bar_section_callback() {

	echo esc_html( __( 'Choose which pride theme you wish to use, along with the positioning of it on the Admin Bar.', 'pride-bar' ) );
}

/**
 * Callback for Settings API
 *
 * Return additional output to add the new settings field
 */
function pride_bar_style_callback() {

	// Create an array of the flag definitions.

	$flags = pride_bar_build_array();

	// Get the saved flag style details.

	$style = get_option( 'pride_bar_option', 'LGBT' );

	// Backwards compatibility - convert the old theme names to the new styles!

	if ( 'halfelf' == $style || 'wpcom' == $style ) {
		$style = 'LGBT';
	}

	// Add drop-down for style selection.

	pride_bar_style_dropdown( $flags, $style );

}

/**
 * Callback for Settings API
 *
 * Return additional output to add the new settings field
 */
function pride_bar_position_callback() {

	// Get the saved flag position details.

	$position = get_option( 'pride_bar_position', 'across' );

	// Backwards compatibility - convert the old theme names to the new positions!

	if ( 'halfelf' == $position ) {
		$position = 'across';
	}
	if ( 'wpcom' == $position ) {
		$position = 'behind';
	}

	// Add drop-down for position selection.

	pride_bar_position_dropdown( $position );
}

/**
 * Style dropdown
 *
 * Add drop-down for style selection.
 *
 * @param    string $flags  The flags array.
 * @param    string $style  Which style is currently selected.
 */
function pride_bar_style_dropdown( $flags, $style ) {

	echo '<select name="pride_bar_option" id="pride_bar_option">';
	foreach ( $flags as $flag_key => $flag ) {
		echo '<option ' . selected( $flag_key, $style, false ) . ' value="' . esc_attr( $flag_key, 'pride-bar' ) . '">' . esc_attr( $flag_key, 'pride-bar' ) . '</option>';
	}
	echo '</select>';
}

/**
 * Position dropdown
 *
 * Add drop-down for position selection.
 *
 * @param    string $position  Which position is currently selected.
 */
function pride_bar_position_dropdown( $position ) {

	echo '<select name="pride_bar_position" id="pride_bar_position">';
	echo '<option ' . selected( 'across', $position, false ) . ' value="across">' . esc_attr( 'Across content', 'pride-bar' ) . '</option>';
	echo '<option ' . selected( 'behind', $position, false ) . ' value="behind">' . esc_attr( 'Behind content', 'pride-bar' ) . '</option>';
	echo '</select>';
}

/**
 * Text colour array
 *
 * Return an array containing text colours for the admin bar
 *
 * @return string  Text colour array
 */
function pride_bar_text_array() {

	return array(
		'Agender'     => '000',
		'Aromantic'   => '000',
		'Asexual'     => '000',
		'Bigender'    => '000',
		'Bisexual'    => 'FFF',
		'Gay Men'     => '000',
		'Genderfluid' => 'FFF',
		'Genderqueer' => '000',
		'Lesbian'     => '000',
		'Non-binary'  => '000',
		'LGBT'        => '000',
		'Pansexual'   => '000',
		'Polysexual'  => '000',
		'Transgender' => '000',
	);
}

/**
 * Flag array
 *
 * Return an array containing flag build information
 *
 * @return string  Flag array
 */
function pride_bar_build_array() {

	return array(
		'Agender'     => array(
			array(
				'size' => 0,
				'rgb'  => '000',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'ABABAB',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'ACF670',
			),
			array(
				'size' => 57.14,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 71.43,
				'rgb'  => 'ABABAB',
			),
			array(
				'size' => 85.71,
				'rgb'  => '000',
			),
		),
		'Aromantic'   => array(
			array(
				'size' => 0,
				'rgb'  => '339833',
			),
			array(
				'size' => 20,
				'rgb'  => '98CD66',
			),
			array(
				'size' => 40,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 60,
				'rgb'  => '999',
			),
			array(
				'size' => 80,
				'rgb'  => '000',
			),
		),
		'Asexual'     => array(
			array(
				'size' => 0,
				'rgb'  => '000',
			),
			array(
				'size' => 25,
				'rgb'  => '929292',
			),
			array(
				'size' => 50,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 75,
				'rgb'  => '6B006D',
			),
		),
		'Bigender'    => array(
			array(
				'size' => 0,
				'rgb'  => 'B56291',
			),
			array(
				'size' => 14.29,
				'rgb'  => 'E690C2',
			),
			array(
				'size' => 29.57,
				'rgb'  => 'CABAE2',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 57.14,
				'rgb'  => 'CABAE2',
			),
			array(
				'size' => 71.43,
				'rgb'  => '8AB9E1',
			),
			array(
				'size' => 85.71,
				'rgb'  => '5A6CC6',
			),
		),
		'Bisexual'    => array(
			array(
				'size' => 0,
				'rgb'  => 'D60270',
			),
			array(
				'size' => 40,
				'rgb'  => '9B4F96',
			),
			array(
				'size' => 60,
				'rgb'  => '0038A8',
			),
		),
		'Gay Men'     => array(
			array(
				'size' => 0,
				'rgb'  => '126B56',
			),
			array(
				'size' => 14.29,
				'rgb'  => '379494',
			),
			array(
				'size' => 29.57,
				'rgb'  => '4EBEC8',
			),
			array(
				'size' => 42.86,
				'rgb'  => 'EEE8FF',
			),
			array(
				'size' => 57.14,
				'rgb'  => '6A9BDA',
			),
			array(
				'size' => 71.43,
				'rgb'  => '166DBF',
			),
			array(
				'size' => 85.71,
				'rgb'  => '0A245D',
			),
		),
		'Genderfluid' => array(
			array(
				'size' => 0,
				'rgb'  => 'FC5B90',
			),
			array(
				'size' => 20,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 40,
				'rgb'  => 'AD00CD',
			),
			array(
				'size' => 60,
				'rgb'  => '000',
			),
			array(
				'size' => 80,
				'rgb'  => '2626AF',
			),
		),
		'Genderqueer' => array(
			array(
				'size' => 0,
				'rgb'  => 'A564D3',
			),
			array(
				'size' => 33.33,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 66.67,
				'rgb'  => '3B711A',
			),
		),
		'Lesbian'     => array(
			array(
				'size' => 0,
				'rgb'  => 'C81804',
			),
			array(
				'size' => 20,
				'rgb'  => 'FD8745',
			),
			array(
				'size' => 40,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 60,
				'rgb'  => 'C64993',
			),
			array(
				'size' => 80,
				'rgb'  => '8F004F',
			),
		),
		'LGBT'        => array(
			array(
				'size' => 0,
				'rgb'  => 'E24C3E',
			),
			array(
				'size' => 16.67,
				'rgb'  => 'F47D3B',
			),
			array(
				'size' => 33.33,
				'rgb'  => 'FDB813',
			),
			array(
				'size' => 50,
				'rgb'  => '74BB5D',
			),
			array(
				'size' => 66.67,
				'rgb'  => '38A6D7',
			),
			array(
				'size' => 83.33,
				'rgb'  => '8C7AB8',
			),
		),
		'Non-binary'  => array(
			array(
				'size' => 0,
				'rgb'  => 'FBF62A',
			),
			array(
				'size' => 25,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 50,
				'rgb'  => '883DC6',
			),
			array(
				'size' => 75,
				'rgb'  => '212121',
			),
		),
		'Pansexual'   => array(
			array(
				'size' => 0,
				'rgb'  => 'FB007A',
			),
			array(
				'size' => 33.33,
				'rgb'  => 'FED109',
			),
			array(
				'size' => 66.67,
				'rgb'  => '20A0FE',
			),
		),
		'Polysexual'  => array(
			array(
				'size' => 0,
				'rgb'  => 'F000AA',
			),
			array(
				'size' => 33.33,
				'rgb'  => '1CD156',
			),
			array(
				'size' => 66.67,
				'rgb'  => '1B7BF4',
			),
		),
		'Transgender' => array(
			array(
				'size' => 0,
				'rgb'  => '4EC2F9',
			),
			array(
				'size' => 20,
				'rgb'  => 'F095A9',
			),
			array(
				'size' => 40,
				'rgb'  => 'FFF',
			),
			array(
				'size' => 60,
				'rgb'  => 'F095A9',
			),
			array(
				'size' => 80,
				'rgb'  => '4EC2F9',
			),
		),
	);
}
