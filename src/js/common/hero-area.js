/*  =========================
	Hero area */

/**
 * Scroll down arrow
 */
$('.hero-area--nav__down').click(function(){
	var $self     = $(this);
	var $heroArea = $('#hero-area').find('.hero-area--banner');
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


/**
 * Styling overlay
 */
if ( $('.hero-area--overlay__color').length > 0 ) {
	var $self = $('.hero-area--overlay__color');
	var color = $self.attr('data-color');

	$self.css('background-color', color);
}


/**
 * Add style number class to Calendar picker 
 */
var heroAreaStyle = $('#hero-area').attr('data-style');


/**
 * Searchbox
 */
var now = new Date;

pickmeup('.hero-area--search__single', {
	position       : 'bottom',
	hide_on_select : true,
	min            : now,
	class_name     : heroAreaStyle
});

pickmeup('.hero-area--search__start', {
	position       : 'bottom',
	hide_on_select : true,
	min            : now,
	class_name     : heroAreaStyle
});

pickmeup('.hero-area--search__end', {
	position       : 'bottom',
	hide_on_select : true,
	min            : now,
	class_name     : heroAreaStyle
});


/**
 * Generate HR lines
 */
if ( $('.hero-area--hr').length > 0 ) { 
	var $heroAreaHr = $('.hero-area--hr');
	var fullWidth   = $('.hero-area--content').width();

	$heroAreaHr.map(function(){
		var $self = $(this);
		var color = $self.attr('data-color');
		var width = $self.attr('data-width') * fullWidth;

		$self.css({
			'color': color,
			'width': width
		});
	});
}

/**
 * Hero area slider
 */
if ($('.hero-area--bg__wrap').length > 0) {
	$('.hero-area--bg__slide').height( $('.hero-area--banner').height() );
	$('.hero-area--bg__wrap').slick({
		arrows: false,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 5000,
		speed: 1500,
		fade: true,
	});
}