<?php
/**
 * archive.php is called in any taxonomy or other archive view.
 */

get_template_part( 'templates/header', 'archive' ); ?>


<main class="content-pane hfeed"><?php

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'templates/content', get_post_format() );
		endwhile;
		offset_blog_pagination();
	else :
		get_template_part( 'templates/content', 'none' );
	endif; ?>

</main><?php


get_template_part( 'templates/sidebar', 'archive' );
get_template_part( 'templates/footer', 'archive' );
