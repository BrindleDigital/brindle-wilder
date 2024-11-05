import $ from "jquery";
window.$ = window.jQuery = $;
import "bootstrap";
import '@popperjs/core';
import 'slick-slider';
import AOS from 'aos';
import 'lity';


(function( $ ){
    $(function(){

        'use strict';

        console.log('> app: init');

        const baseAnimationDelay = 200;
        const nextElementAdditionalDelay = baseAnimationDelay / 2;


        window.onload = function(){
          setTimeout(function(){

            AOS.init({
              offset: 0,
              duration: 400,
              delay: 0,
              once: true,
              easing: 'ease-in-sine',
            });

          }, 300);
        }

        

        $('.regular-content__slider').on('init', function( e, slick){
            if( slick.slideCount <= 1){
                $(this).find('.reguar-content__slider--arrows').addClass('disabled');
            }
        });

        $('.testimonials-slider').slick({
            centerMode: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            speed: 600,
            centerPadding: '20%',
            dots: true,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        centerMode: false,
                        centerPadding: '0%',
                    }
                }
            ]
        });

        let heroSlider = $('.regular-content__slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 600,
            fade: true,
            dots: false,
            arrows: false,
            adaptiveHeight: true
        });

        let featuredLocationSlider = $('.featured-locations-slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 600,
            fade: true,
            dots: false,
            arrows: false,
            adaptiveHeight: true
        });

        $(document).on('click', '.js--featured-location-slider-prev', function(){
            featuredLocationSlider.slick('slickPrev');
        });
        $(document).on('click', '.js--featured-location-slider-next', function(){
            featuredLocationSlider.slick('slickNext');
        });
        
        
        $(document).on('click', '.js--hero-slider-prev', function(){
            heroSlider.slick('slickPrev');
        });
        $(document).on('click', '.js--hero-slider-next', function(){
            heroSlider.slick('slickNext');
        });

        


        $(window).scroll(function(){
            var sticky = $('.site-header'),
                scroll = $(window).scrollTop();
          
            if (scroll > 32) sticky.addClass('fixed');
            else sticky.removeClass('fixed');
        });


        $('.js--open-menu').on('click', function(){
            $('.site-menu').addClass('active');
        });
        $('.js--close-menu').on('click', function(){
            $('.site-menu').removeClass('active');
        });


        window.addEventListener("scroll", function() {

            $('.regular-content').each(function(){

                const distance = window.scrollY
                const section = $(this);
                const topDistance = $(document).scrollTop();

                if( 
                    
                    ( topDistance <  ( section.offset().top + section.outerHeight() ) ) &&
                    ( topDistance + $(window).height() > section.offset().top )

                ){

                    section.find('.regular-content__background.regular-content__background--parallax .regular-content__background__wrap').css('transform', 'translateY(' + ( ( distance ) * 0.5) + 'px)');


                }

            });

            

          })




          $('.regular-content:not(#footer)').each(function(){

            const section = $(this);
            const section__main = section.find('.regular-content__main');

            const title_and_content_tags = section__main.find('h1, h2, h3, h4, h5, h6, p, label, .subheading, .link, .link-large');
            const button_tags = section__main.find('button, .btn');

            title_and_content_tags.each(function( index ){
                $(this).attr('data-aos', 'fade');

                $(this).attr('data-aos-delay', baseAnimationDelay + (100 * index) );
            });

            button_tags.each(function( index ){
                $(this).parent('span').attr('data-aos', 'flip-up');

                $(this).parent('span').attr('data-aos-delay', baseAnimationDelay + (100 * index) );
            });

          });


          $('.js--tab-button').on('click', function(){

            $(this).parents('.js--tab-group').find('.js--tab-button').removeClass('active');    
            $(this).parents('.js--tab-group').find('.js--tab-element').removeClass('active');    
            
            const tabContent = $(this).attr('data-tab');
            
            $(this).addClass('active');
            $(tabContent).addClass('active');

          });


          $('.regular-content.section--featured-locations').each(function(){

            const section = $(this);
            const section__main = section.find('.regular-content__main');

            const title_and_content_tags = section__main.find('h1, h2, h3, h4, h5, h6, p, label, .subheading, .link, .link-large');
            const button_tags = section__main.find('button, .btn');

            title_and_content_tags.each(function( index ){
                $(this).attr('data-aos', 'fade');
                $(this).attr('data-aos-anchor', '#featured-locations');
                $(this).attr('data-aos-offset', '100');

                $(this).attr('data-aos-delay', baseAnimationDelay + (150 * index) );
            });

            button_tags.each(function( index ){
                $(this).parent('span').attr('data-aos', 'flip-up');0

                $(this).parent('span').attr('data-aos-delay', 0 );
            });

          });


          $('.section--explore').each(function(){

                const section = $(this);

                section.find('.col--gallery figure').each(function( index ){

                    const figure = $(this);
                    const img = figure.find('img');
                    const caption = figure.find('figcaption');

                    let imageTotalDelay = 250;


                    img.attr('data-aos', 'fade');
                    img.attr('data-aos-delay', 100 + (100 * index) );

                    caption.attr('data-aos', 'fade-right');
                    caption.attr('data-aos-delay',  imageTotalDelay + (100 * index));

                });

          });



        if( document.getElementById("map") && window.gmapsettings != undefined ){

          let styles = [];

          if( window.gmapsettings != undefined ){
            styles = window.gmapsettings.styles;
          }

          let map;

          async function initMap() {

            const { Map } = await google.maps.importLibrary("maps");
            
            const latLng = { lat: window.gmapsettings.latitude, lng: window.gmapsettings.longitude };

            
            map = new Map(document.getElementById("map"), {
                center: latLng,
                zoom: 8,
            });

            map.setOptions({ styles: styles });


            new google.maps.Marker({
              position: latLng,
              map,
              icon: window.gmapsettings.marker

            });

          }
          
          initMap();
          
        }






        function convert_youtube(input) {
            var pattern = /(?:http?s?:\/\/)?(?:www\.)?(?:youtube\.com|youtu\.be)\/(?:watch\?v=)?(\S+)/g;
            if (pattern.test(input)) {
              var replacement = '<iframe width="420" height="345" class="js--background-video-iframe" src="//www.youtube.com/embed/$1?version=3&controls=0&loop=1&playlist=$1&autoplay=1&mute=1&rel=0&modestbranding=1" frameborder="0" allowfullscreen></iframe>';
              var input = input.replace(pattern, replacement);
              // For start time, turn get param & into ?
            //   var input = input.replace('&amp;t=', '?t=');

              var replacement2 = "$1";
                var url = input.replace(pattern, replacement2);

                console.log(replacement2);

            }
            return input;
          }
          
          function convert_vimeo(input) {
            var pattern = /(?:http?s?:\/\/)?(?:www\.)?(?:vimeo\.com)\/?(\S+)/g;
            if (pattern.test(input)) {
             var replacement = '<iframe width="420" height="345" class="js--background-video-iframe" src="//player.vimeo.com/video/$1?background=1&autoplay=1&loop=1&muted=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
             var input = input.replace(pattern, replacement);

             var replacement2 = "$1";
             var url = input.replace(pattern, replacement2);

             console.log(replacement2);
            }
            return input;
          }

        $('iframe[data-embed-url]').each(function(){
            let iframe = $(this);
            let parent = iframe.parents('.regular-content__background--video');
            let video_url = iframe.attr('data-embed-url');
            let video_source = iframe.attr('data-embed-source');

            let newIframe = '';

            if( video_source == 'youtube' ){
              newIframe = convert_youtube( video_url );
            }else if( video_source == 'vimeo' ){
              newIframe = convert_vimeo( video_url );
            }

            parent.html( newIframe );

            document.querySelector('.js--background-video-iframe').onload = function(){
              console.log('> iframe loaded');
              setTimeout(function(){
                console.log('> timeout');
                document.querySelector('.js--background-video-iframe').classList.add('loaded');
              }, 1000);
            }
        });





    });
})( jQuery );



function RGBAToHexA(rgba, forceRemoveAlpha = false) {
  return "#" + rgba.replace(/^rgba?\(|\s+|\)$/g, '') // Get's rgba / rgb string values
    .split(',') // splits them at ","
    .filter((string, index) => !forceRemoveAlpha || index !== 3)
    .map(string => parseFloat(string)) // Converts them to numbers
    .map((number, index) => index === 3 ? Math.round(number * 255) : number) // Converts alpha to 255 number
    .map(number => number.toString(16)) // Converts numbers to hex
    .map(string => string.length === 1 ? "0" + string : string) // Adds 0 when length of one number is 1
    .join("") // Puts the array to togehter to a string
}
