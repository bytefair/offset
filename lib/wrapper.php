<?php
/**
 * wrapper.php
 *
 * @package Offset\Wrapper
 * @author Roots Team <http://roots.io>
 * @license http://opensource.org/licenses/MIT
 * @since 0.3.0
 *
 * @link http://roots.io/an-introduction-to-the-roots-theme-wrapper/
 * @link http://scribu.net/wordpress/theme-wrappers.html
 */

function offset_template_path() {
	return Offset_Wrapping::$main_template;
}

function offset_sidebar_path() {
	return new Offset_Wrapping( 'templates/sidebar.php' );
}

class Offset_Wrapping {
	// Stores the full path to the main template file
	static $main_template;

	// Stores the base name of the template file; e.g. 'page' for 'page.php' etc.
	static $base;

	public function __construct( $template = 'base.php' ) {
		$this->slug = basename( $template, '.php' );
		$this->templates = array( $template );

		if ( self::$base ) {
			$str = substr( $template, 0, -4 );
			array_unshift( $this->templates, sprintf( $str . '-%s.php', self::$base ) );
		}
	}

	public function __toString() {
		$this->templates = apply_filters( 'offset_wrap_' . $this->slug, $this->templates );
		return locate_template( $this->templates );
	}

	static function wrap( $main ) {
		self::$main_template = $main;
		self::$base = basename( self::$main_template, '.php' );

		if ( self::$base === 'index' ) {
			self::$base = false;
		}

		return new Offset_Wrapping();
	}
}
add_filter( 'template_include', array( 'Offset_Wrapping', 'wrap' ), 99 );
