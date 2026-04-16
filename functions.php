<?php

function mytheme_assets() {
    wp_enqueue_style(
        'tailwind',
        get_template_directory_uri() . '/assets/css/tailwind.css',
        array(),
        '1.0.0'
    );
}

add_action('wp_enqueue_scripts', 'mytheme_assets');