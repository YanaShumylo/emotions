<?php
if (!defined('ABSPATH')) exit;

add_action('after_setup_theme', function () {
    add_image_size('gallery-card', 600, 400, true);
});
