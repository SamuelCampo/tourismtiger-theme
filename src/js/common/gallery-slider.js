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
			if ($gallery.hasClass('cover_full-screen')) {
				console.log('Full screen');
			}

			$gallery.attr('data-inited', 1);
		}

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