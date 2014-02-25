<?php
/**
 * cleanup.php
 *
 * This section contains code from Roots and influenced by many developers. This
 * is some of my favorite code in Roots as I was unaware of most of it before I
 * read the Roots source. - PG
 */

//* candy nobody wants
function offset_head_scrubber()
{
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
}
add_action( 'init', 'offset_head_scrubber' );


//* strips the WP version from feeds
add_filter('the_generator', '__return_false');


//* clean up output of CSS links (from Roots)
function offset_clean_style_tag( $input )
{
	preg_match_all( "!<link rel='stylesheet'\s?(id='[^']+')?\s+href='(.*)' type='text/css' media='(.*)' />!", $input, $matches );
	// Only display media if it is meaningful
	$media = $matches[3][0] !== '' && $matches[3][0] !== 'all' ? ' media="' . $matches[3][0] . '"' : '';
	return '<link rel="stylesheet" href="' . $matches[2][0] . '"' . $media . '>' . "\n";
}
add_filter( 'style_loader_tag', 'offset_clean_style_tag' );


//* this ain't no XML son (from Roots)
function offset_remove_self_closing_tags( $input )
{
	return str_replace(' />', '>', $input);
}
add_filter('get_avatar',          'offset_remove_self_closing_tags'); // <img />
add_filter('comment_id_fields',   'offset_remove_self_closing_tags'); // <input />
add_filter('post_thumbnail_html', 'offset_remove_self_closing_tags'); // <img />


//* use the EXCERPT_LENGTH variable
function offset_excerpt_length()
{
	return EXCERPT_LENGTH;
}
add_filter( 'excerpt_length', 'offset_excerpt_length' );


//* ugh, more self-closing elements, this time rel=canonical (from Roots)
function offset_rel_canonical()
{
	global $wp_the_query;

	if ( !is_singular() ) {
		return;
	}

	if ( !$id = $wp_the_query->get_queried_object_id() ) {
		return;
	}

	$link = get_permalink($id);
	echo "\t<link rel=\"canonical\" href=\"$link\">\n";
}
add_action( 'init', 'offset_rel_canonical' );


//* clean up body_class() ouput (from Roots)
function offset_body_class( $classes )
{
	// Add post/page slug
	if (is_single() || is_page() && !is_front_page()) {
		$classes[] = basename(get_permalink());
	}

	// Remove unnecessary classes
	$home_id_class = 'page-id-' . get_option('page_on_front');
	$remove_classes = array(
		'page-template-default',
		$home_id_class
	);
	$classes = array_diff($classes, $remove_classes);

	return $classes;
}
add_filter( 'body_class', 'offset_body_class' );


//* use <figure> and <figcaption> on images (from Roots)
// function offset_caption( $output, $attr, $content )
// {
// 	if (is_feed()) {
// 		return $output;
// 	}

// 	$defaults = array(
// 		'id'      => '',
// 		'align'   => 'alignnone',
// 		'width'   => '',
// 		'caption' => ''
// 	);

// 	$attr = shortcode_atts($defaults, $attr);

// 	// If the width is less than 1 or there is no caption, return the content wrapped between the [caption] tags
// 	if ($attr['width'] < 1 || empty($attr['caption'])) {
// 		return $content;
// 	}

// 	// Set up the attributes for the caption <figure>
// 	$attributes  = (!empty($attr['id']) ? ' id="' . esc_attr($attr['id']) . '"' : '' );
// 	$attributes .= ' class="wp-caption ' . esc_attr($attr['align']) . '"';
// 	// uncomment if you want to probe widths, but it will screw up responsiveness
// 	//$attributes .= ' style="width: ' . (esc_attr($attr['width']) + 10) . 'px"';

// 	$output  = '<div class="clearfix"><figure' . $attributes .'>';
// 	$output .= do_shortcode($content);
// 	$output .= '<figcaption class="caption wp-caption-text">' . $attr['caption'] . '</figcaption>';
// 	$output .= '</figure></div>';

// 	return $output;
// }
// add_filter('img_caption_shortcode', 'offset_caption', 10, 3);
