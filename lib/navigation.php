<?php
/**
 * navigation.php
 *
 * Controls navigational elements such as pagination and menus. Bootstrap 3 only
 * allows one sublevel of dropdown, so if you need complex menus, you'll want to
 * handle the menu controls on your own. Hell, if you're getting that complex
 * you are probably writing your own walkers anyway. -PG
 */

//* includes WP-Bootstrap Navwalker
//* https://github.com/twittem/wp-bootstrap-navwalker
//* managed by Git subtree
require_once( 'vendor/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php' );

//* http://codex.wordpress.org/Function_Reference/register_nav_menus
function offset_menu_init()
{
	register_nav_menus( array(
		'main-navigation'   => __( 'Main Navigation', 'offset' )
	) );
}
add_action( 'init', 'offset_menu_init' );

//* controls the blog/archive pagination
function offset_blog_pagination()
{
	global $wp_query;

	$total_pages = $wp_query->max_num_pages;
	if ( $total_pages > 1 ) {
		echo '<nav class="archive-pager">';

		$current_page = max( 1, get_query_var( 'paged' ) );
		echo paginate_links( array(
			'base'      => get_pagenum_link(1) . '%_%',
			'format'    => 'page/%#%',
			'current'   => $current_page,
			'total'     => $total_pages,
			'prev_text' => '&larr;&nbsp;Previous',
			'next_text' => 'Next&nbsp;&rarr;',
			'end_size'  => 3,
			'mid_size'  => 3,
			'type'      => 'list'
		) );
		echo '</nav>';
	}
}
