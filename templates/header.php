<?php

get_template_part( 'templates/head' ); ?>


<body <?php body_class(); ?>>
<div class="site__wrapper" role="document">

<div class="header__wrapper">
<header role="banner" class="site__header">
	<a href="<?php echo home_url( '/' ); ?>"><h1><?php bloginfo('name'); ?></h1></a><?php
	if ( has_nav_menu( 'main-navigation' ) ) :
			wp_nav_menu( array(
				'theme_location'  => 'main-navigation',
				'container'       => 'nav',
				'container_class' => 'site__navigation',
				'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
				'walker'          => new wp_bootstrap_navwalker()
			) );
	endif; ?>
</header>
</div>

<div class="main__wrapper">
<div class="content-sidebar__wrapper">
