(function () {

jQuery.noConflict();

"use strict";


document.oncontextmenu = function() {return true;};


/*======================================== owl-slider/ isotope
==================================================*/
jQuery(document).ready(function($) {
      $("#owl-demo").owlCarousel({
        navigation: true,
        loop: true,
        paginationSpeed : 1000,
        singleItem : true,
        video: true,
        transitionStyle:"fade"

      });

    });


jQuery(document).ready( function($) {

    $('.grid').isotope({
    	layoutMode: 'fitRows',
      itemSelector: '.grid-item a'
    });

  });


jQuery(document).ready(function($){



    function init_Toggles() {

        $('.deutsch').click (function () {
          $('#text-content-deutsch').slideToggle(300);
          if ($('#text-content-english').css('display','block')){
            $('#text-content-english').slideToggle(300);
          }
          $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        });

        $('.english').click (function () {
          $('#text-content-english').slideToggle(300);
          if ($('#text-content-deutsch').css('display','block')){
            $('#text-content-deutsch').slideToggle(300);
          }
          $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        });


      }

  init_Toggles();


  });

})();
