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
?>

<main class="content-pane"><?php
	while ( have_posts() ) :
		the_post();
		the_content();
	endwhile;
	wp_link_pages( array( 'before' => '<nav class="pagination">', 'after' => '</nav>' ) ); ?>
</main>
