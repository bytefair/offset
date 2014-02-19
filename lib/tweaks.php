<?php
/**
 * tweaks.php
 *
 * Contains various tweaks that change WP functionality
 */

//* kills self-pings on interlinked articles
function kill_self_ping( &$links )
{
	$home = home_url();
	foreach ( $links as $l ) {
		if ( 0 === strpos( $link, $home ) ) {
			unset( $links[$l] );
		}
	}
}
add_action( 'pre_ping', 'kill_self_ping' );


//* strips inline image sizes from display to ensure responsiveness
//* http://speakinginbytes.com/2012/11/responsive-images-in-wordpress/
function remove_thumbnail_dimensions( $html )
{
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );
