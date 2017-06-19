/*  =========================
	Burger UX */

var burger_id = '.js-burger',
	nav_id = '.js-nav',
	elements = burger_id + ', ' + nav_id;

$(burger_id).on('click', function(e){
	e.preventDefault(e);

	$(burger_id).hasClass('js-active') ? $(elements).removeClass('js-active') : $(elements).addClass('js-active');
});
