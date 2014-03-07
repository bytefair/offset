<?php
/**
 * base.php
 *
 * Base is the file that serves as the theme wrapper
 *
 * @package Offset\Templates
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.3.0
 */

get_template_part( 'templates/header' );
include offset_template_path();
if ( offset_display_sidebar() ) include offset_sidebar_path();
get_template_part( 'templates/footer' );
