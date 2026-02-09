<?php

function chh_add_theme_scripts(){

    wp_enqueue_style('style',get_stylesheet_uri());

    wp_enqueue_style('bootstrap_css','https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css');

    wp_enqueue_script('bootstrap_js','https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',array(),null,true);
}

add_action('wp_enqueue_scripts', 'chh_add_theme_scripts');

add_theme_support('post-thumbnails');

function chh_register_my_menu(){
    register_nav_menu('primary', __('Menú de la capçalera'));
}

add_action('init', 'chh_register_my_menu');
