<?php
/**
 * archive.php
 *
 * archive.php is the default template for all categories, tags, etc.
 *
 * @package Offset\Templates
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.7.0
 */

locate_template('templates/header.php', true, true); ?>


<main><?php

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part('templates/panes/content', 'archive');
		endwhile;
	else :
		get_template_part('templates/panes/content', 'none');
	endif;

	posts_nav_link(); ?>

</main><?php


locate_template('templates/sidebar.php', true, true);
locate_template('templates/footer.php', true, true);
