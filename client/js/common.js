$(document).ready(function () {
    $('.dark-mode').click(function () {
        $('body').toggleClass('bg-dark');
        $('.sidebar, .welcome-banner').toggleClass('container-dark');
    });


    // responsive

    if ($(window).width() < 992) {
        $('.sidebar').css({"transform":"translate3d(-100%,10px,10px"});
        $('.toggler').click(function(e) {


            $('.sidebar').css({"transform":"translateZ(0)"});
            $('.page-content').css({"margin-left":"0"});
            e.stopPropagation();

            $(window).click(function () {
                $('.sidebar').css({"transform":"translate3d(-100%,10px,10px"});
            })
        })
    } else {
        $('.sidebar').css({"transform":"translate3d(0,0,0)"});
        $('.toggler').click(function () {
            $('.sidebar').toggleClass('trans');
            $('.page-content').toggleClass('ml-0')
        })
    }

    $(window).bind('resize', function () {
        if ($(this).width() < 992) {
            $('.sidebar').css({"transform":"translate3d(-100%,10px,10px)"});
            $('.page-content').css({"margin-left":"0"});
        } else {
            $('.sidebar').css({"transform":"translate3d(0%,0,0)"});
            $('.page-content').css({"margin-left":"0"});
        }
    })
});
