<?php
/**
 * header.php
 *
 * Site header
 *
 * @package Offset\Templates
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */

locate_template('templates/head', true, true); ?>


<body <?php body_class(); ?>>
<div class="site__wrapper" role="document">

<div class="header__wrapper">
<header role="banner" class="site__header">
	<div class="site__header__content">
		<a href="<?php echo home_url('/'); ?>"><h1><?php bloginfo('name'); ?></h1></a><?php
		if ( has_nav_menu( 'main-navigation' ) ) :
				wp_nav_menu(array(
					'theme_location'  => 'main-navigation',
					'container'       => 'nav',
					'container_class' => 'site__navigation'
				));
		endif; ?>
	</div>
</header>
</div>

<div class="main__wrapper">
<div class="content-sidebar__wrapper">
