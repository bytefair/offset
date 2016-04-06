<?php
/**
 * archive.php
 *
 * archive.php is the default template for all categories, tags, etc.
 *
 * @package Offset\Templates
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.7.0
 */

get_header();

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part('components/content', 'archive');
		endwhile;
	else :
		get_template_part('components/content', 'none');
	endif;

	posts_nav_link();

get_sidebar();
get_footer();
