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

/**
 * Required WP Setup
 */
locate_template('lib/define',   true, true); // Define settings
locate_template('lib/supports', true, true); // Set theme supports
locate_template('lib/menus',    true, true); // Set up menus
locate_template('lib/widgets',  true, true); // Set up sidebars/widgets
locate_template('lib/assets',   true, true); // Queue JS and CSS
locate_template('lib/cleanup',  true, true); // Cleanups and tweaks to WP
