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
				 * Set section background image
				 */
				if ($self.attr('data-bg-image')) {
					var url  = $self.attr('data-bg-image');
					var attr = 'url('+url+')';
			        var img = new Image();


					/**
					 * Expanable image
					 */
					if ($self.attr('data-bg-expanded') == '1') {
				        img.onload = function(){
				            var img_percent = img.height / img.width * 100;
				            var img_height = screen.width / 100 * img_percent;

				            $self.animate({
				              'min-height': img_height, 
				            }, 100);
						};
				    }

				    // assign url to new image 
			        img.src = url;

					// Set background image
		            $self.css('background-image', attr);
				}


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
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.background' );
        } 

    };
}));