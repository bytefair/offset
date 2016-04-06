<?php
/**
 * content.php
 *
 * Content pane fallback
 *
 * @package Offset\Templates
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'hentry' ); ?>>


	<header class="article__header">
		<a href="<?php the_permalink(); ?>"><h1 class="article__title entry-title"><?php the_title(); ?></h1></a>
		<div class="article__meta byline author vcard">
			<!-- metadata goes here -->
		</div>
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

	<?php if ( !is_page() ) : ?>
		<footer class="article__footer">
			<p class="article__categories">
				<?php _e('Categorized: ', 'offset'); ?><?php the_category(', '); ?>
			</p>
			<p class="article__tags">
				<?php the_tags(); ?>
			</p>
		</footer>
	<?php endif; ?>


</article>
