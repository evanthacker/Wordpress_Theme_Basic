<?php
function basic_theme_setup(){
    // Featured Image Support
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme' 'basic_theme_setup');