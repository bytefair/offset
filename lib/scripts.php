<?php

function offset_load_styles()
{
	wp_enqueue_style( 'offset-styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'offset_load_styles' );
