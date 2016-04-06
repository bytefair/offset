<?php
/**
 * index.php
 *
 * index.php is the ultimate fallback in the template heirarchy. This will be
 * run if no other templates are matched.
 *
 * @package Offset\Templates
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */

get_header();

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part('components/content', get_post_format());
		endwhile;
	else :
		get_template_part('components/content', 'none');
	endif;

	posts_nav_link();

get_sidebar();
get_footer();
