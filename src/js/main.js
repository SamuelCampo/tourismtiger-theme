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
//= ../../bower_components/pickmeup/dist/pickmeup.min.js

/**
 * Load Google Maps API using 
 */
$.getScript( "https://maps.googleapis.com/maps/api/js?key=" + global_var.google_maps_key + "&callback=initMap" )
  .done(function( script, textStatus ) {
    console.log( textStatus );
  })
  .fail(function( jqxhr, settings, exception ) {
    console.warn( textStatus );
});

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

			//= common/primary-content.js
			//= common/slider.js
			//= common/open-popup.js
			//= common/hero-area.js
			//= common/acf-googlemap.js

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
	// functions/acf-globals.js
	// functions/ajax-acf.js
	// components/smoothState.js

}));