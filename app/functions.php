<?php

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
