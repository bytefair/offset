<?php
// framework includes
require_once locate_template( 'lib/navigation.php' );
require_once locate_template( 'lib/widgets.php' );


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
