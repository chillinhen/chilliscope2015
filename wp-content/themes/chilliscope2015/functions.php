<?php
add_action('after_setup_theme', 'chilli_theme_setup');

function chilli_theme_setup() {
    // Add Translation Option
    load_theme_textdomain( 'chilli_2015', get_stylesheet_directory() . '/languages' );
    $locale = get_locale();
    
    //init Styles
    if (!function_exists("chi_styles")) {
        if (!is_admin()) {
            function chi_styles() {
                wp_register_style('googlefonts', 'http://fonts.googleapis.com/css?family=Hind&subset=latin', 'style', '1.0', 'screen');
		wp_enqueue_style('googlefonts');
                wp_register_style('googlefonts', 'http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css', 'style', '4.0.3', 'all');
                wp_enqueue_style('googlefonts');
                wp_register_style('wip', get_stylesheet_directory_uri() . '/css/wip.css', 'style', '1.0', 'screen');
                wp_enqueue_style('wip');
            }
        }
    }
    add_action('wp_enqueue_scripts', 'chi_styles');
    
    //init scripts
    if (!function_exists("chi_scripts")) {
        if (!is_admin()) {

            function chi_scripts() {
                //masonry
		wp_register_script('masonry', 'cdnjs.cloudflare.com/ajax/libs/masonry/3.3.0/masonry.pkgd.min.js', array('jquery'), '1.0');
		wp_enqueue_script('masonry');
                //masonry
		wp_register_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), '1.0');
		wp_enqueue_script('custom');
            }

        }
    }
    add_action('wp_enqueue_scripts', 'chi_scripts');
}

?>