<?php
/**
 * single.php
 *
 * Template for any is_single() matches
 *
 * @package Offset\Templates
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */

locate_template('templates/header', true, true); ?>


<main class="content-pane single"><?php

		while ( have_posts() ) :
			the_post();
			get_template_part('templates/panes/content-single', get_post_format());
		endwhile; ?>

</main><?php


locate_template('templates/sidebar', true, true);
locate_template('templates/footer', true, true);
