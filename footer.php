<!-- footer -->
<footer class="footer color-brown" role="contentinfo">

   <div class="row">
      <div class="col-sm-3 d-flex flex-column justify-content-center">
         <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-clinica-white-01.svg" alt="Clínica Dr. Santa Comba">
      </div>
      <div class="col-sm-3">
         <h4>CLÍNICA DR. SANTA COMBA</h4>
         <nav>
            <?php wp_nav_menu(array('menu' => 'footer-menu')); ?>
         </nav>
      </div>
      <div class="col-sm-3">
         <h4>FALE CONNOSCO</h4>
         <nav>
            <ul>
               <li>MARCAÇÃO DE CONSULTAS</li>
               <li>COLOQUE AS SUAS QUESTÕES</li>
               <li>ORÇAMENTOS</li>
            </ul>
         </nav>
      </div>
      <div class="col-sm-3">
         <h4>SIGA-NOS NO FACEBOOK</h4>
         <a href="https://www.facebook.com/drsantacomba/" target="_blank">
            <img width="35px" src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook-01.svg" alt="facebook">
         </a>
         <p>Acompanhe as nossas campanhas que lançamos regularmente.</p>
      </div>
   </div>

</footer>
<!-- /footer -->

<!-- copyright -->
<div class="color-darkbrown">
   <p class="copyright">
      &copy; Copyright <?php bloginfo('name'); ?> <?php echo date('Y'); ?>  |  WEBSITE BY <a href="http://www.miligram.pt" title="Miligram Design">MILIGRAM ®</a>
   </p>
</div>
<!-- /copyright -->

</div>
<!-- /wrapper -->

<?php wp_footer(); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

</body>
</html>
