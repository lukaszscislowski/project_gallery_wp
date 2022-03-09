 <?php if (have_posts()) : while (have_posts()) : the_post()
    ?>

         <?php echo get_the_title(get_option('page_for_posts', false)); ?>
         <div class="posts">

             <?php the_content() ?>
         </div>

     <?php endwhile; ?>
 <?php endif; ?>

 <?php dynamic_sidebar('przykladowy-widget'); ?>