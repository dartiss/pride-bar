<?php
/**
 * Create Bar
 *
 * Functions to generate the colored bar.
 *
 * @package pride-bar
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add Pride Bar CSS
 *
 * Add inline Pride Bar CSS to the header
 */
function prb_add_css() {

	// Get the saved flag position, style and then build the flag array.

	$position = prb_get_position();
	$style    = prb_get_style();
	$flags    = prb_build_array();

	// Set a bar text color.

	$text = prb_text_array();
	if ( ! isset( $text[ $style ] ) ) {
		$text = '000'; // Default to black if no color is specified.
	} else {
		$text = $text[ $style ];
	}

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

	if ( 'across' === $position ) {
		echo '#wpadminbar .ab-item,#wpadminbar a.ab-item,#wpadminbar>#wp-toolbar span.ab-label,#wpadminbar>#wp-toolbar span.noticon,#wpadminbar .ab-icon,#wpadminbar .ab-icon:before,#wpadminbar .ab-item:before,#wpadminbar .ab-item:after{color:#' . esc_html( $text ) . '}';
	} else {
		echo '#wpadminbar .ab-top-menu>li>a{background-color:rgba(50,55,60,.85)}';
	}

	echo '</style>';
}

add_action( 'wp_head', 'prb_add_css' );
add_action( 'admin_head', 'prb_add_css' );

/**
 * Get the style
 *
 * Get the selected style
 *
 * @return string Text  Selected style
 */
function prb_get_style() {

	// Get the saved flag style details.

	$style = get_option( 'pride_bar_option', 'LGBT' );

	// Backwards compatibility - convert the old theme names to the new styles!

	if ( 'halfelf' === $style || 'wpcom' === $style || 'LGBT' === $style ) {
		$style = 'Pride (Traditional)';
	}

	return $style;
}

/**
 * Get the position
 *
 * Get the selected position
 *
 * @return string Text  Selected position
 */
function prb_get_position() {

	// Get the saved flag position details.

	$position = get_option( 'pride_bar_position', 'across' );

	// Backwards compatibility - convert the old theme names to the new positions!

	if ( 'halfelf' === $position ) {
		$position = 'across';
	}
	if ( 'wpcom' === $position ) {
		$position = 'behind';
	}

	return $position;
}
