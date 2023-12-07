
jQuery(function(){

    jQuery(window).on('load', function () {
        jQuery('.page-loader').delay('500').fadeOut(1000);
    });

    jQuery(document).ready(function() {

        jQuery(document).on('click', '.icon-menu', function() {
            jQuery('.responsive-sidebar-menu').addClass('active');
        });
        jQuery(document).on('click', '.responsive-sidebar-menu .overlay', function() {
            jQuery('.responsive-sidebar-menu').removeClass('active');
        });

        jQuery(document).on('click', '.menu li .scroll-to', function() {
            jQuery('.responsive-sidebar-menu').removeClass('active');
        })


        jQuery(document).on('click', ".color-boxed a", function() {
            jQuery(".color-boxed a").removeClass("clr-active");
            jQuery(this).addClass("clr-active");
        });
        
        jQuery(document).on('click', ".global-color .setting-toggle", function() {
            jQuery(".global-color").addClass("active");
        });

        jQuery(document).on('click', ".global-color .inner .overlay, .global-color .inner .global-color-option .close-settings", function() {
            jQuery(".global-color").removeClass("active");
        });

    });

    jQuery(window).scroll(function() {
            
        var windscroll = jQuery(window).scrollTop();
        if (windscroll >= 0) {
            jQuery('.page-section').each(function(i) {
                if (jQuery(this).position().top <= windscroll - -1) {
                    jQuery('.scroll-nav .scroll-to.active').removeClass('active');
                    jQuery('.scroll-nav .scroll-to').eq(i).addClass('active');
                    jQuery('.scroll-nav-responsive a.active').removeClass('active');
                    jQuery('.scroll-nav-responsive a').eq(i).addClass('active');
                }
            });

        } else {

            jQuery('.scroll-nav .scroll-to.active').removeClass('active');
            jQuery('.scroll-nav .scroll-to:first').addClass('active');
            jQuery('.scroll-nav-responsive a.active').removeClass('active');
            jQuery('.scroll-nav-responsive a:first').addClass('active');
        }

        if (windscroll >= 0) {
            jQuery('.scroll-to-page').each(function(i) {

                var wscrolldecress = windscroll + 1;
                // console.log(wscrolldecress);
                if (jQuery(this).position().top <= wscrolldecress - 0) {
                    jQuery('.scroll-nav .scroll-to.active').removeClass('active');
                    jQuery('.scroll-nav .scroll-to').eq(i).addClass('active');
                    jQuery('.scroll-nav-responsive a.active').removeClass('active');
                    jQuery('.scroll-nav-responsive a').eq(i).addClass('active');
                }
            });

        } else {
            jQuery('.scroll-nav .scroll-to.active').removeClass('active');
            jQuery('.scroll-nav .scroll-to:first').addClass('active');
            jQuery('.scroll-nav-responsive a.active').removeClass('active');
            jQuery('.scroll-nav-responsive a:first').addClass('active');
        }

    }).scroll();







    if (jQuery('.testimonial-slider').length) {
        var testimonial = jQuery('.testimonial-slider').owlCarousel({
            items: 1,
            margin: 30,
            stagePadding: 0,
            smartSpeed: 450,
            autoHeight: true,
            loop: false,
            nav: false,
            dots: false,
            onInitialized  : counter, //When the plugin has initialized.
            onTranslated : counter //When the translation of the stage has finished.
        });

        jQuery('.testimonial-nav .next').on('click', function() {
            testimonial.trigger('next.owl.carousel');
        })
        jQuery('.testimonial-nav .prev').on('click', function() {
            testimonial.trigger('prev.owl.carousel', [300]);
        })


        function counter(event) {
            var element   = event.target;         // DOM element, in this example .owl-carousel
            var items     = event.item.count;     // Number of items
            var item      = event.item.index + 1;     // Position of the current item
        
        // it loop is true then reset counter from 1
        if(item > items) {
                item = item - items
        }
        jQuery('#testimonial-slide-count').html("<span class='left'>"+item+"</span> / "+items)
        }
    }

});