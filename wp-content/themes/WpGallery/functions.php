<?php

/**
 * Functions and definitions
 *
 * @package WpGallery
 * @subpackage WpGallery
 * @since WpGallery 1.0
 *
 **/
add_theme_support('custom-logo');

function load_css()
{
    wp_register_style('styles', get_template_directory_uri() . '/css/styles.css', [], 1, 'all');
    wp_enqueue_style('styles');
}
add_action('wp_enqueue_scripts', 'load_css');

wp_enqueue_style("styles", get_template_directory_uri() . "/css/styles.css", false, '1.1', 'all');


wp_enqueue_script("custom-script", get_template_directory_uri() . "/js/scripts.js", array("jquery"), "1.1", true);




function reg_menu()
{
    register_nav_menu('header-menu', __('Menu główne'));
}
add_action('init', 'reg_menu');


function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

add_filter('nav_menu_link_attributes', 'bootstrap5_dropdown_compatiblity');
function bootstrap5_dropdown_compatiblity($atts)
{
    if (array_key_exists('data-toggle', $atts)) {
        unset($atts['data-toggle']);
        $atts['data-bs-toggle'] = 'dropdown';
    }
    return $atts;
}



function my_widget_init()
{
    register_sidebar(array(
        'name'          => 'Przykładowy widget',
        'id'            => 'przykladowy-widget',
        'before_widget' => ' ',
        'after_widget'  => ' ',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'my_widget_init');


get_post_custom_values('nazwa_pola');


add_theme_support('custom-logo');
