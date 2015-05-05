<?php
/**
 * define.php
 *
 * There are many instances when it's nice to have an easily configurable static
 * variable. This is for those times in Offset and of course define your own as
 * well.
 *
 * @package Offset\Define
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */

// $content_width is used for images and embeds
if ( !isset( $content_width ) ) { $content_width = 736; }

// number of words uses for excerpts
define('EXCERPT_LENGTH', 40);
define('VERSION', '0.8.0');
define( 'IMAGE_EDIT_OVERWRITE', true );
