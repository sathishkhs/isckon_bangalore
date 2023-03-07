 $(document).ready(function() {
    AOS.init({
        duration: 1200,
        startEvent: 'DOMContentLoaded',
        once: true,
    });

    $(".megamenu").on("click", function(e) {
		e.stopPropagation();
	}); 

  
  $(".common-carousel-three").owlCarousel({
    items:3,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    autoplay: true,
    margin: 20,
    loop:true,
    nav:false,
    mouseDrag: true, 
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>" ],
    responsive: {
        0: {
          items: 1
        },
    
        600: {
          items: 2
        },
    
        1024: {
          items: 3
        },
    
        1366: {
          items: 3
        }
      }
  }); 

    $(".common-carousel").owlCarousel({
        items:4,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        autoplay: true,
        margin: 20,
        loop:true,
        nav:true,
        mouseDrag: true, 
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>" ],
        responsive: {
            0: {
              items: 1
            },
        
            600: {
              items: 2
            },
        
            1024: {
              items: 3
            },
        
            1366: {
              items: 4
            }
          }
    });

    $(".owl-carousel").owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      nav: true,
      dots: true,
      autoplayTimeout: 7000,
      smartSpeed: 800,
      mouseDrag: true, 
      animateIn: 'fadeIn',
      animateOut: 'fadeOut'
    });

    
    $(".temple-list-none-nav").owlCarousel({
      items:4,
      autoplayTimeout: 7000,
      smartSpeed: 800,
      autoplay: true,
      margin: 20,
      loop:true,
      nav:false,
      mouseDrag: true, 
      animateIn: 'fadeIn',
      animateOut: 'fadeOut',
      navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>" ],
      responsive: {
          0: {
            items: 1
          },
      
          600: {
            items: 2
          },
      
          1024: {
            items: 3
          },
      
          1366: {
            items: 4
          }
        }
    }); 
    

    $("#owl-carousel-festival").owlCarousel({
      items:3,
      autoplayTimeout: 7000,
      smartSpeed: 800,
      autoplay: true,
      margin: 20,
      loop:true,
      nav:true,
      navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>" ],
      responsive: {
          0: {
            items: 1
          },
      
          600: {
            items: 2
          },
      
          1024: {
            items: 3
          },
      
          1366: {
            items: 3
          }
        }
  });

  $("#not-carousel").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    nav: true,
    dots: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    mouseDrag: true, 
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    itemsDesktop : false,
    itemsDesktopSmall : false,
    itemsTablet: false,
    itemsMobile : false,
  });
  

    

    $('input[type=radio]').change(function() { 
      $('input[type=radio]').each(function() {
        $(this).parent().removeClass('active');
        $('.card').addClass('non-active');
        $('#diabled-continue').addClass('active');
      });
     $(this).parent().addClass('active');
    });
 
 }); 
 
$(window).scroll(function(){
    if ($(window).scrollTop() >= 180) {
        $('.secondary-header').addClass('fixed-header'); 
    }
    else {
        $('.secondary-header').removeClass('fixed-header'); 
    }
});

$('input[type="radio"]').click(function(){
  var inputValue = $(this).attr("value");
  var targetBox = $("." + inputValue);
  $(".DivToShowHideOther").not(targetBox).hide();
  $(targetBox).show();    
  $('.checkbox-input').prop('checked', false).removeAttr('checked');
  $(".checkbox-box-active").hide();
});


$(".checkbox-box-active").hide();
$(".checkbox-input").click(function() {
    if($(this).is(":checked")) {
        $(".checkbox-box-active").show();
    } else {
        $(".checkbox-box-active").hide();
    }
});
 

$('.sbutton').on("click", function() {
  $('.share-social-icon').stop().slideUp('fast');
  $(this).next('.share-social-icon').stop().slideToggle('fast');
});
