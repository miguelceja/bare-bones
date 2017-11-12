<?php

// Load the theme css

function theme_styles() {

// If you want to link up other css files in a css directory, just copy the wp_enqueue line below and put in the file name instead of 'main' and add /css to the location at the end of hte line.
// To link up an external sheet, like google web fonts...
// wp_enqueue_style( 'googlewebfonts', 'http://fonts.googleapis.com/css?family=Chango' );

	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'global', get_template_directory_uri() . '/css/global.css' );	
	wp_enqueue_style( 'header', get_template_directory_uri() . '/css/header.css' );	
	wp_enqueue_style( 'layout', get_template_directory_uri() . '/css/layout.css' );	
	wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css' );	
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );		


// Import fonts, such as Google fonts

	//wp_enqueue_style( 'googlewebfonts-Oxygen', 'http://fonts.googleapis.com/css?family=Oxygen:400,300,700' );		

}

add_action( 'wp_enqueue_scripts', 'theme_styles' );



// Load the theme js

function theme_js() {

	// Conditional to only load HTML5 Shiv if IE 9 or lower
	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );

	// Load the theme.js file
	wp_register_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );
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