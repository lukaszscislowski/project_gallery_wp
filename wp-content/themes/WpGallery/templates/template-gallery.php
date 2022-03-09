<?php

/**
 * Template Name: gallery container
 *
 *
 * @package Gallery
 * @subpackage Gallery
 * @since Gallery 1.0
 */
?>

<?php get_header(); ?>
<section class="container-gallery-temp">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>




    <div class="wrapper">
        <img src="<?php the_field('obraz1') ?>" alt="" class="img-fluid" alt="">
        <img src="<?php the_field('obraz2') ?>" alt="" class="img-fluid" alt="">
        <img src="<?php the_field('obraz3') ?>" alt="" class="img-fluid" alt="">
        <img src="<?php the_field('obraz4') ?>" alt="" class="img-fluid" alt="">
        <img src="<?php the_field('obraz4') ?>" alt="" class="img-fluid" alt="">
        <img src="<?php the_field('obraz5') ?>" alt="" class="img-fluid" alt="">
        <img src="<?php the_field('obraz6') ?>" alt="" class="img-fluid" alt="">
        <img src="<?php the_field('obraz7') ?>" alt="" class="img-fluid" alt="">
        <img src="<?php the_field('obraz9') ?>" alt="" class="img-fluid" alt="">
        <img src="<?php the_field('obraz9') ?>" alt="" class="img-fluid" alt="">
        <img src="<?php the_field('obraz10') ?>" alt="" class="img-fluid" alt="">
    </div>

</section><!-- .content-area -->



<?php get_footer(); ?>