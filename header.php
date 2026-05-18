<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emotions</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="container header-inner">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/LogoEmotion.png" alt="logo">
            </a>

            <button class="burger" id="burger">
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