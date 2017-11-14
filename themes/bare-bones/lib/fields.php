<?php
/**
 * Setup fields.
 *
 * @package BareBones
 * @author  Miguel Ceja <https://miguelceja.com>
 * @link    https://codex.wordpress.org/Template_Hierarchy
 */

 /**
  * Pull in fields.
  */
function bb_setup_wmf_fields() {
	if ( defined( 'FM_VERSION' ) ) {

		$dir = dirname( __FILE__ ) . '/';

		require_once( $dir . 'content-projects.php' );
		require_once( $dir . 'post-types.php' );
	}
}

add_action( 'after_setup_theme', 'bb_setup_wmf_fields' );
