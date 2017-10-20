<?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

         <div class="row">
            <div class="col-sm-1 hidden-xs-down">
               <div class="calendar">
                  <!-- post details -->
                  <span class="date day"><?php the_time('j'); ?> <?php //the_time('g:i a');   ?></span>
                  <span class="date"><?php the_time('M'); ?> <?php //the_time('g:i a');   ?></span>
                  <!-- /post details -->
               </div>
               <?php edit_post_link(); ?>
            </div>
            <div class="col-sm-11">
               <!-- post thumbnail -->
               <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                     <?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
                  </a>
               <?php endif; ?>
               <!-- /post thumbnail -->
               <!-- post title -->
               <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
               <!-- /post title -->
               <div class="post-excerpt">
                  <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
               </div>
            </div>
         </div>

      </article>
      <!-- /article -->

   <?php endwhile; ?>

<?php else: ?>

   <!-- article -->
   <article>
      <h2><?php _e('Sem conteúdo para exibir!', 'html5blank'); ?></h2>
   </article>
   <!-- /article -->

<?php endif; ?>


