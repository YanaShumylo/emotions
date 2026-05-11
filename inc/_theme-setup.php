<?php

add_filter('body_class', function ($classes) {

    $theme = $_COOKIE['site_theme'] ?? 'theme-neutral';

    $classes = array_filter($classes, function ($class) {
        return strpos($class, 'theme-') !== 0;
    });

    $classes[] = $theme;

    return $classes;
});
