<?php
/**
 * single.php
 *
 * Template for any is_single() matches
 *
 * @package Offset\Templates
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */

get_header();

		while ( have_posts() ) :
			the_post();
			get_template_part('components/content-single', get_post_format());
		endwhile;

get_sidebar();
get_footer();
