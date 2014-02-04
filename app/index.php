<?php
/**
 * The fallback template file, index.php
 *
 * index.php is the most generic template available for WordPress. It will load
 * this file whenever there are no other options in the template heirarchy.
 * This and style.css are required for WordPress to load a theme.
 *
 * @package offset
 */

get_header(); ?>

<main class="content-pane index">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'hentry' ); ?>>
			<header class="article__header">
				<h1 class="article__title entry-title"><?php the_title(); ?></h1>
			</header>

			<div class="article__content">
				<?php the_content(); ?>
			</div>

			<footer class="article__footer">
				<p class="article__categories">
					Categorized: <?php the_category(', '); ?>
				</p>
				<p class="article__tags">
					<?php the_tags(); ?>
				</p>
			</footer>
		</article>

	<?php endwhile; ?>

		<?php offset_pagination(); ?>

	<?php else : ?>

	<?php endif; ?>
</main>


<?php get_footer(); ?>
