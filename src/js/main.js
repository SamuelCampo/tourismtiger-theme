/**
 *	Main.js
 *
 *  @package TourismTiger_Theme
 *  @author  tourismtiger
 */

/* 
	Third parts 
*/
//= ../../bower_components/jquery/dist/jquery.js
//= ../../bower_components/slick-carousel/slick/slick.js
//= ../../bower_components/pickmeup/dist/pickmeup.min.js
//= ../../bower_components/aload/dist/aload.min.js

//= ../../bower_components/wow/dist/wow.min.js
//= ../../bower_components/smoothstate/src/jquery.smoothState.js
// ../../bower_components/jquery-mask-plugin/dist/jquery.mask.js
// ../../bower_components/magnific-popup/dist/jquery.magnific-popup.js


/**
  	Common functions
 */
//= common/accordion.js
//= common/primary-content.js
//= common/popup.js
//= common/hero-area.js
//= common/acf-api.js
//= common/handle-click.js
//= common/gallery-slider.js
//= common/trip-details.js
//= common/wow.js

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

			aload();
			wow.init();
            $(document).primaryContent('init');
			$(document).popup('init');
			$(document).heroArea('init');
			$(document).acfApi('init');
			$(document).controller('addBlacklistClass');

			// Hang click handling to following buttons:
			$('[data-ajax-rows]').handleClick('init');

			// Hang click handling to following buttons:
			$('.trip-details').tripDetails('init');

			// Hang gallery sliders:
			$('.gallery-slider').gallerySlider('init');

			// Product page's tstimonials
			$('.testimonials-carousel').not('[data-inited]').slick({
				arrows: false,
				adaptiveHeight: true,
				dots: true
			}).attr('data-inited', 1);

			// Accordion
			$('.accordion').accordion('init');
		},

		/**
		 * Calls after window loaded
		 */
		onLoad: function () {
            $(window).primaryContent('onLoad');
		},

		initSmoothState: function () {
			var settings = { 
			    anchors: 'a',
			    blacklist: '.wp-link',
		        onStart: {
		            duration: 280, // ms
		            render: function ( $container ) {
		                $container.addClass( 'slide-out' );

		                $( 'body, html' ).animate( {
		                    scrollTop: 0,
		                }, 1000);
		            }
		        },
		        onAfter: function( $container ) {
		            $(window).controller('init');
		            $container.removeClass( 'slide-out' );

		            var $hash = $( window.location.hash );
		            
		            if ( $hash.length !== 0 ) {
		                var offsetTop = $hash.offset().top;

		                $( 'body, html' ).animate( {
		                    scrollTop: ( offsetTop - 60 ),
		                }, { 
		                    duration: 500 
		                } );
		            }
		        }
			};

			$( '#wrapper' ).smoothState( settings );
		},

		/**
		 * Add classes to link 
		 * which shouldn't be smooth-stated
		 */
		addBlacklistClass: function () {
		    $( 'a' ).each( function() {
		    	var $this = $(this);

		        if ( 
		            this.href.indexOf('/wp-admin/') !== -1 || 
		            this.href.indexOf('/wp-login.php') !== -1 || 
		            $this.find('img').closest('.wysiwyg').length > 0 ||
		            $this.attr('data-open-popup') == ''
		        ) {
		            $this.addClass('wp-link');
		        }
		    });
		}
	};

	/** 
	 * Include javascript files
	 * which requery DOM reload
	 */
	$.fn.controller = function( method ) {

        if ( methods[method] ) {
          return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
          return methods.init.apply( this, arguments );
        } else {
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.controller' );
        } 

    };

	$(function(){
		$(window).controller('init');
		$(window).controller('initSmoothState');
		$(window).controller('onLoad');
	});

}));