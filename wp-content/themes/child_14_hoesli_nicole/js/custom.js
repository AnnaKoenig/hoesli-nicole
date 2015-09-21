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
      itemSelector: '.grid-item a',
      masonry: {
      columnWidth: 100
    }
    });

  });

// language toggle
jQuery(document).ready(function($){

    function init_Toggles() {

        $('.deutsch').click (function () {
          $('#text-content-deutsch').slideToggle(0);
          if ($('#text-content-english').css('display','block')){
            $('#text-content-english').slideToggle(0);
          }
          $("html, body").animate({scrollTop:800}, '500', 'swing', "slow");
        });

        $('.english').click (function () {
          $('#text-content-english').slideToggle(0);
          if ($('#text-content-deutsch').css('display','block')){
            $('#text-content-deutsch').slideToggle(0);
          }
          $("html, body").animate({scrollTop:800}, '500', 'swing', "slow");
        });
      }

  init_Toggles();

// container
jQuery(document).ready(function($){

    var $container = $('#container'),
        $body = $('body'),
        colW = 60,
        columns = null;

    $container.isotope ({
      // disable window resizing
      resizable: false,
      masonry: {
        columnWidth: colW
      }
    });

    jQuery(window).smartresize(function($){

      // measure the width of all the items
      var itemTotalWidth = 0;
      $container.children().each(function(){
        itemTotalWidth += $(this).outerWidth(true);
      });

      // check if columns has changed
      var bodyColumns = Math.floor( ( $body.width() -10 ) / colW ),
          itemColumns = Math.floor( itemTotalWidth / colW ),
          currentColumns = Math.min( bodyColumns, itemColumns );
      if ( currentColumns !== columns ) {
        // set new column count
        columns = currentColumns;
        // apply width to container manually, then trigger relayout
        $container.width( columns * colW )
          .isotope('reLayout');
      }

    }).smartresize(); // trigger resize to set container width

  });
  });



})();
