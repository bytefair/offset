<?php
/**
 * index.php is the most generic template available for WordPress. It will load
 * this file whenever there are no other options in the template heirarchy. This
 * and style.css are required for WordPress to load a theme.
 */

get_template_part( 'templates/header.php', get_post_format() ); ?>


<main class="content-pane hfeed index"><?php

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'templates/content', get_post_format() );
		endwhile;
		offset_pagination();
	else :
		get_template_part( 'templates/content', 'none' );
	endif; ?>

</main><?php


get_template_part( 'templates/sidebar.php', get_post_format() );
get_template_part( 'templates/footer.php', get_post_format() );
