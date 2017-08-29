/*  =========================
	dividers */

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

			var $wrappers = $('[data-dividers]').not('[data-dividers-inited]');

			$wrappers.each(function(){
				var $wrapper   = $(this);
				var topType    = $wrapper.attr('data-divider-top-type');
				var bottomType = $wrapper.attr('data-divider-bottom-type');

				// top divider
				if ( topType != 'none' && topType ) {
					var $topDivider = $('<div></div>', {
						'class': 'divider-top divider-type_' + topType
					});

					var url   = $wrapper.attr('data-divider-top-image');
					var color = $wrapper.attr('data-divider-top-color'); 

					switch (topType) {
						case 'image':
							var $image = $('<div class="divider-image"></div>')
								.attr('data-bg-image', url)
								.attr('data-bg-equal', '1');
							$image.backgrounds('urlToBackground');

							$image.appendTo($topDivider);
							break;

						case 'repeater':
							var $image = $('<div class="divider-image"></div>')
								.attr('data-bg-image', url)
								.attr('data-bg-height', 'image');
							$image.backgrounds('urlToBackground');

							$image.appendTo($topDivider);
							break;


						case 'line': 
							var width = $wrapper.attr('data-divider-top-width'); 
							var $hr   = $('<hr class="divider-hr" />').css({
								'border-top': width + 'px solid ' + color
							});

							$hr.appendTo($topDivider);
							break;

						case 'gradient':
							var duration = $wrapper.attr('data-divider-top-duration'); 
							var $div     = $('<div class="divider-gradient"></div>').css({
								'background': 'linear-gradient(to bottom, '+color+' 0%,rgba(0,0,0,0) 100%)'
							});

							$div.appendTo($topDivider);
							$topDivider.height(duration);
							break;
					}

					$topDivider.prependTo($wrapper);
				}

				// top divider
				if ( bottomType != 'none' && bottomType ) {
					var $bottomDivider = $('<div></div>', {
						'class': 'divider-bottom divider-type_' + bottomType
					});

					var url   = $wrapper.attr('data-divider-bottom-image');
					var color = $wrapper.attr('data-divider-bottom-color'); 

					switch (bottomType) {
						case 'image':
							var $image = $('<div class="divider-image"></div>')
								.attr('data-bg-image', url)
								.attr('data-bg-equal', '1');
							$image.backgrounds('urlToBackground');

							$image.appendTo($bottomDivider);
							break;

						case 'repeater':
							var $image = $('<div class="divider-image"></div>')
								.attr('data-bg-image', url)
								.attr('data-bg-height', 'image');
							$image.backgrounds('urlToBackground');

							$image.appendTo($bottomDivider);
							break;

						case 'line':
							var width = $wrapper.attr('data-divider-bottom-width'); 
							var $hr   = $('<hr class="divider-hr" />').css({
								'border-top': width + 'px solid ' + color
							});

							$hr.appendTo($bottomDivider);
							break;

						case 'gradient':
							var duration = $wrapper.attr('data-divider-bottom-duration'); 
							var $div     = $('<div class="divider-gradient"></div>').css({
								'background': 'linear-gradient(to top, '+color+' 0%,rgba(0,0,0,0) 100%)'
							});

							$div.appendTo($bottomDivider);
							$bottomDivider.height(duration);
							break;
					}

					$bottomDivider.appendTo($wrapper);
				}
			});

			$wrappers.attr('data-dividers-inited', 1);
		}

	};

	/** 
	 * Init method
	 */
	$.fn.dividers = function( method ) {

        if ( methods[method] ) {
          return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
          return methods.init.apply( this, arguments );
        } else {
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.dividers' );
        } 

    };
}));