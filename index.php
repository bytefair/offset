<?php
/**
 * index.php is the most generic template available for WordPress. It will load
 * this file whenever there are no other options in the template heirarchy. This
 * and style.css are required for WordPress to load a theme.
 */

get_template_part( 'templates/header' ); ?>


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


get_template_part( 'templates/sidebar' );
get_template_part( 'templates/footer' );
