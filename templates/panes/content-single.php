<?php
/**
 * content-single.php
 *
 * Content pane for single posts
 *
 * @package Offset\Templates
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('hentry'); ?>>


	<header class="article__header">
		<h1 class="article__title entry-title"><?php the_title(); ?></h1>
		<div class="article__meta byline author vcard">
			<?php get_template_part('templates/modules/article_meta', get_post_format()); ?>
		</div>
	</header>


	<div class="article__content">
		<?php the_content(); ?>
	</div>


	<footer class="article__footer">
		<p class="article__categories">
			<?php _e('Categorized: ', 'offset'); ?><?php the_category(', '); ?>
		</p>
		<p class="article__tags">
			<?php the_tags(); ?>
		</p>
		<?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>' ) ); ?>
	</footer>


	<?php comments_template(); ?>


</article>
