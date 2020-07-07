$(window).scroll(function(){
  if ($(window).scrollTop() > 200) {
    $(".nav-header").attr('id', 'transform-header');
  } else {
    $(".nav-header").removeAttr("id");
  }
});

function lineUp() {
  $("#line-menu").animate({height:"5"}, 200);
}

let timerLine = setTimeout(lineUp, 1000);

let menuOn = false;

$(".menu-target").click(function(){
  if (menuOn == false) {
    $(".menu-target").css({'pointer-events':'none', 'color':'#86785e'});

    $('.nav-header-mini').animate({height:"480"}, 300, function(){
    $('.nav-header-mini a:eq(0)').fadeIn(300);
    setTimeout(() => $('.nav-header-mini a:eq(1)').fadeIn(300), 50);
    setTimeout(() => $('.nav-header-mini a:eq(2)').fadeIn(300), 100);
    setTimeout(() => $('.nav-header-mini a:eq(3)').fadeIn(300), 150);
    setTimeout(() => $('.nav-header-mini a:eq(4)').fadeIn(300, function(){
      $(".menu-target").css({'pointer-events':'auto'});
    }), 200);
    });
    menuOn = true;
  } else {
    $(".menu-target").css({'pointer-events':'none', 'color':'#ac9b7a'});
    $('.nav-header-mini a').fadeOut(100, function(){
      $('.nav-header-mini').animate({height:"80"}, 300);
      $(".menu-target").css({'pointer-events':'auto'});
    });
    menuOn = false;
  }

});
