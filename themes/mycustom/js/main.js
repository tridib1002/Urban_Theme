(function($){
  // PORTFOLIO

  var $grid = $('.block-views-blockour-work-block-1');
  var $grid2 = $('.block-views-blockour-work-portfolio-block-1');
  var $grid3 = $('.block-views-blockportfolio-grid-block-1');

  $grid.imagesLoaded( function(){
    $grid.isotope({
      itemSelector: '.views-field-field-product-image',
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.views-field-field-product-image'
      }
    })
  });

  $grid2.imagesLoaded( function(){
    $grid2.isotope({
      itemSelector: '.views-field-field-product-image',
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.views-field-field-product-image'
      }
    })
  });

  $grid3.imagesLoaded( function(){
    $grid3.isotope({
      itemSelector: '.views-field-field-product-image',
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.views-field-field-product-image'
      }
    })
  });

 //  // filter items on button click
 //  $('.portfolio-menu').on( 'click', 'button', function() {
 //    var filterValue = $(this).attr('data-filter');
 //    $grid.isotope({ filter: filterValue });
 //  });
 //
 //
 // /* for active class in filter menu  */
 //  $('.portfolio-menu button').on('click', function(event) {
 //      $(this).siblings('.active').removeClass('active');
 //      $(this).addClass('active');
 //      event.preventDefault();
 //  });


})(jQuery);



// views-element-container contextual-region block block-views block-views-blockour-work-block-1 clearfix
