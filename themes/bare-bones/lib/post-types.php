<?php
/**
 * Define custom post types fields.
 *
 * @package BareBones
 * @author  Miguel Ceja <https://miguelceja.com>
 * @link    https://codex.wordpress.org/Template_Hierarchy
 */

/**
 * Register our custom post types.
 */
function bb_register_post_types() {

	// Project Cards example.
	register_post_type( 'bb_projects', array(
		'hierarchical' => true,
		'labels' => array(
			'name' => __( 'Projects' ),
			'singular_name' => __( 'Project' ),
		),
		'public' => true,
		'supports' => array( 'title' ),
	) );
}

add_action( 'init', 'bb_register_post_types' );
