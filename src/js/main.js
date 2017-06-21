/*  =========================
 *
 *	D E P E N D E N C E S
 *
 *  @package TourismTiger_Theme
 *  @author  tourismtiger
 *  ========================= */

//= ../../bower_components/jquery/dist/jquery.js
// ../../bower_components/smoothstate/jquery.smoothState.min.js
// ../../bower_components/jquery-mask-plugin/dist/jquery.mask.js
// ../../bower_components/magnific-popup/dist/jquery.magnific-popup.js
//= ../../bower_components/slick-carousel/slick/slick.js
// ../../bower_components/wow/dist/wow.min.js

/*  =========================
	W P K I T
    ========================= */

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

			//= common/hero-area.js
			//= common/slider.js

		}
	};

	/** 
	 * Include javascript files
	 * which requery DOM reload
	 */
	$.fn.tourtigerController = function( method ) {

        if ( methods[method] ) {
          return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
          return methods.init.apply( this, arguments );
        } else {
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.primaryContent' );
        } 

    };

	$(function(){
		$(window).tourtigerController('init');
	});


	/**
	 * Iclude javascript functions 
	 * which doesn't requery DOM reload 
	 */
	// functions/ajax-acf.js
	// components/smoothState.js

}));