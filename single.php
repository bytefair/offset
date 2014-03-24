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

get_template_part('templates/header'); ?>


<main class="content-pane single"><?php

		while ( have_posts() ) :
			the_post();
			get_template_part( 'templates/content-single', get_post_format() );
		endwhile; ?>

</main><?php


get_template_part('templates/sidebar');
get_template_part('templates/footer');
