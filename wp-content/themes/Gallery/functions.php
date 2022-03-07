<?php
/**
 * Functions and definitions
 *
 * @package Iknow
 * @subpackage Iknow
 * @since Iknow 1.0
 *
**/
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
