<?php /* Template Name: Formulários Dr. Pedro Sta Comba */ get_header(); ?>
<style>
   header, footer, .top-bar, .color-darkbrown {display: none;}
   .white-wrapper {background-color: rgba(255,255,255, 1); padding: 40px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; width: 100%;}
   .form-control {background-color: rgba(255,255,255, 0);}
</style>


<main role="main">
   <!-- section -->
   <section>

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <div class="page-contents full-height">
                  <style>
                     .full-height {background: url(/wp-content/themes/clinica-sta-comba/img/dr-pedro-sta-comba-big.jpg) no-repeat; background-size: cover; background-position: center;}
                     @media (max-width: 568px) {
                        .full-height { background: url(/wp-content/themes/clinica-sta-comba/img/pedro.jpg) no-repeat; background-size: contain; background-position: top center;}
                        .white-wrapper {margin-top: 450px;}
                     }
                  </style>
                  <div class="row">
                     <div class="col-sm-7">

                     </div>
                     <div class="col-sm-5 full-height-column d-flex align-items-center">
                        <div class="white-wrapper">
                           <!-- logo -->
                           <div class="logo">
                              <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
                           </div>
                           <p>&nbsp;</p>
                           <!-- /logo -->
                           <?php echo do_shortcode('[contact-form-7 title="Formulário Dr. Pedro"]') ?>
                           <a href="/"> < VOLTAR AO SITE</a>
                        </div>
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

<?php //get_sidebar();  ?>

<?php get_footer(); ?>
