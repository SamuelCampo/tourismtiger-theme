/*  =========================
	Accordion */

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

			var $this = $(this);
			
			if ($this.length > 0) {
				$this.on('click', 'a', function(e){
					e.preventDefault();

					var $head  = $(this);
					var $wrap  = $head.closest('.accordion');
					var $body  = $wrap.find('.accordion--body');
					var $open  = $wrap.find('.accordion--head__open');
					var $close = $wrap.find('.accordion--head__close');

					$open.toggleClass('hidden');
					$close.toggleClass('hidden');
					$body.toggleClass('is-active');

					if ($body.hasClass('is-active')) {
						$body.slideDown(500);
					} else {
						$body.slideUp(500);
					}

					return false;
				});
			}

		}

	};

	/** 
	 * Init method
	 */
	$.fn.accordion = function( method ) {

        if ( methods[method] ) {
          return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
          return methods.init.apply( this, arguments );
        } else {
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.heroArea' );
        } 

    };
}));