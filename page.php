<?php
/**
 * page.php is the template for pages. I have kept it very simple so you can
 * design pages yourself. If you want to call the sidebar, you can find that
 * call in index.php
 */

get_template_part( 'templates/header' ); ?>


<main class="content-pane"><?php

	while ( have_posts() ) :
		the_post();
		the_content();
	endwhile; ?>

</main><?php


get_template_part( 'templates/footer' );
