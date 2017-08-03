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
				if ($click.attr('data-ajax-rows')) {
					var trigger    = $click.attr('data-ajax-rows');

					// Button within a section
					if ($click.hasClass('js-show')) {
						var $rowHolder = $click.closest('.primary-content').find('.rows'); 
						var $rows      = $rowHolder.children();
						var lack       = +$rowHolder.attr('data-lack');

						// buttons
						var $moreBtn   = $click;
						var $lessBtn   = $click.closest('.primary-content').find('.js-hide');

						if (lack > 0) {
							$rowHolder.acfApi('loadAjax');
						} else {
							var atOnce = +$rowHolder.attr('data-init');
			                $rows.each(function(index){
			                    if (index >= atOnce) {
			                        $(this).show();
			                    }
			                });
						}

		                $moreBtn.hide();
		                $lessBtn.show();

					} else if ($click.hasClass('js-hide')) {
						var $rowHolder = $click.closest('.primary-content').find('.rows'); 
						var $rows      = $rowHolder.children();
						var atOnce     = +$rowHolder.attr('data-init');
						// buttons
						var $moreBtn   = $click.closest('.primary-content').find('.js-show');
						var $lessBtn   = $click;

						// hide rows
		                $rows.each(function(index){
		                    if (index >= atOnce) {
		                        $(this).hide();
		                    }
		                });

		                $moreBtn.show();
		                $lessBtn.hide();

					// button placed elsewhere
					} else {
						var $rowHolder = $('[data-rows-trigger="' + trigger + '"]'); 
						$rowHolder.acfApi('loadAjax');
					}
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