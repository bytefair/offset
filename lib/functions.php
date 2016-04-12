<?php
/**
 * wysiwyg.php
 *
 * wysiwyg.php contains addons and customizations to the MCE editor in the
 * WordPress backend.
 *
 * @package Offset
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.7.0
 */

/**
 * Conditional function to tell if a page is or is a child of a particular ID
 *
 * @since 0.7.0
 */
function is_tree($pid)
{
  global $post;
  if( is_page() && ($post->post_parent==$pid || is_page($pid)) )
    return true;
  else
    return false;
}
