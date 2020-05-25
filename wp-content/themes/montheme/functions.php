<?php

    function montheme_supports () {
        add_theme_support('title-tag');
        add_theme_support('menus');
        register_nav_menu('header','Entête menu');
        register_nav_menu('footer','Pied de page');
    }

    function montheme_register_assets () {
        wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
        wp_register_script('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',['popper','jquery'],false, true);
        wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',[],false, true);
        wp_deregister_script('jquery');
        wp_register_script('jqurey','https://code.jquery.com/jquery-3.4.1.slim.min.js',[],false,true);
        wp_enqueue_style('bootstrap');
        wp_enqueue_script('bootstrap');
    }

    function montheme_menu_class($classes) {
        $classes[]='nav-item';
        return $classes;
    }

    function montheme_menu_link_class($attrs) {
        $attrs['class']= 'nav-link';
        return $attrs;
    }

    add_action('after_setup_theme', 'montheme_supports');
    add_action('wp_enqueue_scripts','montheme_register_assets');
    add_filter('nav_menu_css_class','montheme_menu_class');
    add_filter('nav_menu_link_attributes','montheme_menu_link_class');

