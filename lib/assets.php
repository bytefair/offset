<?php
/**
 * scripts.php
 *
 * Loads scripts and styles
 *
 * @package Offset\Assets
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */

function offset_load_assets()
{
	// refers to dev stylesheet, rename reference to .min.css for production
	wp_enqueue_style( 'master', get_stylesheet_directory_uri() . '/css/master.css', false );

	wp_register_script( 'footer_scripts', get_stylesheet_directory_uri() . '/javascript/min/footer-ck.js', array('jquery'), VERSION, true );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'footer_scripts' );
}
add_action( 'wp_enqueue_scripts', 'offset_load_assets' );
