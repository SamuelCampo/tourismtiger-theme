/*  =========================
	Hero area */


/**
 * Scroll down arrow
 */
$('.hero-area--nav__down').click(function(){
	var $self     = $(this);
	var $heroArea = $('#hero-area');
	var distance  = $heroArea.height() + $heroArea.offset().top;

	$('html, body').animate({ scrollTop: distance }, 750);
});


/**
 * Styling the border divider
 */
if ( $('.hero-area--divider__repeater').length > 0 ) { 
	var $self    = $('.hero-area--divider__repeater');
	var repeater = $self.attr('data-repeater');

	$self.css('background-image', 'url(' + repeater + ')');
}

if ( $('.hero-area--divider__gradient').length > 0 ) { 
	var $self    = $('.hero-area--divider__gradient');
	var gradient = $self.attr('data-gradient');

	$self.css({
		'background': gradient,
		'background': '-moz-linear-gradient(top, rgba(255,255,255,0) 0%, ' + gradient + ' 100%)',
		'background': '-webkit-linear-gradient(top, rgba(255,255,255,0) 0%, ' + gradient + ' 100%)',
		'background': 'linear-gradient(to bottom, rgba(255,255,255,0) 0%, ' + gradient + ' 100%)',
	});
}