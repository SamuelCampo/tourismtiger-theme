/*  =========================
    Init SmoothState */

function addBlacklistClass() {
    $( 'a' ).each( function() {
        if ( 
            this.href.indexOf('/wp-admin/') !== -1 || 
            this.href.indexOf('/wp-login.php') !== -1 || 
            $(this).find('img').closest('.wysiwyg').length > 0 ||
            $(this).attr('data-open-popup') == ''
        ) {
            $(this).addClass('wp-link');
        }
    });
}

$( function() {

	addBlacklistClass();

	var settings = { 
	    anchors: 'a',
	    blacklist: '.wp-link',
        onStart: {
            duration: 280, // ms
            render: function ( $container ) {
                $container.addClass( 'slide-out' );
            }
        },
        onAfter: function( $container ) {
            $container.removeClass( 'slide-out' );
            addBlacklistClass();

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
