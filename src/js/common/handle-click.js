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
			var $btn = $(this).not('[data-status="handle-click"]');

			$btn.on('click', function(){
				var $click = $(this);

				/**
				 * If request to show more rows in primary content
				 */
				if ($click.attr('data-ajax-rows')) {
					$click.handleClick( 'ajaxRows' );
				}
			});

			$btn.attr('data-status', 'handle-click');
		},

		toggleSpiner: function () {
			var $button = $(this);

			if ($button.length > 0) {
				var isLoading = $button.hasClass('is-loading');

				if (!isLoading) {
					$button.addClass('is-loading');
					$button.attr('data-label', $button.text());
					$button.html('<div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');

				} else {
					$button.removeClass('is-loading');
					$button.html($button.attr('data-label'));
				}
			}
		},

		ajaxRows: function () {
			var $click     = $(this);
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
					$moreBtn.handleClick('toggleSpiner');
					$rowHolder.acfApi('loadAjax', function () {
						$moreBtn.hide().handleClick('toggleSpiner');
                		$lessBtn.show();
					});
				} else {
					var atOnce = +$rowHolder.attr('data-init');
	                $rows.each(function(index){
	                    if (index >= atOnce) {
	                        $(this).fadeIn(500).removeClass('slick-out');
	                    }
	                });

	                $moreBtn.hide();
	                $lessBtn.show();
				}

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
                        $(this).addClass('slick-out').fadeOut(500);
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