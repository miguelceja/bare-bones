<?php

// Load the theme css

function theme_styles() {

// If you want to link up other css files in a css directory, just copy the wp_enqueue line below and put in the file name instead of 'main' and add /css to the location at the end of hte line.
// To link up an external sheet, like google web fonts...
// wp_enqueue_style( 'googlewebfonts', 'http://fonts.googleapis.com/css?family=Chango' );

	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/build/main.css' );

	// Import fonts, such as Google fonts
	//wp_enqueue_style( 'googlewebfonts-Oxygen', 'http://fonts.googleapis.com/css?family=Oxygen:400,300,700' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Load the theme js
function theme_js() {

	// Load the theme.js file
	wp_register_script( 'theme_js', get_template_directory_uri() . '/js/build/app.js', array('jquery'), '', true );
	wp_enqueue_script( 'theme_js');
}

add_action( 'wp_enqueue_scripts', 'theme_js');


// Enable custom menus
add_theme_support( 'menus' );


// Enable widgets
function create_widget( $name, $id, $description) {
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>'
	);

	register_sidebar( $args );
}

// Enable footer widgets
create_widget( 'Left Footer', 'footer_left', 'Displays in the bottom left of footer' );
create_widget( 'Middle Footer', 'footer_middle', 'Displays in the middle of the footer' );
create_widget( 'Right Footer', 'footer_right', 'Displays in the bottom right of the footer' );

?>