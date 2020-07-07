$(".top-button").click(function() {
    $("html, body").animate({
       scrollTop: "0px"
    }, {
       duration: 800,
       easing: "swing"
    });
    return false;
 });
