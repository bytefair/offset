<?php
/**
 * setup-theme.php
 *
 * Initial setup. Things that must be fired upon the first action hook.
 */

function offset_init()
{
	// translation
	load_theme_textdomain( 'offset', get_template_directory() . '/languages' );

	// http://codex.wordpress.org/Function_Reference/register_nav_menus
	register_nav_menus( array(
		'main_navigation' => __( 'Main Navigation', 'offset' )
	) );

	// http://codex.wordpress.org/Function_Reference/add_theme_support
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );
	// add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
	// add_theme_support( 'custom-background' );
	// add_theme_support( 'custom-header' );

	// you can style the text inside TinyMCE and you should
	// add_editor_style();

}
add_action( 'after_setup_theme', 'offset_init' );
