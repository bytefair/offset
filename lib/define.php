<?php
/**
 * define.php
 *
 * There are many instances when it's nice to have an easily configurable static
 * variable. This is for those times in Offset and of course define your own as
 * well.
 */

// $content_width is used for images
if ( !isset( $content_width ) ) { $content_width = 736; }

// number of words uses for excerpts
define( 'EXCERPT_LENGTH', 40 );
