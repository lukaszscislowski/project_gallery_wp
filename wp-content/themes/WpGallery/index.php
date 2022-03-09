<?php
get_header(); ?>
<section>
    <div class="blog-post">
        <?php get_template_part('content') ?>
        <hr>
    </div>
    <?php if (is_home()) :
        get_sidebar('home');
    else :
        get_sidebar();
    endif;
    ?>
    <?php get_footer(); ?>