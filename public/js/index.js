$(window).on("load",(function(){$("#p_prldr").delay(200).fadeOut("fast")})),$(document).ready((function(){$(".bg-slide1").fadeIn(0,(function(){$(".bg-slide1").animate({opacity:"100"},0)})),$(".slide-text1").fadeIn(0,(function(){$(".slide-text1 div:eq(0)").animate({left:"0",opacity:"100"},0,(function(){$(".slide-text1 div:eq(1)").animate({left:"0",opacity:"100"},0,(function(){$(".slide-text1 div:eq(2)").animate({left:"0",opacity:"100"},0)}))}))}));var t=".slide-text1",e=".bg-slide1";function i(){".slide-text1"!=t&&($(".slide-button-intro1, .slide-button-intro2, .slide-button-intro3").css({"pointer-events":"none"}),clearTimeout(a),a=setTimeout(s,1e4),".slide-text1"==t?$(".slide-button-intro1").removeClass("active"):".slide-text2"==t?$(".slide-button-intro2").removeClass("active"):$(".slide-button-intro3").removeClass("active"),$(".slide-button-intro1").addClass("active"),$(t+" div:eq(2)").animate({left:"50",opacity:"0"},150,(function(){$(t+" div:eq(2)").css({left:"-50px"}),$(t+" div:eq(1)").animate({left:"50",opacity:"0"},150,(function(){$(t+" div:eq(1)").css({left:"-50px"}),$(e).css({"z-index":"-2"}),$(e).animate({opacity:"0"},600,(function(){$(e).fadeOut(0),$(e).css({"z-index":"-3"})})),$(".bg-slide1").fadeIn(0,(function(){$(".bg-slide1").animate({opacity:"100"},0)})),$(t+" div:eq(0)").animate({left:"50",opacity:"0"},150,(function(){$(t+" div:eq(0)").css({left:"-50px"}),$(t).fadeOut(0,(function(){$(".slide-text1").fadeIn(0,(function(){$(".slide-text1 div:eq(0)").animate({left:"0",opacity:"100"},300,(function(){$(".slide-text1 div:eq(1)").animate({left:"0",opacity:"100"},300,(function(){$(".slide-text1 div:eq(2)").animate({left:"0",opacity:"100"},300),t=".slide-text1",e=".bg-slide1",$(".slide-button-intro1, .slide-button-intro2, .slide-button-intro3").css({"pointer-events":"auto"})}))}))}))}))}))}))})))}function s(){".slide-text2"!=t&&($(".slide-button-intro1, .slide-button-intro2, .slide-button-intro3").css({"pointer-events":"none"}),clearTimeout(a),a=setTimeout(n,1e4),".slide-text1"==t?$(".slide-button-intro1").removeClass("active"):".slide-text2"==t?$(".slide-button-intro2").removeClass("active"):$(".slide-button-intro3").removeClass("active"),$(".slide-button-intro2").addClass("active"),$(t+" div:eq(2)").animate({left:"50",opacity:"0"},150,(function(){$(t+" div:eq(2)").css({left:"-50px"}),$(t+" div:eq(1)").animate({left:"50",opacity:"0"},150,(function(){$(t+" div:eq(1)").css({left:"-50px"}),$(e).css({"z-index":"-2"}),$(e).animate({opacity:"0"},600,(function(){$(e).fadeOut(0),$(e).css({"z-index":"-3"})})),$(".bg-slide2").fadeIn(0,(function(){$(".bg-slide2").animate({opacity:"100"},0)})),$(t+" div:eq(0)").animate({left:"50",opacity:"0"},150,(function(){$(t+" div:eq(0)").css({left:"-50px"}),$(t).fadeOut(0,(function(){$(".slide-text2").fadeIn(0,(function(){$(".slide-text2 div:eq(0)").animate({left:"0",opacity:"100"},300,(function(){$(".slide-text2 div:eq(1)").animate({left:"0",opacity:"100"},300,(function(){$(".slide-text2 div:eq(2)").animate({left:"0",opacity:"100"},300),t=".slide-text2",e=".bg-slide2",$(".slide-button-intro1, .slide-button-intro2, .slide-button-intro3").css({"pointer-events":"auto"})}))}))}))}))}))}))})))}function n(){".slide-text3"!=t&&($(".slide-button-intro1, .slide-button-intro2, .slide-button-intro3").css({"pointer-events":"none"}),clearTimeout(a),a=setTimeout(i,1e4),".slide-text1"==t?$(".slide-button-intro1").removeClass("active"):".slide-text2"==t?$(".slide-button-intro2").removeClass("active"):$(".slide-button-intro3").removeClass("active"),$(".slide-button-intro3").addClass("active"),$(t+" div:eq(2)").animate({left:"50",opacity:"0"},150,(function(){$(t+" div:eq(2)").css({left:"-50px"}),$(t+" div:eq(1)").animate({left:"50",opacity:"0"},150,(function(){$(t+" div:eq(1)").css({left:"-50px"}),$(e).css({"z-index":"-2"}),$(e).animate({opacity:"0"},600,(function(){$(e).fadeOut(0),$(e).css({"z-index":"-3"})})),$(".bg-slide3").fadeIn(0,(function(){$(".bg-slide3").animate({opacity:"100"},0)})),$(t+" div:eq(0)").animate({left:"50",opacity:"0"},150,(function(){$(t+" div:eq(0)").css({left:"-50px"}),$(t).fadeOut(0,(function(){$(".slide-text3").fadeIn(0,(function(){$(".slide-text3 div:eq(0)").animate({left:"0",opacity:"100"},300,(function(){$(".slide-text3 div:eq(1)").animate({left:"0",opacity:"100"},300,(function(){$(".slide-text3 div:eq(2)").animate({left:"0",opacity:"100"},300),t=".slide-text3",e=".bg-slide3",$(".slide-button-intro1, .slide-button-intro2, .slide-button-intro3").css({"pointer-events":"auto"})}))}))}))}))}))}))})))}({$navTrigger:document.querySelector(".nav-trigger"),$main:document.querySelector(".main"),isOpeningNav:!1,init:function(){var t=this;t.$main.style.overflow="auto",t.$main.style.height="100vh",window.addEventListener("scroll",(function(e){0==window.scrollY&&t.isOpeningNav&&(t.isOpeningNav=!1,setTimeout((function(){t.openNavigation()}),150))})),t.$navTrigger.addEventListener("click",(function(e){e.preventDefault(),t.$navTrigger.classList.contains("is-active")?t.closeNavigation():0!==window.scrollY?(window.scroll({top:0,left:0,behavior:"smooth"}),t.isOpeningNav=!0):t.openNavigation()}))},openNavigation:function(){document.body.classList.add("is-froze"),this.$navTrigger.classList.add("is-active"),this.$main.classList.add("is-active")},closeNavigation:function(){this.$navTrigger.classList.remove("is-active"),this.$main.classList.remove("is-active"),document.body.classList.remove("is-froze")}}).init(),$(".nav-trigger2").click((function(){$(".nav-trigger").click()})),$("a.topLink").click((function(){return $("html, body").animate({scrollTop:$($(this).attr("href")).offset().top+"px"},{duration:800,easing:"swing"}),!1}));var a=setTimeout(s,1e4);$(".slide-button-intro1").click((function(){i()})),$(".slide-button-intro2").click((function(){s()})),$(".slide-button-intro3").click((function(){n()})),$.fn.bgscroll=function(){let t=this.offset().top-$(window).height(),e=this.offset().top+this.height();if($(window).scrollTop()>t&&$(window).scrollTop()<e)var i=2*(100-($(window).scrollTop()-t)/(e-t)*100)-50;return this.css({backgroundPositionY:i+"%"})},$(window).width()>="992"&&$(window).scroll((function(){$(".bg-action").bgscroll(),$(".bg-certificates").bgscroll()})),$(".about-us-img-slide1").fadeIn(0),$(".about-us-p-slide1").fadeIn(0);var o=".about-us-img-slide1",d=".about-us-p-slide1";if($(".switch-text1").click((function(){".about-us-img-slide1"!=o&&($(".switch-text1, .switch-text2, .switch-text3").css({"pointer-events":"none"}),$(".switch-text1, .switch-text2, .switch-text3").removeClass("active"),$(".switch-text1").addClass("active"),$(o).fadeOut(150),$(d).fadeOut(150,(function(){$(".about-us-img-slide1").fadeIn(300),$(".about-us-p-slide1").fadeIn(300)})),o=".about-us-img-slide1",d=".about-us-p-slide1",$(".switch-text1, .switch-text2, .switch-text3").css({"pointer-events":"auto"}))})),$(".switch-text2").click((function(){".about-us-img-slide2"!=o&&($(".switch-text1, .switch-text2, .switch-text3").css({"pointer-events":"none"}),$(".switch-text1, .switch-text2, .switch-text3").removeClass("active"),$(".switch-text2").addClass("active"),$(o).fadeOut(150),$(d).fadeOut(150,(function(){$(".about-us-img-slide2").fadeIn(300),$(".about-us-p-slide2").fadeIn(300)})),o=".about-us-img-slide2",d=".about-us-p-slide2",$(".switch-text1, .switch-text2, .switch-text3").css({"pointer-events":"auto"}))})),$(".switch-text3").click((function(){".about-us-img-slide3"!=o&&($(".switch-text1, .switch-text2, .switch-text3").css({"pointer-events":"none"}),$(".switch-text1, .switch-text2, .switch-text3").removeClass("active"),$(".switch-text3").addClass("active"),$(o).fadeOut(150),$(d).fadeOut(150,(function(){$(".about-us-img-slide3").fadeIn(300),$(".about-us-p-slide3").fadeIn(300)})),o=".about-us-img-slide3",d=".about-us-p-slide3",$(".switch-text1, .switch-text2, .switch-text3").css({"pointer-events":"auto"}))})),$(".stages-left-block").css({"margin-left":parseInt($(".sample-padding").css("padding-left"))+parseInt($(".sample-padding").css("margin-left"))+"px"}),$(".stages-right-block").css({"margin-right":parseInt($(".sample-padding").css("padding-left"))+parseInt($(".sample-padding").css("margin-left"))+"px"}),$(".stage-container").slick({prevArrow:'<button class="button-stage-slide1"><i class="fas fa-chevron-left"></i></button>',nextArrow:'<button class="button-stage-slide2"><i class="fas fa-chevron-right"></i></button>',infinite:!1,slidesToShow:1,slidesToScroll:1}),$(".button-stage-slide1").css({left:parseInt($(".sample-padding").css("padding-left"))+parseInt($(".sample-padding").css("margin-left"))+"px"}),$(".button-stage-slide2").css({left:parseInt($(".sample-padding").css("padding-left"))+parseInt($(".sample-padding").css("margin-left"))+75+"px"}),$(".container-right").css({"margin-left":parseInt($(".sample-padding").css("padding-left"))+parseInt($(".sample-padding").css("margin-left"))+"px"}),$(window).width()<="1500"&&$(window).width()>="1000"){var l=2;$(".slide-certificate").css({"margin-right":"25px"})}else if($(window).width()<="999"){l=1;$(".slide-certificate").css({"margin-right":2*(parseInt($(".sample-padding").css("padding-left"))+parseInt($(".sample-padding").css("margin-left")))+"px"})}else{l=3;$(".slide-certificate").css({"margin-right":"25px"})}$(".slick-block").slick({prevArrow:'<button class="button-slide1"><i class="fas fa-chevron-left"></i></button>',nextArrow:'<button class="button-slide2"><i class="fas fa-chevron-right"></i></button>',infinite:!0,slidesToShow:l,slidesToScroll:1}),$(window).resize((function(){$(".stages-left-block").css({"margin-left":parseInt($(".sample-padding").css("padding-left"))+parseInt($(".sample-padding").css("margin-left"))+"px"}),$(".stages-right-block").css({"margin-right":parseInt($(".sample-padding").css("padding-left"))+parseInt($(".sample-padding").css("margin-left"))+"px"}),$(".button-stage-slide1").css({left:parseInt($(".sample-padding").css("padding-left"))+parseInt($(".sample-padding").css("margin-left"))+"px"}),$(".button-stage-slide2").css({left:parseInt($(".sample-padding").css("padding-left"))+parseInt($(".sample-padding").css("margin-left"))+75+"px"}),$(".container-right").css({"margin-left":parseInt($(".sample-padding").css("padding-left"))+parseInt($(".sample-padding").css("margin-left"))+"px"})})),$(".top-button").click((function(){return $("html, body").animate({scrollTop:"0px"},{duration:800,easing:"swing"}),!1}))}));