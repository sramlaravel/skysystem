$(window).on('load', function () {
    //======================================
    //============= Preloader ==============
    //======================================
    var preLoder = $(".sec");
    preLoder.fadeOut(30);

});

$(document).ready(function () {

    "use strict";

    /* _____________________________

       Loader
    ________________________________ */

    function init_loader() {
        $("#loader").fadeOut("slow", function () {
            $("#preloader").delay(300).fadeOut("slow")
        })
    }

    init_loader();
    /* _____________________________

           Banner
        ________________________________ */

    jQuery('.tp-banner').revolution(
        {
            delay: 9000,
            startwidth: 1170,
            startheight: 530,
            hideThumbs: 10,
            fullWidth: "on",
            lazyload: "on",
            navigationStyle: "square",
            spinner: "spinner4"
        });
    /* _____________________________

           Scroll
        ________________________________ */

    $(window).scroll(function () {

        if ($(window).scrollTop() > 30) {
            $(".navbar").addClass("fixed-top");
            $("#scrollup").css("display", "block");
        } else {
            $("#scrollup").css("display", "none");
            $(".navbar").removeClass("fixed-top");
        }
    });

    $("#scrollup").on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, '300');
    });

    /* _____________________________

       Wow
    ________________________________ */

    if ($(window).width() > 767) {
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false,
            live: true
        });
        new WOW().init();
    }

    /* _____________________________

      Tooltip
   ________________________________ */

    $('[data-toggle="popover"]').popover({
        html: true
    });

    /* _____________________________

          Counter
       ________________________________ */
    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });
    /* _____________________________

             Owl slider
          ________________________________ */

    $('#parteners_slider').owlCarousel({
        margin: 0,
        items: 6,
        dots: false,
        nav: false,
        rtl: true,
        loop: true,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            600: {
                items: 3
            },
            750: {
                items: 3,
                center: false
            },
            960: {
                items: 4
            },
            1170: {
                items: 6
            },
            1300: {
                items: 6
            }
        }
    });

    $('#pointOfSales_slider').owlCarousel({
        margin: 0,
        items: 1,
        dots: false,
        nav: false,
        rtl: true,
        loop: true,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            600: {
                items: 1
            },
            750: {
                items: 2,
                center: false
            },
            960: {
                items: 2
            },
            1170: {
                items: 3
            },
            1300: {
                items: 3
            }
        }
    });

    $('#news_slider').owlCarousel({
        rtl: true,
        autoplay: true,
        loop: true,
        items: 3,
        margin: 15,
        dots: false,
        nav: true,
        navText: [
            '<i class="fa fa-arrow-right owl-main-nav"></i> ',
            '<i class="fa fa-arrow-left owl-main-nav"></i>'
        ],
        responsive: {
            0: {
                items: 1,
                center: false
            },
            480: {
                items: 1,
                center: false
            },
            600: {
                items: 1,
                center: false
            },
            750: {
                items: 2,
                center: false
            },
            960: {
                items: 2
            },
            1170: {
                items: 3
            },
            1300: {
                items: 3
            }
        }
    });

    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

});