<?php

if (!defined('ABSPATH')) exit;

if (function_exists('acf_add_options_page')) {

    acf_add_options_page([
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug'  => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ]);
}
