<?php

add_action('wp_ajax_load_modal', 'load_modal');
add_action('wp_ajax_nopriv_load_modal', 'load_modal');

function load_modal() {

$type = $_POST['type'] ?? '';

if ($type === 'cf7') {
        echo '
        <div class="form-wrapper">
            <div class="form-card">
        ';
echo do_shortcode('[contact-form-7 id="47594af" title="Contact form 1"]');
        echo '
            </div>
        </div>
        ';
}

if ($type === 'about') {
echo '<h2>About modal content</h2>';
}

wp_die();
}