<?php
/**
 * wysiwyg.php
 *
 * wysiwyg.php contains addons and customizations to the MCE editor in the
 * WordPress backend.
 *
 * @package Offset
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.7.0
 */

/**
 * Activates the formats dropdown in MCE
 *
 * @since 0.7.0
 */
if ( ! function_exists( 'wpex_style_select' ) ) {
	function wpex_style_select( $buttons )
	{
		array_push( $buttons, 'styleselect' );
		return $buttons;
	}
}
add_filter( 'mce_buttons', 'wpex_style_select' );

/**
 * Create styles in MCE
 *
 * @since  0.7.0
 */
if ( ! function_exists( 'wpex_styles_dropdown' ) ) {
	function wpex_styles_dropdown( $settings )
	{

		// Create array of new styles
		// $new_styles = array(
		// 	array(
		// 		'title'	=> __( 'Website Elements', 'offset' ),
		// 		'items'	=> array(
		// 			array(
		// 				'title'		=> __('Make Link a Button','offset'),
		// 				'selector'	=> 'a',
		// 				'classes'	=> 'button'
		// 			)
		// 		),
		// 	),
		// );

		// Merge old & new styles
		$settings['style_formats_merge'] = true;

		// Add new styles
		$settings['style_formats'] = json_encode( $new_styles );

		// Return New Settings
		return $settings;

	}
}
add_filter( 'tiny_mce_before_init', 'wpex_styles_dropdown' );
