<article id="post-<?php the_ID(); ?>" <?php post_class( 'hentry' ); ?>>
	<header class="article__header">
		<h1 class="article__title entry-title"><?php the_title(); ?></h1>
	</header>

	<div class="article__content">
		<?php the_content(); ?>
	</div>

	<footer class="article__footer">
		<p class="article__categories">
			<?php _e( 'Categorized: ', 'offset' ); ?><?php the_category(', '); ?>
		</p>
		<p class="article__tags">
			<?php the_tags(); ?>
		</p>
	</footer>
</article>
