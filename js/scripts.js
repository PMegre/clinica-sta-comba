(function ($, root, undefined) {

   $(function () {

      'use strict';

      // DOM ready, take it away

      $(".nav li:has(ul.sub-menu)").hover(function () {
         $(this).children("a").click(function () {
            return false;
         });
      });

      function fullHeightDiv() {
         var windowHeight = $(window).height();

         $('.full-height').css({'min-height': windowHeight + 'px'});
         $('.full-height-column').css({'min-height': windowHeight - 100 + 'px'});
         $('.white-wrapper').css({'min-height': windowHeight - 100 + 'px'});
      }

      fullHeightDiv();

      $(window).resize(function () {

         fullHeightDiv();

      });


   });

})(jQuery, this);
