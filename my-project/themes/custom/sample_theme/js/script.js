jQuery(document).ready(function(jQuery) {
    setTimeout(function() {
        jQuery('#block-views-block-featured-conference-block-1 .view-content').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            speed: 1000,
            infinite: true,
            arrows: true,
            prevArrow: '<div class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
            nextArrow: '<div class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
            responsive: [
                {
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                  },
                },
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                  },
                },
                {
                  breakpoint: 1023,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                  },
                },
              ]

          });
          
    }, 1000);
    jQuery('#tabs a[data-id="#block-views-block-featured-conference-block-1"]').addClass('active');
    jQuery('#tabs a').click(function(){
        jQuery('#tabs a').removeClass('active');
        jQuery(this).addClass('active');
       var id = jQuery(this).attr('data-id');
       jQuery('.views-element-container').hide();
       jQuery(id).show();
       jQuery( id + ' .view-content').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        speed: 1000,
        infinite: true,
        arrows: true,
        prevArrow: '<div class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
        nextArrow: '<div class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 1023,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
              },
            },
          ]

      });
    });
    console.log(jQuery('.views-field-nothing-1').height())
});