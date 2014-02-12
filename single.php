<?php
/**
 * single.php shows up when you view any post by itself.
 */

get_template_part( 'templates/header', get_post_format() ); ?>


<main class="content-pane single"><?php

		while ( have_posts() ) :
			the_post();
			get_template_part( 'templates/content-single', get_post_format() );
		endwhile; ?>

</main><?php


get_template_part( 'templates/sidebar', get_post_format() );
get_template_part( 'templates/footer', get_post_format() );
