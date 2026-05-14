<?php
/*
Template Name: Home page
Template Post Type: page
*/
get_header();
?>

<?php get_template_part('template-parts/home-page', 'hero'); ?>

<?php get_template_part('template-parts/home-page', 'gallery'); ?>

<?php get_template_part('template-parts/home-page', 'faq'); ?>

<?php get_footer(); ?>