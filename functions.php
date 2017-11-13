<?php
/**
 * Theme functions and definitions.
 *
 * @package BareBones
 * @author  Miguel Ceja <https://miguelceja.com>
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 */

 /**
  * Load the theme CSS
  */
function bb_theme_styles() {

	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/build/main.css' );
	wp_enqueue_style( 'googlewebfonts-Oxygen', 'http://fonts.googleapis.com/css?family=Oxygen:400,300,700' );
}

add_action( 'wp_enqueue_scripts', 'bb_theme_styles' );

/**
 * Load the theme JS.
 */
function bb_theme_js() {

	wp_register_script( 'bb_live_reload', 'http://localhost:35729/livereload.js', '', '', true );
	wp_register_script( 'bb_theme_js', get_template_directory_uri() . '/js/build/app.min.js', array( 'jquery'), '', true );

	wp_enqueue_script( 'bb_live_reload' );
	wp_enqueue_script( 'bb_theme_js' );
}

add_action( 'wp_enqueue_scripts', 'bb_theme_js' );

/**
 * Add custom menu spport.
 */
add_theme_support( 'menus' );

/**
 * Below are examples of possible widgets for the footer, but they can be customized and moved anywhere.
 *
 * @param string $name Name of footer widget.
 * @param string $id ID given to widget.
 * @param string $description where the widget is displayed in the footer.
 */
function bb_create_widget( $name, $id, $description ) {
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	);

	register_sidebar( $args );
}

bb_create_widget( 'Left Footer', 'footer_left', 'Displays in the bottom left of footer' );
bb_create_widget( 'Middle Footer', 'footer_middle', 'Displays in the middle of the footer' );
bb_create_widget( 'Right Footer', 'footer_right', 'Displays in the bottom right of the footer' );
