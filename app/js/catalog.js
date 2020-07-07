$(document).ready(function() {
  //= template/header.js
  //= template/footer.js
  $( ".line-menu" ).addClass('active5');

  $(".switch-button").click(function(){
      $(this).siblings(".bg-button").animate({left: $(this).width() * ($(this).data("position") - 1) }, 200);
      $(this).siblings(".switch-button").each(function() {
        $($(this).data("img")).fadeOut(0);
      });
      $($(this).data("img")).fadeIn(0);
  });
});
