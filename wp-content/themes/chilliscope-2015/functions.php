<?php

/**
 * Theme Name child theme functions and definitions
 */
/* ————————————————————————————————————————— */
/* Include the parent theme style.css
  /*————————————————————————————————————————— */

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

add_action('after_setup_theme', 'chilli_theme_setup');

function chilli_theme_setup() {
    //init Styles
    if (!function_exists("chi_styles")) {
        if (!is_admin()) {

            function chi_styles() {
                wp_enqueue_style('googlefonts', 'http://fonts.googleapis.com/css?family=Hind&subset=latin', 'style', '1.0', 'screen');
                wp_enqueue_style('fontawesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css', 'style', '4.0.3', 'all');
                wp_enqueue_style('wip', get_stylesheet_directory_uri() . '/css/wip.css', 'style', '1.0', 'screen', array('googlefonts', 'fontawesome'));
            }

        }
    }
    add_action('wp_enqueue_scripts', 'chi_styles');

    //dequeue wp jqiery
    add_action('wp_enqueue_scripts', 'register_jquery');

    function register_jquery() {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', ( 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'), false, null, true);
    }

    //init scripts
    if (!function_exists("chi_scripts")) {
        if (!is_admin()) {

            function chi_scripts() {
                //masonry
                wp_enqueue_script('masonry', 'cdnjs.cloudflare.com/ajax/libs/masonry/3.3.0/masonry.pkgd.min.js', array('jquery'), '1.0');
                //masonry
                wp_enqueue_script('caroufredsel', get_stylesheet_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js', array('jquery'), '1.0');
                //custom
                wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery', 'masonry', 'caroufredsel'), '1.0');
            }

        }
    }
    add_action('wp_enqueue_scripts', 'chi_scripts');
}

?>