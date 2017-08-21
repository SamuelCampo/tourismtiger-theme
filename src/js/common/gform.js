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
				 * Actions over $form
				 * - Stylize specific fields
				 * - Set mask to time-field
				 * - Set mask to date
				 * - Set mask to phone
				 * - Set data-init to the form
				 */
				$forms
					.find('select, input[type="radio"], input[type="checkbox"]')
						.styler()
					.end()
					.find('.type_time')
						.find('input')
							.mask('00')
					.end()
					.find('.type_date')
						.find('input')
							.mask('00/00/0000')
					.end()
					.find('.type_phone')
						.find('input')
							.mask('(000) 000-0000')
					.attr('data-inited', 1);
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