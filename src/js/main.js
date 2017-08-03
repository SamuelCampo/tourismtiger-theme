/**
 *	Main.js
 *
 *  @package TourismTiger_Theme
 *  @author  tourismtiger
 */

/* 
	Third parts 
*/
//= ../../bower_components/jquery/dist/jquery.js
//= ../../bower_components/slick-carousel/slick/slick.js
//= ../../bower_components/pickmeup/dist/pickmeup.min.js
//= ../../bower_components/aload/dist/aload.min.js

//= ../../bower_components/wow/dist/wow.min.js
// ../../bower_components/smoothstate/jquery.smoothState.min.js
// ../../bower_components/jquery-mask-plugin/dist/jquery.mask.js
// ../../bower_components/magnific-popup/dist/jquery.magnific-popup.js


/**
  	Common functions
 */
//= common/accordion.js
//= common/primary-content.js
//= common/popup.js
//= common/hero-area.js
//= common/acf-api.js
//= common/handle-click.js
//= common/gallery-slider.js

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

	/**
	 * Methods which used main JS controller
	 * @type {Object}
	 */
	var methods = {


    	/**
    	 * Use when you would like to refresh a DOM elements.
    	 * Used after DOM loaded and in any actions.
    	 */
		init: function () {

			aload();
            $(document).primaryContent('init');
			$(document).popup('init');
			$(document).heroArea('init');
			$(document).acfApi('init');

			// Hang click handling to following buttons:
			$('[data-ajax-rows]').handleClick('init');

			// Hang gallery sliders:
			$('.gallery-slider').gallerySlider('init');

			// Product page's tstimonials
			$('.testimonials-carousel').slick({
				arrows: false,
				adaptiveHeight: true,
				dots: true
			});
		},

		/**
		 * Calls after window loaded
		 */
		onLoad: function () {
            $(document).primaryContent('onLoad');
		}
	};

	/** 
	 * Include javascript files
	 * which requery DOM reload
	 */
	$.fn.controller = function( method ) {

        if ( methods[method] ) {
          return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
          return methods.init.apply( this, arguments );
        } else {
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.controller' );
        } 

    };

	$(function(){
		$(window).controller('init');
		$(window).controller('onLoad');
	});

}));