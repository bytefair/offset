<?php
/**
 * comments.php handles the comments area
 */
?>

<aside class="comments-section">
	<ol class="comments-list"><?php

		wp_list_comments();

		paginate_comments_links();

		comment_form(); ?>

	</ol>
</aside>
