<?php
/**
 * sidebar.php
 *
 * Sitewide sidebar
 *
 * @package Offset\Templates
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */
?>

<aside role="complementary" class="sidebar"><?php
  if ( ! dynamic_sidebar( 'sidebar-default' ) ) :
    if ( WP_DEBUG ) {
      echo '<div class="offset__notice">' . esc_html__('DEBUG NOTICE: Sidebar is being called with no widgets. Widgets suck to code but are occasionally useful.', 'offset') . '</div>';
    }
  endif; ?>
</aside>
