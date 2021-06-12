<?php
function simple_theme_setup(){
    // Featured Image Support
    add_theme_support('post-thumbnails');

    //Menu
    register_nav_menu( array(
        'primary'   => _()
    ));
}

add_action('after_setup_theme', 'basic_theme_setup');

// Excerpt Length
function set_excerpt_length(){
    return 25;
}

add_filter( 'excerpt_length', 'set_excerpt_length');
