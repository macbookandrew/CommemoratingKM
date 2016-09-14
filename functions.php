<?php

// use minified CSS and dequeue default fonts
function add_custom_css() {
    wp_deregister_style( 'twentyfifteen-style' );
    wp_deregister_style( 'twentyfifteen-fonts' );
    wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_directory_uri() . '/style.min.css' );
}
add_action( 'wp_print_styles', 'add_custom_css' );

// include custom fonts
function add_custom_webfonts() {
    $font_loader = "
        WebFontConfig = {
            google: { families: ['Vollkorn', 'Oswald'] }
        };

        (function(d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            s.parentNode.insertBefore(wf, s);
        })(document);
    ";
    wp_add_inline_script( 'jquery-migrate', $font_loader, 'before' );
}
add_action( 'wp_enqueue_scripts', 'add_custom_webfonts' );

// add footer credits
function custom_footer_credits() {
    echo '&copy;' . date( 'Y' ) . ' <a href="http://www.mauneylibrary.org/" target="_blank">Mauney Memorial Library</a> and <a href="http://www.kingsmountainmuseum.org/" target="_blank">Kings Mountain Historial Museum</a><br/>
    <a href="https://www.andrewrminion.com/" target="_blank">Designed by AndrewRMinion Design</a> | ';
}
add_action( 'twentyfifteen_credits', 'custom_footer_credits' );
