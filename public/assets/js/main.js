(function ($) {
    "use strict";


    jQuery(document).ready(function ($) {


        //------------ Offcanvas -------------

        $('.menu-open , .offcanvas-overlay, .mob__category').click(function () {
            $('.offcanvas-area , .offcanvas-overlay').addClass('active');
        });
        $('.menu-close , .offcanvas-overlay').click(function () {
            $('.offcanvas-area , .offcanvas-overlay').removeClass('active');
        });


        //------------ Cart Sidebar -------------

        $('.cart__box, .mob__cart').click(function () {
            $('.cart__wrapper').addClass('active');
        });
        $('.cart__close__main').click(function () {
            $('.cart__wrapper').removeClass('active');
        });


        //------------ Hero slider -------------

        $('.product__main__slider').owlCarousel({
            loop: false,
            margin: 20,
            nav: true,
            navText: ['<i class="far fa-chevron-left"></i>', '<i class="far fa-chevron-right"></i>'],
            dot: false,
            items: 7,
            slideToScroll: 1,
            smartSpeed: 700,
            responsive: {
                320: {
                    items: 2,
                    margin: 10,
                    nav: false,
                },
                450: {
                    items: 3,
                    margin: 10,
                    nav: false,
                },
                575: {
                    items: 3,
                    nav: false,
                },
                768: {
                    items: 5,
                },

                992: {
                    items: 5,
                },
                1100: {
                    items: 5,
                },
                1200: {
                    items: 7,
                },
            }
        })


        //------------ Hero slider -------------

        $('.cat__main__slider').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            navText: ['<i class="far fa-chevron-left"></i>', '<i class="far fa-chevron-right"></i>'],
            dot: false,
            items: 8,
            slideToScroll: 1,
            smartSpeed: 700,
            autoplay: false,
            autoplayTimeout: 2000,
            responsive: {
                320: {
                    items: 4,
                    margin: 10,
                    nav: false,
                },
                450: {
                    items: 5,
                    margin: 10,
                    nav: false,
                },
                575: {
                    items: 5,
                    nav: false,
                },
                768: {
                    items: 5,
                },

                992: {
                    items: 6,
                },
                1100: {
                    items: 7,
                },
                1200: {
                    items: 8,
                },
            }
        })


        //------------ Nice Number -------------

        $('input[type="number"]').niceNumber();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


    }); //---document-ready-----

}(jQuery));