<?php
// framework includes
require_once( 'lib/navigation.php' );

add_action( 'widgets_init', 'offset_register_sidebars' );
function offset_register_sidebars()
{
	register_sidebar( array(
		'id'          => 'sidebar-default',
		'name'        => __( 'Default Sidebar', 'offset' ),
		'description' => __( 'The primary site sidebar.', 'offset' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

add_action( 'wp_enqueue_scripts', 'offset_load_styles' );
function offset_load_styles()
{
	wp_enqueue_style( 'offset-styles', get_stylesheet_uri() );
}

// kills self-pings on interlinked articles
add_action( 'pre_ping', 'kill_self_ping' );
function kill_self_ping( &$links )
{
	$home = get_option( 'home' );
	foreach ( $links as $l ) {
		if ( 0 === strpos( $link, $home ) ) {
			unset( $links[$l] );
		}
	}
}
