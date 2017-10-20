<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <title><?php wp_title(''); ?><?php
         if (wp_title('', false)) {
            echo ' | ';
         }
         ?><?php bloginfo('name'); ?></title>

      <link href="//www.google-analytics.com" rel="dns-prefetch">

      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png">
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png" sizes="32x32">
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png" sizes="16x16">
      <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/icons/manifest.json">
      <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="theme-color" content="#ffffff">

      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

      <script src="https://use.typekit.net/xxc8ywj.js"></script>
      <script>try {
            Typekit.load({async: true});
         } catch (e) {
         }</script>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      <?php wp_head(); ?>
      <script>
// conditionizr.com
// configure environment tests
         conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
         });
      </script>

      <script>
         (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
               (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
         })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

         ga('create', 'UA-11172638-52', 'auto');
         ga('send', 'pageview');
         ga('send', 'event', 'Contact Form', 'submit');

      </script>

   </head>
   <body <?php body_class(); ?>>

      <!-- wrapper -->
      <div class="wrapper">

         <div class="top-bar color-lightbrown">
            <div class="row">
               <div class="col-12">
                  <ul>
                     <li>
                        <img class="img-top-icons" src="<?php echo get_template_directory_uri(); ?>/img/icon-email-01.svg" alt="email">
                        <a href="mailto:geral@clinicadrsantacomba.com">geral@clinicadrsantacomba.com</a>
                     </li>
                     <li>
                        <img class="img-top-icons" src="<?php echo get_template_directory_uri(); ?>/img/icon-phone-01.svg" alt="phone">
                        <a href="tel:+351229539698">+351 229 539 698</a>
                     </li>
                     <li class="color-brown">
                        <img class="img-top-icons calendar" src="<?php echo get_template_directory_uri(); ?>/img/icon-calendar-01.svg" alt="calendar">
                        <a href="/contactos">MARQUE A SUA CONSULTA</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>

         <!-- header -->
         <header class="header clear" role="banner">
            <div class="row">
               <div class="col-lg-3">
                  <!-- logo -->
                  <div class="logo">
                     <a href="<?php echo home_url(); ?>">
                        <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
                     </a>
                  </div>
                  <!-- /logo -->
               </div>
               <div class="col-lg-9 hidden-xs-down d-flex align-items-center justify-content-end">
                  <!-- nav -->
                  <nav class="nav" role="navigation">
                     <?php html5blank_nav(); ?>
                  </nav>
                  <!-- /nav -->
               </div>
               <div class="col-lg-8 hidden-sm-up">
                  <!-- nav -->
                  <nav class="nav" role="navigation">
                     <?php html5blank_nav(); ?>
                  </nav>
                  <!-- /nav -->
               </div>
            </div>
         </header>
         <!-- /header -->
