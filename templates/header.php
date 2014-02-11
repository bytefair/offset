<?php

get_template_part( 'templates/head' ); ?>


<body <?php body_class(); ?>>
<div class="site__wrapper" role="document">


<header role="banner" class="site__header">
	<h1><?php bloginfo('name'); ?></h1>
	<?php if ( has_nav_menu( 'main-navigation' ) ) : ?>
		<nav class="main-navigation">
			<?php wp_nav_menu( 'main-navigation' ); ?>
		</nav>
	<?php endif; ?>
</header>
