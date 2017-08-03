/*  =========================
	Gallery slider */

(function(factory) {
    'use strict';
    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory);
    } else if (typeof exports !== 'undefined') {
        module.exports = factory(require('jquery'));
    } else {
        factory(jQuery);
    }

}(function($) {

	var methods = {

		init: function () {
			$gallery = $(this).not('[data-inited]');

			// Default cover options
			$gallery.hasClass('cover_default') && $gallery
			.find('.gallery-slider--loop')
			.slick({
				arrows: false,
				adaptiveHeight: true,
				lazyLoad: 'progressive',
				// todo: add arrows
			});

			// Full screen cover options
			// Init button clicking
			if ($gallery.hasClass('cover_full-screen')) {
				$gallery.on('click', '.gallery-slider--current', function () {
					$(this).gallerySlider('openFullScreenSlider');
				});
			}

			$gallery.attr('data-inited', 1);
		},

		openFullScreenSlider: function () {

			// Vissible items
			var $current     = $(this);
			var $gallery     = $current.closest('.gallery-slider');                // parent div of the gallery
			var $image       = $current.find('.gallery-slider--current__image');   // this div keeps image
			var $cover       = $current.closest('.gallery-slider__cover');         // keeps thumbnail and panel 
			var $panel       = $cover.find('.gallery-slider--panel');              // panel contains a button

			// Hiden components
			var $additional  = $gallery.find('.gallery-slider--additional');       // Main slider

			// Parameters
			var width        = $image.width();
			var height       = $image.height();
			var globalWidth  = $(window).width();
			var globalHeight = $(window).height();
			var coverTop     = $cover.offset().top - $(window).scrollTop();
			var coverLeft    = $cover.offset().left;

            // To improve animation perfomance
            // we should set width and height values 
            // to cover area and image.
			$cover
			.width(width)
			.height(height)
			.find('img')
			.width(width)
			.height(height);

			$panel.hide();

			/**
			 * Main animations script
			 */
			$image

			// here we make the cover fixed
			// for using smooth animation 
			.css({
				'position': 'fixed',
				'z-index': '9999',
				'top': coverTop,
				'left': coverLeft,
			})

			// moves cover to the center of the window
			.animate({
				'top': (globalHeight / 2) - (height / 2),
				'left': (globalWidth / 2) - (width / 2),
			}, 500, // 300ms

			// after animation steps
			function(){
				$image.fadeOut(500);

				/**
				 * Init carousel algoritm
				 */
				$additional
				.css({
					'display': 'flex',
				})
				.prepend('<a href="javascript:" class="gallery-slider__close"></a>')
				// build carousel
				.find('.gallery-slider--additional__loop')
				.slick({
					prevArrow: '<button type="button" class="gallery-slider__arrow-prev gallery-slider__arrow"></button>',
					nextArrow: '<button type="button" class="gallery-slider__arrow-next gallery-slider__arrow"></button>',
					adaptiveHeight: true,
					lazyLoad: 'progressive',
				})
				// update slick slider container height
				.slick('setOption', 'height', null, true);

				// show it
				$additional
				.animate({
					'opacity': '1'
				}, 500);

				// close slider function
				$additional.on('click', '.gallery-slider__close', function () {
					var $click = $(this);

					// cover image animation
					$image
					.fadeIn(500)
					.animate({
						'top': coverTop,
						'left': coverLeft,
					}, 500, function(){
						$image.css({
							'position': 'static',
						});
						$panel.fadeIn(300);
					});

					// carousel animation
					$additional
					.animate({
						'opacity': '0'
					}, 500, function () {
						$additional
						.hide()
						.find('.gallery-slider--additional__loop')
						.slick('unslick')
						.end()
						.find('.gallery-slider__close')
						.detach();
					});
				});
			});
		},
	};

	/** 
	 * Init method
	 */
	$.fn.gallerySlider = function( method ) {

        if ( methods[method] ) {
          return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
          return methods.init.apply( this, arguments );
        } else {
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.gallerySlider' );
        } 

    };
}));