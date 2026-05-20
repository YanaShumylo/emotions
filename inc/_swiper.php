<?php
if (!defined('ABSPATH')) exit;

add_action('wp_enqueue_scripts', 'emotions_swiper_assets');

function emotions_swiper_assets()
{
    if (!is_page_template('home-page.php')) {
        return;
    }

    wp_register_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        null
    );

    wp_enqueue_style('swiper-css');

    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        null,
        true
    );
}

    add_filter('style_loader_tag', 'emotions_swiper_preload', 10, 2);

    function emotions_swiper_preload($html, $handle)
    {
        if ($handle === 'swiper-css') {

            return str_replace(
                "rel='stylesheet'",
                "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"",
                $html
            );
        }

        return $html;
    }

