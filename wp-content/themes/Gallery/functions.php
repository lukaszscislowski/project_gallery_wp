<?php

/**
 * Functions and definitions
 *
 * @package Iknow
 * @subpackage Iknow
 * @since Iknow 1.0
 *
 **/


function load_css()
{
    wp_register_style('styles', get_template_directory_uri() . '/css/styles.css', [], 1, 'all');
    wp_enqueue_style('styles');

    wp_register_style('legacy', get_template_directory_uri() . '/css/normalize-legacy.css', [], 1, 'all');
    wp_enqueue_style('legacy');

    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', [], 1, 'all');
    wp_enqueue_style('normalize');
}
add_action('wp_enqueue_scripts', 'load_css');


function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}
add_action('init', 'register_my_menus');
