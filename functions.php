<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/src/min.js' );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
