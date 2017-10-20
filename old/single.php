<?php get_header(); ?>

<main role="main">
   <!-- section -->
   <section>

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

               <div class="page-contents">
                  <h1>A VOZ DE QUEM NOS CONHECE</h1>
                  <div class="row">
                     <div class="col-sm-4">
                        <?php wp_nav_menu(array('menu' => 'testimonial-categories')); ?>
                     </div>
                     <div class="col-sm-8">
                        <!-- post title -->
                        <h2><?php the_title(); ?></h2>
                        <!-- /post title -->
                        <?php the_content(); // Dynamic Content ?>
                     </div>
                  </div>
               </div>
               <div class="page-contents services color-lightbrown">
                  <h1>SERVIÇOS</h1>
                  <div class="row">
                     <div class="col-md-4">
                        <h3>MEDICINA DENTÁRIA</h3>
                        <nav>
                           <?php wp_nav_menu(array('menu' => 'medicina-dentaria')); ?>
                        </nav>
                     </div>
                     <div class="col-md-4">
                        <h3>CIRURGIA PLÁSTICA, RECONSTRUTIVA E ESTÉTICA</h3>
                        <nav>
                           <?php wp_nav_menu(array('menu' => 'cirurgia-plastica')); ?>
                        </nav>
                     </div>
                     <div class="col-md-4">
                        <h3>PODOLOGIA</h3>
                        <nav>
                           <?php wp_nav_menu(array('menu' => 'podologia')); ?>
                        </nav>
                        <h3>NUTRIÇÃO</h3>
                        <nav>
                           <?php wp_nav_menu(array('menu' => 'nutricao')); ?>
                        </nav>
                     </div>
                  </div>
               </div>

               <?php edit_post_link(); // Always handy to have Edit Post Links available  ?>

            </article>
            <!-- /article -->

         <?php endwhile; ?>

      <?php else: ?>

         <!-- article -->
         <article>

            <h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>

         </article>
         <!-- /article -->

      <?php endif; ?>

   </section>
   <!-- /section -->
</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
