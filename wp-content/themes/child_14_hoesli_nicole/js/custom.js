(function () {

jQuery.noConflict();

"use strict";


document.oncontextmenu = function() {return true;};


/*======================================== isotope 
==================================================*/

/*======================================== owl-slider
==================================================*/
jQuery(document).ready(function($) {
      $("#owl-demo").owlCarousel({
        navigation:true,
        loop:true,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        singleItem : true,
        autoHeight : true,
        transitionStyle:"fade"

      });
    });

jQuery(document).ready( function($) {
  
  $('.grid').isotope({
    itemSelector: '.grid-item',
    masonry: {
      columnWidth: 100
    }
  });

});

})();