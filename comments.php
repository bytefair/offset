<?php
/**
 * comments.php
 *
 * Comments display
 *
 * @package Offset\Templates
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */
?>

<aside class="comments-section">
  <ol class="comments-list"><?php

    wp_list_comments();

    paginate_comments_links();

    comment_form(); ?>

  </ol>
</aside>
