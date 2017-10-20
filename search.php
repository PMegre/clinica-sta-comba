<?php get_header(); ?>

<main role="main">
   <!-- section -->
   <section>

      <div class="page-contents">
         <h1><?php echo sprintf(__('%s Resultados encontrados ', 'html5blank'), $wp_query->found_posts); ?></h1>
         <div class="row blog">
            <div class="col-md-9">
               <?php get_template_part('loop'); ?>
               <?php get_template_part('pagination'); ?>
            </div>
            <div class="col-md-3">
               <?php get_sidebar(); ?>
            </div>
         </div>
      </div>

   </section>
   <!-- /section -->
</main>

<?php get_footer(); ?>
