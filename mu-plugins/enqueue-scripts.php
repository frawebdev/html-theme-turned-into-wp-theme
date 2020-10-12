<?php

function fwd_add_js(){

    wp_enqueue_script('modernizr', get_theme_file_uri('/js/modernizr.custom.js'));
    wp_enqueue_script('jQ', get_theme_file_uri('/js/jquery.js'), array(), false, true);
    wp_enqueue_script('page_transition', get_theme_file_uri('/js/pagetransitions.js'), array(), false, true);
    wp_enqueue_script('validation', get_theme_file_uri('/js/validation.js'), array(), false, true);
    wp_enqueue_script('grid', get_theme_file_uri('/js/grid.js'), array(), false, true);
    wp_enqueue_script('scripts', get_theme_file_uri('/js/scripts.js'), array(), false, true);


}

add_action('wp_enqueue_scripts', 'fwd_add_js');