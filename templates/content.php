<article id="post-<?php the_ID(); ?>" <?php post_class( 'hentry' ); ?>>
	<header class="article__header">
		<h1 class="article__title entry-title"><?php the_title(); ?></h1>
	</header>


		<?php if ( is_archive() || is_search() ) : ?>
			<div class="article__excerpt">
				<?php the_excerpt(); ?>
			</div>
		<?php else : ?>
			<div class="article__content">
				<?php the_content(); ?>
			</div>
		<?php endif; ?>


	<footer class="article__footer">
		<p class="article__categories">
			<?php _e( 'Categorized: ', 'offset' ); ?><?php the_category(', '); ?>
		</p>
		<p class="article__tags">
			<?php the_tags(); ?>
		</p>
	</footer>
</article>
