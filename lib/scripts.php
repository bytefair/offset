<?php
/**
 * scripts.php
 *
 * Loads scripts and styles
 */

function offset_load_styles()
{
	// refers to dev stylesheet, rename reference to .min.css for production
	wp_enqueue_style( 'master', get_stylesheet_directory_uri() . '/css/master.css', false );

	wp_register_script( 'footer_scripts', get_stylesheet_directory_uri() . '/javascript/footer-ck.js', array('jquery') );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'footer_scripts' );
}
add_action( 'wp_enqueue_scripts', 'offset_load_styles' );
