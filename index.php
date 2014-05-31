<?php
/**
 * index.php
 *
 * index.php is the ultimate fallback in the template heirarchy. This will be
 * run if no other templates are matched.
 *
 * @package Offset\Templates
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */

locate_template('templates/header', true, true); ?>


<main class="content-pane hfeed"><?php

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part('templates/panes/content', get_post_format());
		endwhile;
	else :
		get_template_part('templates/panes/content', 'none');
	endif; ?>

</main><?php


locate_template('templates/sidebar', true, true);
locate_template('templates/footer', true, true);
