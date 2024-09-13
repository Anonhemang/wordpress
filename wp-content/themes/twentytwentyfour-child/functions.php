<?php
function child_theme_enqueue_styles() {
// Enqueue child theme styles only
wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');
function custom_theme_scripts() {
    // Enqueue first JavaScript file
    wp_enqueue_script('custom-script-one', get_stylesheet_directory_uri() . '/assets/js/script-one.js', array(), null, true);
    
    // Enqueue second JavaScript file
    wp_enqueue_script('custom-script-two', get_stylesheet_directory_uri() . '/assets/js/script-two.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');
