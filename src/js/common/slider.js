/*  =========================
	Slider UX */

$('.is-slider [data-slick]').slick();

/**
 * Hero area slider
 */
$('.hero-area--bg__slide').height( $('.hero-area--banner').height() );
$('.hero-area--bg__wrap').slick({
	arrows: false,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 5000,
	speed: 1500,
	fade: true,
});