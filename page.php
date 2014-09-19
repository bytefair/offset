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

locate_template('templates/header.php', true, true); ?>


<main><?php

	while ( have_posts() ) :
		the_post();
		the_content();
	endwhile; ?>

</main><?php


locate_template('templates/footer.php', true, true);
