$(document).ready(function () {
    "use strict"; 

    //------- Superfist nav menu  js --------//  
    $('nav.nav ul').superfish({
        animation: {
            opacity: 'show'
        },
        speed: 400
    });


    //------- Mobile Nav  js --------//  

    if ($('nav.nav').length) {
        var $mobile_nav = $('nav.nav').clone().prop({
            id: 'mobile-nav'
        });
        $mobile_nav.find('> ul').attr({
            'class': '',
            'id': ''
        });
        $('body').append($mobile_nav);
        $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>');
        $('body').append('<div id="mobile-body-overly"></div>');
        $('#mobile-nav').find('.subnav').prepend('<i class="lnr lnr-chevron-down"></i>');

        $(document).on('click', '.subnav i', function (e) {
            $(this).next().toggleClass('menu-item-active');
            $(this).nextAll('ul').eq(0).slideToggle();
            $(this).toggleClass("lnr-chevron-up lnr-chevron-down");
        });

        $(document).on('click', '#mobile-nav-toggle', function (e) {
            $('body').toggleClass('mobile-nav-active');
            $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
            $('#mobile-body-overly').toggle();
        });

        $(document).on('click', function (e) {
            var container = $("#mobile-nav, #mobile-nav-toggle");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
                    $('#mobile-body-overly').fadeOut();
                }
            }
        });
    } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
        $("#mobile-nav, #mobile-nav-toggle").hide();
    }


    $(document).ready(function () {


        var subMenu = $('nav.nav > ul > li');

        subMenu.hover(function () {
          $(this).find("ul").slideToggle(100);
        });

        var headerHeight = $('header').outerHeight(); 
        $('#content').css('margin-top',headerHeight);

        

    });


    //------- Header Scroll Class  js --------//  

    $(window).scroll(function () {
        if ($(this).scrollTop() > $('.hero img').height()) {
            $('#header').addClass('header-scrolled');
        } else {
            $('#header').removeClass('header-scrolled');
        }
        if ($(this).scrollTop() > 100) { 
            $("#ToTop").fadeIn();
        } else {
            $("#ToTop").fadeOut();
        }
    });

    $("#ToTop").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    

});