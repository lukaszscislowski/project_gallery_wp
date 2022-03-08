<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package Worpress
 * @subpackage Gallery
 * @since Gallery 1.0
 */
?>



<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">

    <title>TITLE</title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <header class="header" role="banner">


        <nav class="nav" role="navigation">
            <?php
            wp_nav_menu(array('theme_location' => 'header-menu'));
            ?>
        </nav>



    </header>