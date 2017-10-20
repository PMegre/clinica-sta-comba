<?php /* Template Name: Página de contactos */ get_header(); ?>

<main role="main">
   <!-- section -->
   <section>

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <div class="page-contents">
                  <div class="row">
                     <div class="col-sm-5">
                        <?php the_content(); ?>
                     </div>
                     <div class="col-sm-6">
                        <h2>TEM ALGUMA QUESTÃO?</h2>
                        <p>Fale connosco, temos uma equipa de profissionais prontos para o(a) ajudar!</p>
                        <?php echo do_shortcode('[contact-form-7 id="178" title="Formulário geral"]'); ?>
                     </div>
                     <div class="col-sm-1">

                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-5">
                        <h2>ONDE ESTAMOS</h2>
                     </div>
                     <div class="col-sm-7">
                        <?php echo do_shortcode('[gmap-embed id="179"]'); ?>
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
