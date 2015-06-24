<?php

function get_parent_theme_css() {
	wp_enqueue_style( 'columbus-child', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'columbus-styles-child', get_template_directory_uri() . '/styles.css' );
	wp_enqueue_style( 'columbus-lessframework-child', get_template_directory_uri() . '/lessframework.css' );
	wp_enqueue_style( 'columbus-fancydropdown-child', get_template_directory_uri() . '/fancydropdown.css' );
	wp_enqueue_style( 'columbus-footer-child', get_template_directory_uri() . '/footer.css' );
}
add_action( 'wp_enqueue_scripts', 'get_parent_theme_css' );

// custom header image support
define('HEADER_IMAGE_WIDTH', 481); // use width and height appropriate for your theme
define('HEADER_IMAGE_HEIGHT', 46);

?>