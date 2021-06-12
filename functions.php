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


// Widgets Location
function init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before-widget' => '<div class="side-widget">',
        'after-widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'init_widgets');



