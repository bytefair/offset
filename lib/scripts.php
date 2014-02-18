<?php
/**
 * scripts.php
 *
 * Loads scripts and styles
 */

function offset_load_styles()
{
	// refers to dev stylesheet, rename reference to .min.css for production
	wp_enqueue_style( 'master', get_stylesheet_directory_uri() . '/dist/css/master.css', false );
}
add_action( 'wp_enqueue_scripts', 'offset_load_styles' );
