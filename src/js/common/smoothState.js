/*  =========================
    Init SmoothState */

$(function() {
    'use strict';

	var settings = { 
	    anchors: 'a',
	    blacklist: '.wp-link',
        cacheLength: 5,
        prefetch: true,
        onStart: {
            duration: 300, // ms
            render: function ( $container ) {
                $container.addClass( 'slide-out' );
            }
        },
        onReady:  function () {
            $controller.controller('init');
        },
        onAfter: function( $container ) {
            $container.removeClass( 'slide-out' );

            var $hash = $( window.location.hash );
            if ( $hash.length !== 0 ) {
                var offsetTop = $hash.offset().top;

                $( 'body, html' ).animate( {
                    scrollTop: ( offsetTop - 60 ),
                }, { 
                    duration: 280 
                } );
            }
        }
	};

	$( '#wrapper' ).smoothState( settings );
} );
