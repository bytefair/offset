<?php
/**
 * search.php
 *
 * search.php is the template returned on native WP search queries
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

get_sidebar();
get_footer();
