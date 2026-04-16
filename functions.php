<?php

function flobloom_enqueue_scripts() {

    // Google Font
    wp_enqueue_style(
        'flobloom-google-font',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap',
        false
    );

    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        null
    );

    // Theme Style
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array('bootstrap-css')
    );

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'flobloom_enqueue_scripts');