<?php

function fwd_post_types(){

    register_post_type('project', [

        'public' => true,
        'labels' => [
            'name' => 'Projects'
        ],
        'menu_icon' => 'dashicons-admin-page',
        'taxonomies' => ['category'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
        'has_archive' => true
    ]);

    register_post_type('skill', [

        'public' => true,
        'labels' => [
            'name' => 'Skills'
        ],
        'menu_icon' => 'dashicons-media-code',
        'taxonomies' => ['category'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
        'has_archive' => true
    ]);

}

add_action('init', 'fwd_post_types');