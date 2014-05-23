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

locate_template( 'lib/define.php',     true, true );
locate_template( 'lib/init.php',       true, true );
locate_template( 'lib/navigation.php', true, true );
locate_template( 'lib/widgets.php',    true, true );
locate_template( 'lib/scripts.php',    true, true );
locate_template( 'lib/cleanup.php',    true, true );
locate_template( 'lib/tweaks.php',     true, true );
