<?php

add_action( 'widgets_init', 'offset_register_sidebars' );
function offset_register_sidebars()
{
	register_sidebar( array(
		'id'          => 'sidebar-default',
		'name'        => __( 'Default Sidebar', 'offset' ),
		'description' => __( 'The primary site sidebar.', 'offset' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
