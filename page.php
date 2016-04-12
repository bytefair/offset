<?php
/**
 * page.php
 *
 * Template for pages
 *
 * @package Offset\Templates
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */

get_header();

  while ( have_posts() ) :
    the_post();
    the_content();
  endwhile;

get_footer();
