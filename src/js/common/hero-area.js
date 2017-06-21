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