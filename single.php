<?php get_header(); ?>

<main role="main">
   <!-- section -->
   <section>

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <div class="page-contents">
               <h1><?php the_title(); ?></h1>
               <div class="row blog">
                  <div class="col-sm-1 hidden-xs-down">
                     <div class="calendar">
                        <!-- post details -->
                        <span class="date day"><?php the_time('j'); ?> <?php //the_time('g:i a');   ?></span>
                        <span class="date"><?php the_time('M'); ?> <?php //the_time('g:i a');   ?></span>
                        <!-- /post details -->
                     </div>
                     <?php edit_post_link(); ?>
                  </div>
                  <div class="col-md-8">
                     <!-- article -->
                     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <!-- post thumbnail -->
                        <?php if (has_post_thumbnail()) : // Check if Thumbnail exists ?>
                           <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                        <?php endif; ?>
                        <!-- /post thumbnail -->
                        <?php the_content(); // Dynamic Content ?>

                        <p><?php the_tags(__('Tags: ', 'html5blank'), ', ', '<br>'); // Separated by commas with a line break at the end    ?></p>

                        <p><?php
                           _e('Na categoria: ', 'html5blank');
                           the_category(', '); // Separated by commas    
                           ?></p>
                     </article>
                     <!-- /article -->
                  </div>
                  <div class="col-md-3">
                     <?php get_sidebar(); ?>
                  </div>
               </div>
            </div>

         <?php endwhile; ?>

      <?php else: ?>

         <!-- article -->
         <article>

            <h1><?php _e('Sem conteúdo para exibir!', 'html5blank'); ?></h1>

         </article>
         <!-- /article -->

      <?php endif; ?>

   </section>
   <!-- /section -->
</main>

<?php get_footer(); ?>
