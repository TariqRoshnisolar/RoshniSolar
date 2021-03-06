

!(function($) {

  "use strict";



  // Toggle .header-scrolled class to #header when page is scrolled

  $(window).scroll(function() {

    if ($(this).scrollTop() > 100) {

      $('#header').addClass('header-scrolled');

    } else {

      $('#header').removeClass('header-scrolled');

    }

  });



  if ($(window).scrollTop() > 100) {

    $('#header').addClass('header-scrolled');

  }



  // Stick the header at top on scroll

  $("#header").sticky({

    topSpacing: 0,

    zIndex: '50'

  });



  // Smooth scroll for the navigation menu and links with .scrollto classes

  var scrolltoOffset = $('#header').outerHeight() - 2;

  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {

    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

      var target = $(this.hash);

      if (target.length) {

        e.preventDefault();



        var scrollto = target.offset().top - scrolltoOffset;



        if ($(this).attr("href") == '#header') {

          scrollto = 0;

        }



        $('html, body').animate({

          scrollTop: scrollto

        }, 1500, 'easeInOutExpo');



        if ($(this).parents('.nav-menu, .mobile-nav').length) {

          $('.nav-menu .active, .mobile-nav .active').removeClass('active');

          $(this).closest('li').addClass('active');

        }



        if ($('body').hasClass('mobile-nav-active')) {

          $('body').removeClass('mobile-nav-active');

          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');

          $('.mobile-nav-overly').fadeOut();

        }

        return false;

      }

    }

  });



  // Activate smooth scroll on page load with hash links in the url

  $(document).ready(function() {

    if (window.location.hash) {

      var initial_nav = window.location.hash;

      if ($(initial_nav).length) {

        var scrollto = $(initial_nav).offset().top - scrolltoOffset;

        $('html, body').animate({

          scrollTop: scrollto

        }, 1500, 'easeInOutExpo');

      }

    }



    $("#coronaModal").modal('show');

  });



  // Mobile Navigation

  if ($('.nav-menu').length) {

    var $mobile_nav = $('.nav-menu').clone().prop({

      class: 'mobile-nav d-lg-none'

    });

    $('body').append($mobile_nav);

    $('#header').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');

    $('body').append('<div class="mobile-nav-overly"></div>');



    $(document).on('click', '.mobile-nav-toggle', function(e) {

      $('body').toggleClass('mobile-nav-active');

      $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');

      $('.mobile-nav-overly').toggle();

    });



    $(document).on('click', '.mobile-nav .drop-down > a', function(e) {

      e.preventDefault();

      $(this).next().slideToggle(300);

      $(this).parent().toggleClass('active');

    });



    $(document).click(function(e) {

      var container = $(".mobile-nav, .mobile-nav-toggle");

      if (!container.is(e.target) && container.has(e.target).length === 0) {

        if ($('body').hasClass('mobile-nav-active')) {

          $('body').removeClass('mobile-nav-active');

          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');

          $('.mobile-nav-overly').fadeOut();

        }

      }

    });

  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {

    $(".mobile-nav, .mobile-nav-toggle").hide();

  }



  // Navigation active state on scroll

  // var nav_sections = $('section');

  // var main_nav = $('.nav-menu, .mobile-nav');



  // $(window).on('scroll', function() {

  //   var cur_pos = $(this).scrollTop() + 200;



  //   nav_sections.each(function() {

  //     var top = $(this).offset().top,

  //       bottom = top + $(this).outerHeight();



  //     if (cur_pos >= top && cur_pos <= bottom) {

  //       if (cur_pos <= bottom) {

  //         main_nav.find('li').removeClass('active');

  //       }

  //       main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');

  //     }

  //     if (cur_pos < 300) {

  //       $(".nav-menu ul:first li:first").addClass('active');

  //     }

  //   });

  // });



  // Intro carousel

  var heroCarousel = $("#heroCarousel");

  var heroCarouselIndicators = $("#hero-carousel-indicators");

  heroCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {

    (index === 0) ?

    heroCarouselIndicators.append("<li data-target='#heroCarousel' data-slide-to='" + index + "' class='active'></li>"):

      heroCarouselIndicators.append("<li data-target='#heroCarousel' data-slide-to='" + index + "'></li>");

  });



  heroCarousel.on('slid.bs.carousel', function(e) {

    $(this).find('h2').addClass('animate__animated animate__fadeInDown');

    $(this).find('p, .btn-get-started').addClass('animate__animated animate__fadeInUp');

  });



  // Back to top button

  $(window).scroll(function() {

    if ($(this).scrollTop() > 100) {

      $('.back-to-top').fadeIn('slow');

    } else {

      $('.back-to-top').fadeOut('slow');

    }

  });



  $('.back-to-top').click(function() {

    $('html, body').animate({

      scrollTop: 0

    }, 1500, 'easeInOutExpo');

    return false;

  });



  // Init AOS

  function aos_init() {

    AOS.init({

      duration: 1000,

      easing: "ease-in-out-back",

      once: true

    });

  }

  $(window).on('load', function() {

    aos_init();

  });



  $('#clientSlider').owlCarousel({

    loop:true,

    margin:10,

    dots: false,

    autoplay: true,

    nav:true,

    navText:["<i class='fa fa-angle-left'>","<i class='fa fa-angle-right'>"],

    responsive:{

        0:{

            items:2

        },

        600:{

            items:3

        },

        1000:{

            items:4

        },

        1200:{

            items:5

        }

    }

})



})(jQuery);











var zoom = 1;

var zoomStep = 0.1;

document.getElementById("zoomIn").addEventListener("click", function() {

  zoom += zoomStep;

  document.querySelector("body").style.zoom =  zoom;

});

document.getElementById("zoomOut").addEventListener("click", function() {

  if (zoom > zoomStep) {

    zoom -= zoomStep;

    document.querySelector("body").style.zoom =  zoom;

  }

});

document.getElementById("zoomAdj").addEventListener("click", function() {

  if (zoom > zoomStep || zoom < zoomStep) {

      document.querySelector("body").style.zoom =  zoom;

  }

});

document.getElementById("adjustDN").addEventListener("click", function() {

  document.querySelector("html").classList.toggle("dark-mode");

});

function changeLanguage(lang_code=''){
  window.location.href=BASE_URL+'switch-lang/'+lang_code;
}