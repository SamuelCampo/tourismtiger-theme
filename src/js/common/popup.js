/*  =========================
	Popup */

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

			// Init open popup data attr
			$('[data-open-popup]').on('click', function(e){
				if ( $(window).width() > 768 ) {
					e.preventDefault();

					var $button   = $(this);
					var reference = $button.attr('href');

					$('body').append('<a href="javascript:" class="iframe-popup__close"></a>');
					$('body').append('<iframe src="'+reference+'" id="iframe-popup" class="iframe-popup">Loading...</iframe>');

					$('.iframe-popup__close').on('click', function() {
						$('.iframe-popup__close').detach();
						$('.iframe-popup').detach();

						return false;
					});

				} else {
					document.location.href = reference;
				}

				return false;
			});

		}

	};

	/** 
	 * Include javascript files
	 * which requery DOM reload
	 */
	$.fn.popup = function( method ) {

        if ( methods[method] ) {
          return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
          return methods.init.apply( this, arguments );
        } else {
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.popup' );
        } 

    };

}));