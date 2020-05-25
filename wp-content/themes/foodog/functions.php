<?php

function foodog_support()
{

    add_theme_support('title-tag');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête');
    register_nav_menu('footer','Pied de page');
}



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
    wp_register_script(
        'fontawesome',
        'https://kit.fontawesome.com/c9f22d74f7.js',
        [],
        false,
        false
    );
    
    wp_enqueue_script('fontawesome');
    wp_enqueue_script('bootstrapjs1');
    wp_enqueue_script('bootstrapjs2');
    wp_enqueue_script('bootstrapjs3');
}

function foodog_title_separator()
{
    return '|';
}

function foodog_category_class()
{
    $categories = get_the_category();

    $output = '<div class="d-flex justify-content-center">';
    foreach ($categories as $category) {
        $output .= '<a  class="category" href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . '</a>';
    }
    $output .= '</div>';

    return $output;
}

function foodog_menu_class($classes) {
    $classes[]='nav-item';
    return $classes;
}

function foodog_menu_link_class($attrs) {
    $attrs['class']= 'nav-link';
    return $attrs;
}



add_theme_support('post-thumbnails');
add_action('wp_enqueue_scripts', 'foodog_register_bootstrap');
add_action('after_setup_theme', 'foodog_support');
add_action('loop_start', 'foodog_remove_share');
add_filter('document_title_separator', 'foodog_title_separator');
add_filter('the_category', 'foodog_category_class');
add_filter('nav_menu_css_class','foodog_menu_class');
add_filter('nav_menu_link_attributes','foodog_menu_link_class');
require_once('functions/comments_function.php');
CustomComments::addCustomComments();



