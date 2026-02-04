<?php

function chh_add_theme_scripts(){
    wp_enqueue_style ('style', get_stlesheet_uri() );
    wp_enqueue_style ('boostrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css');
    wp_enqueue_script ('boostrap_js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js');
    wp_enqueue_scpipt ('boostrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js');

}

add_action('wp_enqueue_scripts', 'chh_add_theme_scripts');