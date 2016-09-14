<?php

// use minified CSS and dequeue 2013 default fonts
function add_custom_css() {
    wp_deregister_style( 'twentyfifteen-style' );
    wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_directory_uri() . '/style.min.css' );
}
add_action( 'wp_print_styles', 'add_custom_css' );

// add footer credits
function custom_footer_credits() {
    echo '&copy;' . date( 'Y' ) . ' <a href="http://www.mauneylibrary.org/" target="_blank">Mauney Memorial Library</a> and <a href="http://www.kingsmountainmuseum.org/" target="_blank">Kings Mountain Historial Museum</a><br/>
    <a href="https://www.andrewrminion.com/" target="_blank">Designed by AndrewRMinion Design</a> | ';
}
add_action( 'twentyfifteen_credits', 'custom_footer_credits' );
