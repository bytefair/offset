<?php
/**
 * functions.php
 *
 * Shoving everything in a flat file was and remains hella dumb. Please review
 * the README if you're confused about how this works. Another solution that's a
 * bad idea is to create giant 20 line comment blocks to set apart sections. Not
 * respecting vertical space is bad manners. - PG
 */

//* comments specify where code fires - http://codex.wordpress.org/Plugin_API/Action_Reference
require_once locate_template( 'lib/init.php' );       // after_setup_theme
require_once locate_template( 'lib/navigation.php' ); //
require_once locate_template( 'lib/widgets.php' );
require_once locate_template( 'lib/scripts.php' );
require_once locate_template( 'lib/tweaks.php' );
