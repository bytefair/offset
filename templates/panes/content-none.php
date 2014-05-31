<?php
/**
 * content-none.php
 *
 * Triggers when there is no content
 *
 * @package Offset\Templates
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="article__header">
		<h1 class="article__title entry-title"><?php _e('Sorry, nothing found.', 'offset' ); ?></h1>
	</header>


	<div class="article__content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf(__('Ready to publish your first post? <a href="%1$s">Click here</a>.', 'offset'), esc_url(admin_url('post-new.php'))); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e('Sorry but nothing was found that matches your search. Plese try again with different search terms.', 'offset'); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e('We cannot find what you are trying to access. Perhaps you can find it by searching.', 'offset'); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>

	</div>


</article>
