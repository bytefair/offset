<?php
/**
 * tweaks.php
 *
 * Contains various tweaks that change WP functionality
 *
 * @package Offset\Tweaks
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */

/**
 * Kills self-pinging trackbacks when you interlink articles
 *
 * @since 0.1.0
 *
 * @param array Trackback links
 */
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


/**
 * strips inline image sizes from display to ensure responsiveness
 *
 * @since 0.1.0
 *
 * @param string Image elements
 * @return string Modified image element with stripped dimensions
 */
function remove_thumbnail_dimensions( $html )
{
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );


/**
 * removes the weird positioning of admin bar
 *
 * @since 0.6.3
 */
function my_filter_head() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'my_filter_head');
