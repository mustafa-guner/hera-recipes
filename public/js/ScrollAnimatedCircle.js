const circleType = new CircleType(document.getElementById("text")).radius(20);


$(window).scroll(function(){
    let offset = $(window).scrollTop();
    offset = offset * 0.4;
    $(".scroll-circle").css({
      
        "-moz-transform":" rotate(" + offset + "deg)",
        "-webkit-transform":" rotate(" + offset + "deg)",
        "-o-transform":" rotate(" + offset + "deg)",
        "-ms-transform":" rotate(" + offset + "deg)",
        "transform":" rotate(" + offset + "deg)",
    })
})
