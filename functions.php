<?php

// use minified CSS and dequeue 2013 default fonts
function add_custom_css() {
    wp_deregister_style( 'twentyfifteen-style' );
    wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_directory_uri() . '/style.min.css' );
}
add_action( 'wp_print_styles', 'add_custom_css' );

