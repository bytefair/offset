<?php
/**
 * 404.php
 *
 * 404 WordPress page
 *
 * @package Offset\Templates
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */

locate_template('templates/header', true, true); ?>


<main>

	<header class="article__header">
		<h1 class="article__title"><?php _e('404 Not Found', 'offset'); ?></h1>
	</header>

	<div class="article__content">
		<p><?php _e('Nothing was found at this URL. Try searching for your page below.', 'offset'); ?></p>
	</div><?php

	get_search_form(); ?>

</main><?php


locate_template('templates/footer', true, true);
