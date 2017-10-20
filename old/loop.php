<?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


         <!-- post title -->
         <h2><?php the_title(); ?></h2>
         <!-- /post title -->
         <div>
            <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
            <p>&nbsp;</p>
         </div>

      </article>
      <!-- /article -->

   <?php endwhile; ?>

<?php else: ?>

   <!-- article -->
   <article>
      <h2><?php _e('Ainda sem testemunhos para exibir!', 'html5blank'); ?></h2>
   </article>
   <!-- /article -->

<?php endif; ?>
