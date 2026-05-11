<?php

add_action('wp_enqueue_scripts', 'emotions_scripts');
function emotions_scripts()
{
    //fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), null);

    //styles
    wp_enqueue_style('emotions-style', get_template_directory_uri() . '/assets/css/app.css', array(), _VERSION);

    //scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('emotions-script', get_template_directory_uri() . '/assets/js/app.js', array(), _VERSION, true);
}
