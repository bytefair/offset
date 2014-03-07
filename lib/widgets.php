<?php
/**
 * widgets.php
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
		'id'            => 'sidebar-default',
		'name'          => __( 'Default Sidebar', 'offset' ),
		'description'   => __( 'The primary site sidebar.', 'offset' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'offset_register_sidebars' );


/**
 * Checks for banned templates, if in either array, skips entire sidebar
 *
 * @since 0.3.0
 */
function offset_display_sidebar()
{
	$offset_banned_templates = array(
		'404.php',
		'page.php'
	);

	if ( is_page_template( in_array( true, $offset_banned_templates ) ) ) return false;

	return true;
}
