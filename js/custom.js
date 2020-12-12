$(window).on('load', function () { // makes sure the whole site is loaded 
    $('#preloader img').fadeOut(); // will first fade out the loading animation 
    $('#preloader').fadeOut('slow'); // will fade out the white DIV that covers the website. 
    $('body').css({
        'overflow': 'visible'
    });
})

$(document).ready(function () {

    $('img').loadScroll(300);


    //smooth scroll end
    var navHeight = $("header").height();
    $('.home-page .banner').css("padding-top", navHeight);
    $('main.inner-page').css("padding-top", navHeight);

    $(".home-page .about .slider").slick({
        infinite: true,
        arrows: false,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1

    });

    $(".navbar-toggler").click(function () {
        $(this).toggleClass("change");
    });



    var container_ml = parseInt($(".container").css("margin-left")) + 15;
    $(".home-page .services .slider_wrapper").css("margin-left", container_ml);
    $(".attractions-content").css("margin-left", container_ml);



    $(".home-page .packages .item .image").append("<div class='dh-overlay'></div>");

    $('.home-page .packages .item .image').directionalHover();

    $('.home-page .packages .item .image').directionalHover({

        // CSS class for the overlay
        overlay: "dh-overlay",

        // Linear or swing
        easing: "swing",

        // <a href="https://www.jqueryscript.net/animation/">Animation</a> speed in ms
        speed: 250

    });


    $(".home-page .services .slider").slick({
        infinite: true,
        arrows: false,
        autoplay: true,
        loop: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 500,
        autoplaySpeed: 2000,

        responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]

    });

    $(".testimonials .slider").slick({
        nextArrow: '<img src="images/icons/arrow-right.png" class="img-fluid arrow arrow-right">',
        prevArrow: '<img src="images/icons/arrow-left.png" class="img-fluid arrow arrow-left">',
        autoplay: true,
        loop: true,
        infinite: true,
        speed: 500,
        autoplaySpeed: 2000
    });


    //custom video play

    $(".play-btn").click(function () {

        var video = $(this).siblings("video");
        // $(video).get(0).play();

        $(video).get(0).paused ? $(video).get(0).play() : $(video).get(0).pause();
    });

    $(".package-detail .attractions-content .slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        loop: true,
        centerMode: false,
        autoplay: true,
        autoplaySpeed: 10,
        speed: 1000,
        pauseOnHover: true,
        easing: 'linear',
        arrows: false,
        // prevArrow: $('.attractions-head .arrw-lft'),
        // nextArrow: $('.attractions-head .arrw-rt'),

        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        }, {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        }, {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
            }
        }]
    });

    $('.arrw-lft').on("click", function () {
        $('.slider').slick('slickPrev');
    })

    $('.arrw-rt').on("click", function () {
        $('.slider').slick('slickNext');
    })


    $(window).scroll(function () {

        if ($(window).scrollTop() > 0) {
            $("header .navbar").addClass("scrolled");
        }
        if ($(window).scrollTop() < 1) {
            $("header .navbar").removeClass("scrolled");
        }
    })

    //An imate On Scxroll init
    AOS.init({
        duration: 1000,
    })




});