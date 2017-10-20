<?php get_header(); ?>

<main role="main">
   <!-- section -->
   <section>

      <!-- article -->
      <article id="post-404">
         <div class="page-contents">
            <h1><?php _e('Página não encontrada', 'html5blank'); ?></h1>
            <h2>
               <a href="<?php echo home_url(); ?>"><?php _e('Regressar à página principal', 'html5blank'); ?></a>
            </h2>
         </div>
      </article>
      <!-- /article -->

   </section>
   <!-- /section -->
</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
