<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); echo bloginfo( 'name' ); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php /* pingback sucks but it's standard and no self-pings are on by default */ ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
