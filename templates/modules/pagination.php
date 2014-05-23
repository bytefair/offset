<?php
/**
 * Pagination for archives
 *
 * @package Offset\Templates\Modules
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */
function offset_blog_pagination()
{
	global $wp_query;

	$total_pages = $wp_query->max_num_pages;
	if ( $total_pages > 1 ) {
		echo '<nav class="archive-pager">';

		$current_page = max( 1, get_query_var( 'paged' ) );
		echo paginate_links( array(
			'base'      => get_pagenum_link(1) . '%_%',
			'format'    => '/page/%#%',
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
