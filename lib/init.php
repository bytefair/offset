<?php
/**
 * init.php
 *
 * Initial setup. Things that must be fired upon the first action hook. Menus
 * are in navigation.php even though they must be fired on init.
 */

function offset_init()
{
	// translation
	load_theme_textdomain( 'offset', get_template_directory() . '/languages' );

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
edd_action( 'after_setup_theme', 'offset_init' );
