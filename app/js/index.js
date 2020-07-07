//= template/preloader.js
$(document).ready(function() {

  $('.bg-slide1').fadeIn(0, function(){
    $('.bg-slide1').animate({opacity: "100"}, 0 );
  });

  $('.slide-text1').fadeIn(0, function(){
    $('.slide-text1 div:eq(0)').animate({left:"0", opacity: "100"}, 0, function(){
    $('.slide-text1 div:eq(1)').animate({left:"0", opacity: "100"}, 0, function(){
    $('.slide-text1 div:eq(2)').animate({left:"0", opacity: "100"}, 0 );
    });
    });
  });


  var n_slide = ".slide-text1";

  var n_bg_slide = ".bg-slide1";

  var navigation = {
      $navTrigger: document.querySelector('.nav-trigger'),
      $main: document.querySelector('.main'),
      isOpeningNav: false,

      init: function init() {
          var self = this;

          // Reset overflow and height on load
          self.$main.style.overflow = 'auto';
          self.$main.style.height = '100vh';

          // Handle scroll events
          window.addEventListener('scroll', function (e) {
              if (window.scrollY == 0 && self.isOpeningNav) {
                  self.isOpeningNav = false;

                  // Add a small delay
                  setTimeout(function () {
                      self.openNavigation();
                  }, 150);
              }
          });

          // Handle .nav__trigger click event
          self.$navTrigger.addEventListener('click', function (e) {
              e.preventDefault();

              if (!self.$navTrigger.classList.contains('is-active')) {
                  if (window.scrollY !== 0) {
                      // Scroll to top
                      window.scroll({ top: 0, left: 0, behavior: 'smooth' });

                      // Enable opening nav
                      self.isOpeningNav = true;
                  } else {
                      self.openNavigation();
                  }
              } else {
                  self.closeNavigation();
              }
          });
      },
      openNavigation: function openNavigation() {
          var self = this;
          document.body.classList.add('is-froze');
          self.$navTrigger.classList.add('is-active');
          self.$main.classList.add('is-active');
      },
      closeNavigation: function closeNavigation() {
          var self = this;
          self.$navTrigger.classList.remove('is-active');
          self.$main.classList.remove('is-active');
          document.body.classList.remove('is-froze');
      }
  };

  navigation.init();

  $( ".nav-trigger2" ).click(function(){
    $('.nav-trigger').click();
  });

  $("a.topLink").click(function() {
      $("html, body").animate({
         scrollTop: $($(this).attr("href")).offset().top + "px"
      }, {
         duration: 800,
         easing: "swing"
      });
      return false;
   });

  function slide1() {
    if (n_slide != ".slide-text1") {
      $(".slide-button-intro1, .slide-button-intro2, .slide-button-intro3").css({'pointer-events':'none'});
      clearTimeout(timer);
      timer = setTimeout(slide2, 10000);
      if (n_slide == ".slide-text1") {
        $( ".slide-button-intro1" ).removeClass('active');
      } else if (n_slide == ".slide-text2") {
        $( ".slide-button-intro2" ).removeClass('active');
      } else {
        $( ".slide-button-intro3" ).removeClass('active');
      }
      $( ".slide-button-intro1" ).addClass('active');
      $(n_slide + ' div:eq(2)').animate({left:"50", opacity: "0"}, 150, function(){
      $(n_slide + ' div:eq(2)').css({'left':"-50px"});
      $(n_slide + ' div:eq(1)').animate({left:"50", opacity: "0"}, 150, function(){
      $(n_slide + ' div:eq(1)').css({'left':"-50px"});
      $(n_bg_slide).css({'z-index':"-2"});
      $(n_bg_slide).animate({opacity: "0"}, 600, function(){
      $(n_bg_slide).fadeOut( 0 );
      $(n_bg_slide).css({'z-index':"-3"});
      });
      $('.bg-slide1').fadeIn(0, function(){
      $('.bg-slide1').animate({opacity: "100"}, 0 );
      });
      $(n_slide + ' div:eq(0)').animate({left:"50", opacity: "0"}, 150,function(){
      $(n_slide + ' div:eq(0)').css({'left':"-50px"});
      $(n_slide).fadeOut(0, function(){
      $('.slide-text1').fadeIn(0, function(){
      $('.slide-text1 div:eq(0)').animate({left:"0", opacity: "100"}, 300, function(){
    	$('.slide-text1 div:eq(1)').animate({left:"0", opacity: "100"}, 300, function(){
    	$('.slide-text1 div:eq(2)').animate({left:"0", opacity: "100"}, 300);
      n_slide = ".slide-text1";
      n_bg_slide = ".bg-slide1";
      $(".slide-button-intro1, .slide-button-intro2, .slide-button-intro3").css({'pointer-events':'auto'});
      });
      });
      });
      });
      });
      });
      });
    }
  }

  function slide2() {
    if (n_slide != ".slide-text2") {
      $(".slide-button-intro1, .slide-button-intro2, .slide-button-intro3").css({'pointer-events':'none'});
      clearTimeout(timer);
      timer = setTimeout(slide3, 10000);
      if (n_slide == ".slide-text1") {
        $( ".slide-button-intro1" ).removeClass('active');
      } else if (n_slide == ".slide-text2") {
        $( ".slide-button-intro2" ).removeClass('active');
      } else {
        $( ".slide-button-intro3" ).removeClass('active');
      }
      $( ".slide-button-intro2" ).addClass('active');
      $(n_slide + ' div:eq(2)').animate({left:"50", opacity: "0"}, 150, function(){
      $(n_slide + ' div:eq(2)').css({'left':"-50px"});
      $(n_slide + ' div:eq(1)').animate({left:"50", opacity: "0"}, 150, function(){
      $(n_slide + ' div:eq(1)').css({'left':"-50px"});
      $(n_bg_slide).css({'z-index':"-2"});
      $(n_bg_slide).animate({opacity: "0"}, 600, function(){
      $(n_bg_slide).fadeOut( 0 );
      $(n_bg_slide).css({'z-index':"-3"});
      });
      $('.bg-slide2').fadeIn(0, function(){
      $('.bg-slide2').animate({opacity: "100"}, 0 );
      });
      $(n_slide + ' div:eq(0)').animate({left:"50", opacity: "0"}, 150,function(){
      $(n_slide + ' div:eq(0)').css({'left':"-50px"});
      $(n_slide).fadeOut(0, function(){
      $('.slide-text2').fadeIn(0, function(){
      $('.slide-text2 div:eq(0)').animate({left:"0", opacity: "100"}, 300, function(){
    	$('.slide-text2 div:eq(1)').animate({left:"0", opacity: "100"}, 300, function(){
    	$('.slide-text2 div:eq(2)').animate({left:"0", opacity: "100"}, 300);
      n_slide = ".slide-text2";
      n_bg_slide = ".bg-slide2";
      $(".slide-button-intro1, .slide-button-intro2, .slide-button-intro3").css({'pointer-events':'auto'});
      });
      });
      });
      });
      });
      });
      });
    }
  }

  function slide3() {
    if (n_slide != ".slide-text3") {
      $(".slide-button-intro1, .slide-button-intro2, .slide-button-intro3").css({'pointer-events':'none'});
      clearTimeout(timer);
      timer = setTimeout(slide1, 10000);
      if (n_slide == ".slide-text1") {
        $( ".slide-button-intro1" ).removeClass('active');
      } else if (n_slide == ".slide-text2") {
        $( ".slide-button-intro2" ).removeClass('active');
      } else {
        $( ".slide-button-intro3" ).removeClass('active');
      }
      $( ".slide-button-intro3" ).addClass('active');
      $(n_slide + ' div:eq(2)').animate({left:"50", opacity: "0"}, 150, function(){
      $(n_slide + ' div:eq(2)').css({'left':"-50px"});
      $(n_slide + ' div:eq(1)').animate({left:"50", opacity: "0"}, 150, function(){
      $(n_slide + ' div:eq(1)').css({'left':"-50px"});
      $(n_bg_slide).css({'z-index':"-2"});
      $(n_bg_slide).animate({opacity: "0"}, 600, function(){
      $(n_bg_slide).fadeOut( 0 );
      $(n_bg_slide).css({'z-index':"-3"});
      });
      $('.bg-slide3').fadeIn(0, function(){
      $('.bg-slide3').animate({opacity: "100"}, 0 );
      });
      $(n_slide + ' div:eq(0)').animate({left:"50", opacity: "0"}, 150,function(){
      $(n_slide + ' div:eq(0)').css({'left':"-50px"});
      $(n_slide).fadeOut(0, function(){
      $('.slide-text3').fadeIn(0, function(){
      $('.slide-text3 div:eq(0)').animate({left:"0", opacity: "100"}, 300, function(){
    	$('.slide-text3 div:eq(1)').animate({left:"0", opacity: "100"}, 300, function(){
    	$('.slide-text3 div:eq(2)').animate({left:"0", opacity: "100"}, 300);
      n_slide = ".slide-text3";
      n_bg_slide = ".bg-slide3";
      $(".slide-button-intro1, .slide-button-intro2, .slide-button-intro3").css({'pointer-events':'auto'});
      });
      });
      });
      });
      });
      });
      });
    }
  }

  var timer = setTimeout(slide2, 10000);


  $( ".slide-button-intro1" ).click(function(){
    slide1();
  });

  $( ".slide-button-intro2" ).click(function(){
    slide2();
  });

  $( ".slide-button-intro3" ).click(function(){
    slide3();
  });

  $.fn.bgscroll = function() {

    let b = (this.offset().top - $(window).height());

    let c = (this.offset().top + this.height());

    if ($(window).scrollTop() > b && $(window).scrollTop() < c) {
      var d = ((100 - (($(window).scrollTop() - b) / (c - b) * 100)) * 2) - 50;
    }

    return this.css({
      backgroundPositionY: d + '%'
    });
  }

  if ($(window).width() >= '992') {
    $(window).scroll(function(){
        $('.bg-action').bgscroll();
        $('.bg-certificates').bgscroll();
    });
  }

  $('.about-us-img-slide1').fadeIn(0);
  $('.about-us-p-slide1').fadeIn(0);

  var n_slide_img = ".about-us-img-slide1";
  var n_slide_p = ".about-us-p-slide1";

  function slideAbout1() {
    if (n_slide_img != ".about-us-img-slide1") {
      $(".switch-text1, .switch-text2, .switch-text3").css({'pointer-events':'none'});
      $(".switch-text1, .switch-text2, .switch-text3").removeClass('active');
      $( ".switch-text1" ).addClass('active');
      $(n_slide_img).fadeOut(150);
      $(n_slide_p).fadeOut(150, function() {
        $(".about-us-img-slide1").fadeIn(300);
        $(".about-us-p-slide1").fadeIn(300);
      });
      n_slide_img = ".about-us-img-slide1";
      n_slide_p = ".about-us-p-slide1";
      $(".switch-text1, .switch-text2, .switch-text3").css({'pointer-events':'auto'});
    }
  }

  function slideAbout2() {
    if (n_slide_img != ".about-us-img-slide2") {
      $(".switch-text1, .switch-text2, .switch-text3").css({'pointer-events':'none'});
      $(".switch-text1, .switch-text2, .switch-text3").removeClass('active');
      $( ".switch-text2" ).addClass('active');
      $(n_slide_img).fadeOut(150);
      $(n_slide_p).fadeOut(150, function() {
        $(".about-us-img-slide2").fadeIn(300);
        $(".about-us-p-slide2").fadeIn(300);
      });
      n_slide_img = ".about-us-img-slide2";
      n_slide_p = ".about-us-p-slide2";
      $(".switch-text1, .switch-text2, .switch-text3").css({'pointer-events':'auto'});
    }
  }

  function slideAbout3() {
    if (n_slide_img != ".about-us-img-slide3") {
      $(".switch-text1, .switch-text2, .switch-text3").css({'pointer-events':'none'});
      $(".switch-text1, .switch-text2, .switch-text3").removeClass('active');
      $( ".switch-text3" ).addClass('active');

      $(n_slide_img).fadeOut(150);
      $(n_slide_p).fadeOut(150, function() {
        $(".about-us-img-slide3").fadeIn(300);
        $(".about-us-p-slide3").fadeIn(300);
      });
      n_slide_img = ".about-us-img-slide3";
      n_slide_p = ".about-us-p-slide3";
      $(".switch-text1, .switch-text2, .switch-text3").css({'pointer-events':'auto'});
    }
  }

  $( ".switch-text1" ).click(function(){
    slideAbout1();
  });

  $( ".switch-text2" ).click(function(){
    slideAbout2();
  });

  $( ".switch-text3" ).click(function(){
    slideAbout3();
  });

  $(".stages-left-block").css({'margin-left': parseInt($(".sample-padding").css("padding-left")) + parseInt($(".sample-padding").css("margin-left")) + 'px'});

  $(".stages-right-block").css({'margin-right': parseInt($(".sample-padding").css("padding-left")) + parseInt($(".sample-padding").css("margin-left")) + 'px'});

  $('.stage-container').slick({
  prevArrow: '<button class="button-stage-slide1"><i class="fas fa-chevron-left"></i></button>',
  nextArrow: '<button class="button-stage-slide2"><i class="fas fa-chevron-right"></i></button>',
  infinite: false,
  slidesToShow: 1,
  slidesToScroll: 1
  });

  $(".button-stage-slide1").css({'left': parseInt($(".sample-padding").css("padding-left")) + parseInt($(".sample-padding").css("margin-left")) + 'px'});

  $(".button-stage-slide2").css({'left': parseInt($(".sample-padding").css("padding-left")) + parseInt($(".sample-padding").css("margin-left")) + 75 + 'px'});

  $(".container-right").css({'margin-left': parseInt($(".sample-padding").css("padding-left")) + parseInt($(".sample-padding").css("margin-left")) + 'px'});

  if ($(window).width() <= '1500' && $(window).width() >= '1000') {
    var quantity_slides = 2;
    $(".slide-certificate").css({'margin-right': '25px'});
  } else if ($(window).width() <= '999') {
    var quantity_slides = 1;
    $(".slide-certificate").css({'margin-right': (parseInt($(".sample-padding").css("padding-left")) + parseInt($(".sample-padding").css("margin-left"))) * 2 + 'px'});
  } else {
    var quantity_slides = 3;
    $(".slide-certificate").css({'margin-right': '25px'});
  }

  $('.slick-block').slick({
  prevArrow: '<button class="button-slide1"><i class="fas fa-chevron-left"></i></button>',
  nextArrow: '<button class="button-slide2"><i class="fas fa-chevron-right"></i></button>',
  infinite: true,
  slidesToShow: quantity_slides,
  slidesToScroll: 1
  });

  $(window).resize(function() {
    $(".stages-left-block").css({'margin-left': parseInt($(".sample-padding").css("padding-left")) + parseInt($(".sample-padding").css("margin-left")) + 'px'});
    $(".stages-right-block").css({'margin-right': parseInt($(".sample-padding").css("padding-left")) + parseInt($(".sample-padding").css("margin-left")) + 'px'});
    $(".button-stage-slide1").css({'left': parseInt($(".sample-padding").css("padding-left")) + parseInt($(".sample-padding").css("margin-left")) + 'px'});
    $(".button-stage-slide2").css({'left': parseInt($(".sample-padding").css("padding-left")) + parseInt($(".sample-padding").css("margin-left")) + 75 + 'px'});
    $(".container-right").css({'margin-left': parseInt($(".sample-padding").css("padding-left")) + parseInt($(".sample-padding").css("margin-left")) + 'px'});
  });
  //= template/footer.js
});
