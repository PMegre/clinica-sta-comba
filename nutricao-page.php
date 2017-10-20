<?php /* Template Name: Página de nutrição */ get_header(); ?>

<main role="main">
   <!-- section -->
   <section>

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <div class="page-contents">
                  <div class="row">
                     <div class="col-sm-4">
                        <div class="hidden-xs-down">
                           <h3 class="big">NUTRIÇÃO</h3>
                           <nav>
                              <?php wp_nav_menu(array('menu' => 'nutricao')); ?>
                           </nav>
                           <h1 class="small">A VOZ DE QUEM NOS CONHECE</h1>
                           <?php echo do_shortcode('[testimonial_view id=5]'); ?>
                           <div class="questions color-blue">
                              <h3>TEM DÚVIDAS?</h3>
                              <p>Marque a sua sessão de esclarecimento online. Fale com os nossos especialistas para um aconselhamento personalizado.</p>
                              <a class="btn white-btn" href="/contactos">MARCAR</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-8 d-flex align-items-start flex-column">
                        <div>
                           <h4><?php the_title(); ?> <span><?php edit_post_link(); ?></span></h4>
                        </div>
                        <div>
                           <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' ); ?>
                           <img class="alignnone" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                           <?php the_content(); ?>
                        </div>
                        <div class="mt-auto">
                           <div class="row">
                              <div class="col-12">
                                 <h4 class="small"><?php the_title(); ?></h4>
                                 <p>Explique-nos o seu caso através do <a href="/contactos">Formulário de Contacto</a> e ser-lhe-á indicado um intervalo de valores em que poderá ficar a resolução do seu problema.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </article>
            <!-- /article -->

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
