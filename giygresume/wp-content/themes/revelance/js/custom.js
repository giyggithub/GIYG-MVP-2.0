jQuery(document).ready(function($) {
    "use strict";

    $('body.preloader').jpreLoader({
        showSplash : false,
        loaderVPos : '50%',
    }).css('visibility','visible');


    $(".scroll").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        var hash = href.split('#');
        var url_hash = '#' + hash[1];
        if ($(url_hash).length > 0) {
            var offset = ($(window).width()<769) ? 20 : 90;
            $('html, body').animate({
                scrollTop: $(url_hash).offset().top-offset
            }, 1000);
        }
        else{
            location.href = href;
        }

        if($(window).width()<769){
            var $menu_responsive = $('#abdev_main_header nav');
            $menu_responsive.animate({width:'toggle'},350);
        }
    });

    if(window.location.hash){
        var hash = window.location.hash;
        var $scrollto = $(hash);
        if($scrollto.length>0){
            $('html, body').animate({
                scrollTop: $scrollto.offset().top-90
            }, 1000);
        }
    }

    $('#abdev_back_to_top').click(function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, 500);
        return false;
    });

    $('body.home.page').find('.tcvpb_section_tc').each(function(){
        var $section = $(this);
        var section_id = $(this).attr("id");
        var $menu_item;
        $section.waypoint({
            handler: function(direction){
                if(section_id!==undefined){
                    $('.current-menu-item').removeClass('current-menu-item').removeClass('current-menu-ancestor');
                    if(direction==='down'){
                        $menu_item = $('#main_menu a[href="#'+section_id+'"]').parent();
                        if($menu_item.length>0){
                            $menu_item.addClass('current-menu-item');
                        }
                        else{
                            $('#main_menu .current_page_item').addClass('current-menu-item');
                        }
                    }
                    else if(direction==='up'){
                        var previous_section_id = $section.prevAll('[id]:first').attr('id');
                        $menu_item = $('#main_menu a[href="#'+previous_section_id+'"]').parent();
                        if($menu_item.length>0){
                            $menu_item.addClass('current-menu-item');
                        }
                        else{
                            $('#main_menu .current_page_item').addClass('current-menu-item');
                        }
                    }
                }
            },
            offset: 150
        });
    });


    var $main_slider = $('#abdev_main_slider');
    var $main_header = $('#abdev_main_header');
    var $main_logo = $('#main_logo');
    var $inversed_logo = $('#inversed_logo');

    var admin_toolbar_height = parseInt($('html').css('marginTop'), 10);

    function header_switch(){
            if($(document).scrollTop() < $main_slider.height()-96 && $(window).width()>979){
                if($(document).scrollTop() < $main_header.height()){
                    $main_header.removeClass('sticky').addClass('menu_over_slider').fadeIn();
                }
                else{
                    $main_header.fadeOut();
                }
            }
            else{
                $main_header.removeClass('menu_over_slider').addClass('sticky').slideDown();
            }
    }

    function sticky_header(){
        if($(window).width()>979){
            $main_header.css({
                'z-index' : '9999',
                'visibility' : 'visible',
                'position' : 'fixed',
                'top': 0+admin_toolbar_height,
            });

            if($main_slider.length>0){
                $main_header.addClass('menu_over_slider');
                $(document).scroll(function(){
                    header_switch();
                });
            }
            else{
                $main_header.css('top', 0+admin_toolbar_height);
            }
        }
        else{
            $main_header.removeClass('menu_over_slider').css({
                'visibility' : 'visible',
                'position':'static',
                'top': 0,
            });
        }
    }

    sticky_header();
    header_switch();



    $('.accordion-group').on('show', function() {
        $(this).find('i').removeClass('icon-plus').addClass('icon-minus');
    });
    $('.accordion-group').on('hide', function() {
        $(this).find('i').removeClass('icon-minus').addClass('icon-plus');
    });


    var $sf = $('#main_menu');
    if($('#ABdev_menu_toggle').css('display') === 'none') {
        // enable superfish when the page first loads if we're on desktop
        $sf.superfish({
            delay:          300,
            animation:      {opacity:'show',height:'show'},
            animationOut:   {height:'hide'},
            speed:          'fast',
            speedOut:       'fast',
            cssArrows:      false,
            disableHI:      true /* load hoverIntent.js in header to use this option */,
            onBeforeShow:   function(){
                var ww = $(window).width();
                if(this.parent().offset() !== undefined){
                    var locUL = this.parent().offset().left + this.width();
                    var locsubUL = this.parent().offset().left + this.parent().width() + this.width();
                    var par = this.parent();
                    if(par.parent().is('#main_menu') && (locUL > ww)){
                        this.css('marginLeft', "-"+(locUL-ww+20)+"px");
                    }
                    else if (!par.parent().is('#main_menu') && (locsubUL > ww)){
                        this.css('left', "-"+(this.width())+"px");
                    }
                }
            }
        });
    }


    var $menu_responsive = $('#abdev_main_header nav');
    $('#ABdev_menu_toggle').click(function(){
        $menu_responsive.animate({width:'toggle'},350);
    });



    $(".submit").click(function () {
        $(this).closest("form").submit();
    });


    $('input, textarea').placeholder();

    var $isotope_container = $('#abdev_latest_portfolio');
    $isotope_container.imagesLoaded( function() {
        $isotope_container.isotope({
            itemSelector : '.portfolio_item',
            animationEngine: 'best-available',
        });
        var $optionSets = $('.option-set'),
            $optionLinks = $optionSets.find('a');
        $optionLinks.click(function(){
            var $this = $(this);
            if ( $this.hasClass('selected') ) {
                return false;
            }
            var $optionSet = $this.parents('.option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');
            var options = {},
                key = $optionSet.attr('data-option-key'),
                value = $this.attr('data-option-value');
            value = value === 'false' ? false : value;
            options[ key ] = value;
            if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
                changeLayoutMode( $this, options );
            } else {
                $isotope_container.isotope( options );
            }
            return false;
        });
    });


    $(window).resize(function() {

        admin_toolbar_height = parseInt($('html').css('marginTop'), 10);

        $isotope_container.imagesLoaded( function() {
            $isotope_container.isotope('layout');
        });

        if($('#ABdev_menu_toggle').css('display') === 'none' && !$sf.hasClass('sf-js-enabled')) {
            // you only want SuperFish to be re-enabled once ($sf.hasClass)
            $menu_responsive.show();
            $sf.superfish({
                delay:          300,
                animation:      {opacity:'show',height:'show'},
                animationOut:   {height:'hide'},
                speed:          'fast',
                speedOut:       'fast',
                cssArrows:      false,
                disableHI:      true /* load hoverIntent.js in header to use this option */,
                onBeforeShow:   function(){
                    this.css('marginLeft', "0px");
                    var ww = $(window).width();
                    var locUL = this.parent().offset().left + this.width();
                    var locsubUL = this.parent().offset().left + this.parent().width() + this.width();
                    var par = this.parent();
                    if(par.parent().is('#main_menu') && (locUL > ww)){
                        this.css('marginLeft', "-"+(locUL-ww+20)+"px");
                    }
                    else if (!par.parent().is('#main_menu') && (locsubUL > ww)){
                        this.css('left', "-"+(this.width())+"px");
                    }
                }
            });
        } else if($('#ABdev_menu_toggle').css('display') != 'none' && $sf.hasClass('sf-js-enabled')) {
            // smaller screen, disable SuperFish
            $sf.superfish('destroy');
            $menu_responsive.hide();
        }

        sticky_header();
        header_switch();
    });





});


