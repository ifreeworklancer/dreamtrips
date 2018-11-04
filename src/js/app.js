import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal'
import 'flickity/dist/flickity.css';

window.jQuery = window.$ = jquery;



(function () {
    let isCounted = 0;
    /**
     * Burger-menu
     */
    $('.burger-menu').click(function () {
        var menu = $('.menu');
        $(this).toggleClass('active');
        if (menu.is(':visible')) {
            menu.slideUp();
        } else {
            menu.slideDown().css('display', 'flex');
        }
    });


    /**
     * Form-label
     */

    $('.form-control').on('focus', function () {
        $(this).parent().addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parent().addClass('in-focus');
        } else {
            $(this).parent().removeClass('in-focus');
        }
    });


    /**
     * Counter
     */
    $.fn.jQuerySimpleCounter = function (options) {
        var settings = $.extend({
            start: 0,
            end: 100,
            easing: 'swing',
            duration: 400,
            complete: ''
        }, options);

        var thisElement = $(this);

        $({
            count: settings.start
        }).animate({
            count: settings.end
        }, {
            duration: settings.duration,
            easing: settings.easing,
            step: function () {
                var mathCount = Math.ceil(this.count);
                thisElement.text(mathCount);
            },
            complete: settings.complete
        });
    };

    $(window).on('scroll', function () {
        if ($(this).scrollTop() + $(window).height() > $('#progress').offset().top && !isCounted) {
            $('#progress-counter1').jQuerySimpleCounter({
                end: 99,
                duration: 3000
            });
            $('#progress-counter2').jQuerySimpleCounter({
                end: 159,
                duration: 3000
            });
            $('#progress-counter3').jQuerySimpleCounter({
                end: 629,
                duration: 3000
            });
            $('#progress-counter4').jQuerySimpleCounter({
                end: 25899,
                duration: 3000
            });

            isCounted = 1;
        }
    })



    /**
     *  Slider reviews
     */

    if ($('.opportunities-slider')) {

        var elem1 = document.querySelector('.opportunities-slider');
        if (elem1) {

            const flkty1 = new Flickity(elem1, {
                prevNextButtons: false,
                cellAlign: 'left',
                contain: true,
                draggable: true,
                wrapAround: true,
            });

            var prevArrowOpportunities = document.querySelector('.slider-arrow-nav-item--prev');

            prevArrowOpportunities.addEventListener('click', function () {
                flkty1.previous(false, false);
            });

            var nextArrowOpportunities = document.querySelector('.slider-arrow-nav-item--next');

            nextArrowOpportunities.addEventListener('click', function () {
                flkty1.next(false, false);
            });

        }
    }


})(jQuery)