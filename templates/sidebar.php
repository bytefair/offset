<?php
/**
 * Controls dynamic sidebar
 */
?>

<div role="complementary" class="sidebar"><?php
	if ( ! dynamic_sidebar( 'sidebar-default' ) ) :
		if ( WP_DEBUG ) {
			echo '<div class="offset__notice">' . esc_html__( 'DEBUG NOTICE: Sidebar is being called with no widgets. Add widgets or customize sidebar.php.', 'offset' ) . '</div>';
		}
	endif; ?>
</div>
