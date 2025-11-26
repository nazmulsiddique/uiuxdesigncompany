<?php
// functions.php

function mytheme_enqueue_assets() {

    // CSS Files
    $styles = [
        'loader'  => '/css/loaders/loader.css',
        'plugins' => '/css/plugins.css',
        'main'    => '/css/main.css',
    ];

    foreach ($styles as $handle => $path) {
        wp_enqueue_style($handle, get_template_directory_uri() . $path);
    }

    // JS Files
    $scripts = [
        'libs' => '/js/libs.min.js', // include countUp library here if inside libs.min.js
        'app'  => '/js/app.js',      // your custom JS code
    ];

    foreach ($scripts as $handle => $path) {
        wp_enqueue_script($handle, get_template_directory_uri() . $path, array('jquery'), null, true);
    }

    // Inline CountUp code (run after app.js loaded)
    wp_add_inline_script('app', "
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof countUp !== 'undefined') {
                const statsCounter1 = new countUp.CountUp('stats-counter-1', 495, optionsPlus);
                const statsCounter2 = new countUp.CountUp('stats-counter-2', 80, optionsPercent);
                const statsCounter3 = new countUp.CountUp('stats-counter-3', 10, optionsPlus);
                const statsCounter4 = new countUp.CountUp('stats-counter-4', 500, optionsPlus);

                statsCounter1.start();
                statsCounter2.start();
                statsCounter3.start();
                statsCounter4.start();
            }
        });
    ");
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');



function mytheme_setup() {

    // 1️⃣ Enable title tag support
    add_theme_support('title-tag');

    // 2️⃣ Enable featured image (post thumbnails)
    add_theme_support('post-thumbnails');



}
add_action('after_setup_theme', 'mytheme_setup');

