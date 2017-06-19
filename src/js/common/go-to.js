/*  =========================
	Anchor UX */


$('.go-to').click( function() { 

	var $href  = $(this).attr('href'); 

    if ( $href.length != 0 ) { 
    	var target = $href.offset().top;

    	$('html, body').animate({ scrollTop: target }, 500); 
    }

    return false; 
});