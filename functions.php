<?php
/**
 * functions.php
 *
 * functions.php is the first theme code WP runs, we have split this file into
 * our lib directory to prevent kitchen sinkery.
 *
 * @package Offset
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */

//  for an explanation of why we use require_once locate_template() see https://github.com/roots/roots/pull/179
require_once locate_template( 'lib/define.php' );
require_once locate_template( 'lib/init.php' );       // after_setup_theme
require_once locate_template( 'lib/navigation.php' );
require_once locate_template( 'lib/widgets.php' );    // widgets_init
require_once locate_template( 'lib/scripts.php' );    // wp_enqueue_scripts
require_once locate_template( 'lib/cleanup.php' );
require_once locate_template( 'lib/tweaks.php' );
