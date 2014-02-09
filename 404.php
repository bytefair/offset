<?php
/**
 * 404 Not Found template
 */

get_template_part( 'templates/header.php' ); ?>


<main class="content-pane 404-error">

		<header class="article__header">
			<h1 class="article__title"><?php _e( '404 Not Found', 'offset' ); ?></h1>
		</header>

		<div class="article__content">
			<p><?php _e( 'Nothing was found at this URL. Try searching for your page below.', 'offset' ); ?></p>
		</div><?php

		get_search_form(); ?>

</main><?php


get_template_part( 'templates/sidebar.php' );
get_template_part( 'templates/footer.php' );
