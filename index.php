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
?>

<?php get_header(); ?>


<main class="content-pane hfeed index">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
	<?php endwhile; ?>
		<?php offset_pagination(); ?>
	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
