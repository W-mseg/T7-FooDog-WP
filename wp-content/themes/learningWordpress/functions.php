<?php

namespace App;

define('BOOTSRAP', 'bootstrap');
define('BOOTSTRAPCSSLINK', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
define('POPPER', 'popper');
define('BOOTSRAPJSLINK', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js");
define('JQUERY', 'jquery');
define('POPPERJSLINK', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
define('JQUERYJSLINK', 'https://code.jquery.com/jquery-3.5.1.slim.min.js');

function my_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header' , 'en tête du menu');
}

function my_theme_register_assets()
{
    wp_register_style(BOOTSRAP, BOOTSTRAPCSSLINK);
    wp_register_script(BOOTSRAP, BOOTSRAPJSLINK, [POPPER, JQUERY], false, true);
    wp_register_script(POPPER, POPPERJSLINK, [], false, true);
    wp_deregister_script(JQUERY);
    wp_register_script(JQUERY, JQUERYJSLINK, [], false, true);
    wp_enqueue_style(BOOTSRAP);
    wp_enqueue_script(BOOTSRAP);
}

function my_theme_title_separator()
{
    return '|';
}

add_action('after_setup_theme', 'App\my_theme_support', 10);
add_action('wp_enqueue_scripts', 'App\my_theme_register_assets');
add_filter('document_title_separator', 'App\my_theme_title_separator');
