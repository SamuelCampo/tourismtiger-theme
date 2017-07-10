/*  =========================
	Primary content */

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

		/**
		 * Handle each section layout
		 */
		init: function () {
			var $primaryContent = $('.primary-content');

			$primaryContent.each(function(){
				var $self = $(this);

				/**
				 * Check whether that section wasn't loaded
				 */
				if (!$self.hasClass('js-handled')) {


					/**
					 * Set background image
					 */
					if ($self.attr('data-section-image')) {
						var url  = $self.attr('data-section-image');
						var attr = 'url('+url+')';
				        var img = new Image();


						/**
						 * Expanable image
						 */
						if ($self.attr('data-section-expanded') == '1') {
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

						$self.prepend("<div class='acf-map primary-content--bg_map'><div class='marker' data-lat='"+lat+"' data-lng='"+lng+"'></div></div>");
					}


					/**
					 * Set dividers' background images
					 */
					var $divider = $self.find('[data-image]');
					if ( $divider.length > 0 ) {
						$divider.each(function(){
							var $that = $(this);
							var url   = $that.attr('data-image');
							var attr  = 'url('+url+')';
					        var img   = new Image();

					        // Set divider height
					        img.onload = function(){

					            $that.animate({
					              'height': img.height, 
					            }, 100);
							};

						    // assign url to new image 
					        img.src = url;

							// Set background image
				            $that.css('background-image', attr);
						});
					}


					/**
					 * Add indicator-class to avoid reworking 
					 * that file during ajax request
					 */
					$self.addClass('js-handled');
				}
			});
		}

	};

	/** 
	 * Init method
	 */
	$.fn.primaryContent = function( method ) {

        if ( methods[method] ) {
          return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
          return methods.init.apply( this, arguments );
        } else {
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.primaryContent' );
        } 

    };

}));