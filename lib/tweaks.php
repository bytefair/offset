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
