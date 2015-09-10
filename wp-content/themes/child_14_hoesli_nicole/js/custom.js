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


})();
