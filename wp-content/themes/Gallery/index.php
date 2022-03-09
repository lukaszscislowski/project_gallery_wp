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
get_header(); ?>

</header>
<div class="wrap">
    <main role="container">
        <section class="section" id="content">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-three-quarters">
                        <?php
                        if (have_posts()) : ?>
                            <div class="box">
                                <?php
                                $post_icon = apply_filters('iknow_post_icon', 'icon-doc');
                                // Load posts loop.
                                while (have_posts()) :
                                    the_post(); ?>
                                    <a class="panel-block" href="<?php the_permalink(); ?>">
                                        <span class="panel-icon"><span class="<?php echo esc_attr($post_icon); ?>"></span></span>
                                        <?php the_title(); ?>
                                    </a>
                                <?php endwhile; ?>
                            </div>


                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>