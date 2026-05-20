<?php

add_action('wp_enqueue_scripts', 'emotions_scripts');
function emotions_scripts()
{
    //styles
    wp_enqueue_style('emotions-style', get_template_directory_uri() . '/assets/css/app.css', array(), filemtime(get_template_directory() . '/assets/css/app.css'));

    //scripts
    wp_enqueue_script('emotions-script', get_template_directory_uri() . '/assets/js/app.js', array(), filemtime(get_template_directory() . '/assets/js/app.js'), true);
}
