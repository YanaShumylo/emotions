<?php
if (!defined(('ABSPATH'))) exit;

//Define constants
if (!defined('_VERSION')) {
    define('_VERSION', '1.0.0');
}

//include style
require get_template_directory() . '/inc/_scripts.php';

//include theme
require get_template_directory() . '/inc/_theme-setup.php';

//register menu
require get_template_directory() . '/inc/_menus.php';

//swiper
require get_template_directory() . '/inc/_swiper.php';