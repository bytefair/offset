<?php
/**
 * navigation.php
 *
 * Controls navigational elements such as pagination and menus. Bootstrap 3 only
 * allows one sublevel of dropdown, so if you need complex menus, you'll want to
 * handle the menu controls on your own. Hell, if you're getting that complex
 * you are probably writing your own walkers anyway. -PG
 *
 * @package Offset\Navigation
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */

/**
 * Registers nav menus so we can call them later
 *
 * @since 0.1.0
 */
function offset_menu_init()
{
  register_nav_menus( array(
    //'main-navigation'   => __( 'Main Navigation', 'offset' )
  ) );
}
add_action( 'init', 'offset_menu_init' );
