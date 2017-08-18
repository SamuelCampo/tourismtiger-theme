/*  =========================
	gForm controller */

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

			var $forms = $(this).not('[data-inited]');
			console.log($forms);

			if ($forms.length > 0) {

				/**
				 * Handle specific fields
				 */
				$forms.find('select, input[type="radio"], input[type="checkbox"]').styler();
				
				$forms.attr('data-inited', 1);
			}
		}
	};

	/** 
	 * Init method
	 */
	$.fn.gForm = function( method ) {

        if ( methods[method] ) {
          return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
          return methods.init.apply( this, arguments );
        } else {
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.gForm' );
        } 

    };
}));