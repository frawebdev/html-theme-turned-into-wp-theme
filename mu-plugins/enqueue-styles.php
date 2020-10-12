<?php

function fwd_add_css(){

    wp_enqueue_style('font', '//fonts.googleapis.com/css2?family=Quicksand:wght@200;300;400;700');
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('theme_bootstrap', get_theme_file_uri('/css/bootstrap.css'));
    wp_enqueue_style('custom', get_theme_file_uri('/css/custom.css'));
    wp_enqueue_style('animation', get_theme_file_uri('/css/animations.css'));
    wp_enqueue_style('font_awesome', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css');
    wp_enqueue_style('animate.css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');

}

add_action('wp_enqueue_scripts', 'fwd_add_css');