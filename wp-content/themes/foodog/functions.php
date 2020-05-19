<?php

add_theme_support('title-tag');

function foodog_register_bootstrap()
{
    wp_register_style(
        'bootstrap',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'
    );
    wp_register_style(
        'fonts',
        'https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap'
    );
    wp_register_style(
        'style',
        get_stylesheet_uri()
    );

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('fonts');
    wp_enqueue_style('style');

    wp_register_script(
        'bootstrapjs1',
        'https://code.jquery.com/jquery-3.5.1.slim.min.js',
        [],
        false,
        true
    );
    wp_register_script(
        'bootstrapjs2',
        'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
        [],
        false,
        true
    );
    wp_register_script(
        'bootstrapjs3',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js',
        [],
        false,
        true
    );

    wp_enqueue_script('bootstrapjs1');
    wp_enqueue_script('bootstrapjs2');
    wp_enqueue_script('bootstrapjs3');
}

function foodog_title_separator()
{
    return '|';
}
add_theme_support('post-thumbnails');
add_action('wp_enqueue_scripts', 'foodog_register_bootstrap');
add_filter('document_title_separator', 'foodog_title_separator');
