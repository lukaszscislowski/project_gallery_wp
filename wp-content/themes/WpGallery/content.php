 <?php if (have_posts()) : while (have_posts()) : the_post()
    ?>

         <div class="posts">
             <h2><?php the_title() ?></h2>
             <?php the_content() ?>
         </div>

     <?php endwhile; ?>
 <?php endif; ?>