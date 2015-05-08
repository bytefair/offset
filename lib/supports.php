<?php
/**
 * init.php
 *
 * Initial setup. Things that must be fired upon the first action hook.
 *
 * @package Offset\Supports
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */

/**
 * Various theme setup actions that must be fired at after_setup_theme
 *
 * @since 0.1.0
 */
function offset_init()
{
	// translation
	load_theme_textdomain( 'offset', get_template_directory() . '/languages' );

	// http://codex.wordpress.org/Function_Reference/add_theme_support
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag');
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'widgets' ) );
	// add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
	// add_theme_support( 'custom-background' );
	// add_theme_support( 'custom-header' );

	// you can style the text inside TinyMCE and you should
	add_editor_style( '/css/editor-styles.css' );

	// This call removes the pixel bump from the WP toolbar
	add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );
}
add_action( 'after_setup_theme', 'offset_init' );
