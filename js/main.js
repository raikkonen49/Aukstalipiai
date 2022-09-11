$(document).foundation();

$(document).ready(function() {

    $(".fancybox").fancybox({
        helpers: {
            overlay: {
                locked: false
            }
        },
        beforeShow: function() {
            $(".fancybox-skin").css("backgroundColor", "transparent");
            $(".fancybox-skin").css("padding", "0px");
        }
    });

    $(".video-holder button").click(function(){
        console.log('working')
        $('.video-bg').fadeOut();
        $('#video-play').fadeOut();
    });

    $('.owl-one').owlCarousel({
        autoplay:true,
        autoplayTimeout:5000,
        loop:true,
        margin:0,
        nav:true,
        responsive:{
            0:{
                items:1
            },

            450:{
                items:2
            },

            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })

    var owl1 = $('.owl-one');
    $('#arrow-right').click(function() {
        owl1.trigger('next.owl.carousel');
    });

    $('#arrow-left').click(function() {
        owl1.trigger('prev.owl.carousel');
    });

    $('.owl-two').owlCarousel({
        autoplay:true,
        autoplayTimeout:5000,
        loop:true,
        margin:23,
        nav:true,
        responsive:{
            0:{
                items:1
            },

            400:{
                items:2
            },

            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })

    var owl2 = $('.owl-two');
    $('#arrow-right2').click(function() {
        owl2.trigger('next.owl.carousel');
    });

    $('#arrow-left2').click(function() {
        owl2.trigger('prev.owl.carousel');
    });

    $(".hamburger").click(function() {
        $(this).toggleClass("is-active");
        $(".mobile-nav").slideToggle(300);
    });

    $('#video-play').on('click', function(ev) {
        $("iframe")[0].src += "?autoplay=1";
        ev.preventDefault();
    });

    var $window = $(window);

    $window.scroll(function() {
        $scroll = $window.scrollTop();
        if ($scroll < 0) {
            $scroll = 0;
        }

        if ($scroll > 594) {
            $('.header.hold').stop().addClass('sticky');
        }
        if ($scroll < 594) {
            $('.header.hold').stop().removeClass('sticky');
        }

        if ($scroll > 594) {
            $('.section-about').stop().addClass('sticky');
        }
        if ($scroll < 594) {
            $('.section-about').stop().removeClass('sticky');
        }

        if (($(window).width() < 1023 && $scroll > 377)) {
            $('.header.hold').stop().addClass('sticky');
        }
        if (($(window).width() < 1023 && $scroll < 377)) {
            $('.header.hold').stop().removeClass('sticky');
        }

        if (($(window).width() < 1023 && $scroll > 377)) {
            $('.section-about').stop().addClass('sticky');
        }
        if (($(window).width() < 1023 && $scroll < 377)) {
            $('.section-about').stop().removeClass('sticky');
        }

        if (($(window).width() < 639 && $scroll > 174)) {
            $('.header.hold').stop().addClass('sticky');
        }
        if (($(window).width() < 639 && $scroll < 174)) {
            $('.header.hold').stop().removeClass('sticky');
        }

        if (($(window).width() < 639 && $scroll > 174)) {
            $('.section-about').stop().addClass('sticky');
        }
        if (($(window).width() < 639 && $scroll < 174)) {
            $('.section-about').stop().removeClass('sticky');
        }
    });

    // popups

    // #ScrollToTop

    // $("a[href='#top']").click(function() {
    //   $("html, body").animate({ scrollTop: 0 }, "slow");
    //   return false;
    // });


    // #href scroll //

    $('.header-list ul li a[href^="#"], .mobile-nav ul li a[href^="#"], .header-list ul li a[href^="/#"], .mobile-nav ul li a[href^="/#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 700, 'swing', function () {
            window.location.hash = target;
        });
    });



});
