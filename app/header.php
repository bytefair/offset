<?php
/**
 * Theme header
 *
 * Controls all code above content pane
 *
 * @package offset
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(''); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- pingback sucks but it's standard and no self-pings are on by default -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	<div class="site__wrapper">


		<header role="banner" class="site__header">
			<h1><?php bloginfo('name'); ?></h1>
			<!-- navigation? -->
		</header>
