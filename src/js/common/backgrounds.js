/*  =========================
	background */

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

			var $wrappers = $('[data-bg-image]').not('[data-bg-inited]');

			$wrappers.each(function(){
				var $self = $(this);

				/**
				 * Set backgrund's overlay
				 */
				if ($self.attr('data-bg-overlay')) {
					var $overlay = $('<div class="bg-overlay"></div>');
					var color    = $self.attr('data-bg-overlay-color');
					var image    = $self.attr('data-bg-overlay-image');
					var opacity  = $self.attr('data-bg-overlay-opacity');

					color && $overlay.css('background-color', color);
					image && $overlay.css('background-image', 'url('+image+')');
					opacity && $overlay.css('opacity', opacity / 100);

					$overlay.prependTo($self);
				}

				/**
				 * Set section background image
				 */
				$self.attr('data-bg-image') && $self.backgrounds('urlToBackground');


				/**
				 * Generate google maps background
				 */
				if ($self.attr('data-section-lat') && $self.attr('data-section-lng')) {
					var lat = $self.attr('data-section-lat');
					var lng = $self.attr('data-section-lng');

					$self.prepend("<div class='acf-map bg_map'><div class='marker' data-lat='"+lat+"' data-lng='"+lng+"'></div></div>");
				}
			});

			$wrappers.attr('data-bg-inited', 1);
		},

		urlToBackground: function () {
			var $self  = $(this); 
			var url    = $self.attr('data-bg-image');
            var image  = new Image();

            if (url) {
				image.onload = function(){
	                var imgPercent = image.height / image.width * 100;
	                var imgHeight  = screen.width / 100 * imgPercent;

					// make width and height of 
					// the image proporsial to 
					// an user's screen
					if ( $self.attr('data-bg-equal') == '1' ) {
		                var imgPercent = image.height / image.width * 100;
		                var imgHeight  = +$('body').width() / 100 * imgPercent;

		                // smooth or not
		                if ($self.hasClass('divider-image')) {
		                	$self.css({'min-height': imgHeight});
		                } else {
		                	$self.animate({'min-height': imgHeight}, 500);
		                }

					// Default height
					} else if ( $self.attr('data-bg-height') == 'image' ) {
						var imgHeight = image.height;

						// smooth or not
		                if ($self.hasClass('divider-image')) {
		                	$self.css({'min-height': imgHeight});
		                } else {
		                	$self.animate({'min-height': imgHeight}, 500);
		                }
					} 

					$self.css({
						'background-image': 'url(' + url + ')'
					});
				}

	            image.src = url;
            }
		}

	};

	/** 
	 * Init method
	 */
	$.fn.backgrounds = function( method ) {

        if ( methods[method] ) {
          return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
          return methods.init.apply( this, arguments );
        } else {
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.backgrounds' );
        } 

    };
}));