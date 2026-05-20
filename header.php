<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Emotion theme website">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Roboto-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="container header-inner">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/LogoEmotion.png" width="120" height="60" loading="eager" fetchpriority="high" alt="Emotion logo">
            </a>

            <button class="burger" id="burger" aria-label="Open navigation menu" aria-expanded="false" aria-controls="header-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <?php
            wp_nav_menu([
                "theme_location" => "header_menu",
                "menu_id" => "header-menu",
                "container" => "nav",
                "container_class" => "header-menu",
            ]) ?>
        </div>
    </header>