<?php
/**
 * widgets.php
 *
 * Widgets mostly suck and you should probably do custom functionality in some
 * other way more conducive to sanity.
 *
 * @package Offset\Widgets
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */

/**
 * Registers sidebars
 *
 * @since 0.1.0
 */
function offset_register_sidebars()
{
	register_sidebar( array(
		// 'id'            => 'sidebar-default',
		// 'name'          => __( 'Default Sidebar', 'offset' ),
		// 'description'   => __( 'The primary site sidebar.', 'offset' ),
		// 'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		// 'after_widget'  => '</aside>',
		// 'before_title'  => '<h1 class="widget-title">',
		// 'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'offset_register_sidebars' );
