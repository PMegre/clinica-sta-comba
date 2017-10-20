<?php get_header(); ?>
<div class="hidden-xs-down">
<?php echo do_shortcode('[smartslider3 slider=2]'); ?>
</div>
<div class="hidden-sm-up">
<?php echo do_shortcode('[smartslider3 slider=3]'); ?>
</div>
<main role="main">
   <!-- section -->
   <section>

<!-- <h1><?php //the_title();         ?></h1> -->

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <p>&nbsp;</p>
               <div class="page-contents">
                  <div class="row">
                     <div class="col-sm-6">
                        <img class="front-img" src="<?php echo get_template_directory_uri(); ?>/img/dr-antonio-sta-comba.jpg" alt="Dr. António Stanta Comba">
                        <div class="img-wrapper d-flex flex-column justify-content-center align-items-end">
                           <div>
                              <h2>DR. ANTÓNIO<br>SANTA COMBA</h2>
                              <p>O rosto da cirurgia<br>plástica ao seu dispor.</p>
                              <div>
                                 <a class="btn brown-btn" href="/fale-comigo-dr-antonio-santa-comba">FALE COMIGO</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <img class="front-img" src="<?php echo get_template_directory_uri(); ?>/img/dr-pedro-sta-comba.jpg" alt="Dr. Pedro Stanta Comba">
                        <div class="img-wrapper d-flex flex-column justify-content-center">
                           <div>
                              <h2>DR. PEDRO<br>SANTA COMBA</h2>
                              <p>O rosto da medicina<br>dentária ao seu dispor.</p>
                              <div>
                                 <a class="btn brown-btn" href="/fale-comigo-dr-pedro-santa-comba">FALE COMIGO</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="page-contents">
                  <h1>A VOZ DE QUEM NOS CONHECE</h1>
                  <div class="row">
                     <div class="col-sm-12">
                        <?php echo do_shortcode('[testimonial_view id=1]'); ?>
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
                           <?php wp_nav_menu(array('menu' => 'toxina-botolimica')); ?>
                        </nav>
                        <nav>
                           <?php wp_nav_menu(array('menu' => 'cirurgia-plastica')); ?>
                        </nav>
                     </div>
                     <div class="col-md-4">
                        <h3>PODOLOGIA</h3>
                        <nav>
                           <?php wp_nav_menu(array('menu' => 'podologia')); ?>
                        </nav>
                        <p>&nbsp;</p>
                        <h3>NUTRIÇÃO</h3>
                        <nav>
                           <?php wp_nav_menu(array('menu' => 'nutricao')); ?>
                        </nav>
                     </div>
                  </div>
               </div>
            </article>
            <!-- /article -->

         <?php endwhile; ?>

      <?php else: ?>

         <!-- article -->
         <article>

            <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

         </article>
         <!-- /article -->

      <?php endif; ?>

   </section>
   <!-- /section -->
</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
