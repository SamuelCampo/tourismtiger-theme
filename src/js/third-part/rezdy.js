/*  =========================
	rezdy */

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
			var $btn = $(this).not('[data-rezdy-init="1"]');

			$btn.on('click', function(){
				var $click = $(this);
			});

			$btn.attr('data-rezdy-init', '1');
		},

		getApiKey: function () {
			/**
			 * @todo Send get request and get key from get_field( 'rezdy', 'apikey' )
			 */
		}

	};

	/** 
	 * Init method
	 */
	$.fn.rezdy = function( method ) {

        if ( methods[method] ) {
          return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
          return methods.init.apply( this, arguments );
        } else {
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.rezdy' );
        } 

    };
}));