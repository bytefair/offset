<?php
/**
 * Theme sidebar
 *
 * Controls dynamic sidebar
 *
 * @package offset
 */
?>

<div role="complementary" class="sidebar">
	<?php if ( ! dynamic_sidebar( 'sidebar-default' ) ) : ?>
		<?php if ( WP_DEBUG ) { echo '<div class="offset__notice">' . esc_html__( 'DEBUG NOTICE: Sidebar is being called with no widgets. Add widgets or customize sidebar.php.', 'offset' ) . '</div>'; } ?>
	<?php endif; ?>
</div>
