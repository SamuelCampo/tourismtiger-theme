/*  =========================
	handleClick */

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
			var $btn = $(this).not('.js-handled');

			$btn.on('click', function(){
				var $click = $(this);

				// If request to show more 
				// rows in primary content
				if ($click.attr('data-ajax-rows') || $click.hasClass('js-show')) {
					var trigger    = $click.attr('data-ajax-rows');

					if ($click.hasClass('js-show')) {
						var $rowHolder = $click.closest('.primary-content').find('.rows'); 
					} else {
						var $rowHolder = $('[data-rows-trigger="' + trigger + '"]'); 
					}

					$rowHolder.acfApi('loadAjax');
				}
			});

			$btn.addClass('js-handled');
		}

	};

	/** 
	 * Init method
	 */
	$.fn.handleClick = function( method ) {

        if ( methods[method] ) {
          return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
          return methods.init.apply( this, arguments );
        } else {
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.handleClick' );
        } 

    };
}));