<?php get_header(); ?>

<main role="main">
   <!-- section -->
   <section>

      <div class="page-contents">
         <h1>A VOZ DE QUEM NOS CONHECE</h1>
         <div class="row">
            <div class="col-sm-4">
               <?php wp_nav_menu(array('menu' => 'testimonial-categories')); ?>
            </div>
            <div class="col-sm-8">
               <?php get_template_part('loop'); ?>
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
               <h3>NUTRIÇÃO</h3>
               <nav>
                  <?php wp_nav_menu(array('menu' => 'nutricao')); ?>
               </nav>
            </div>
         </div>
      </div>

      <?php edit_post_link(); // Always handy to have Edit Post Links available  ?>

   </section>
   <!-- /section -->
</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
