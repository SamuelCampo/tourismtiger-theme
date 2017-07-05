/*  =========================
	Open popup */

$('[data-open-popup]').on('click', function(e){
	if ( $(window).width() > 768 ) {
		e.preventDefault();

		var $button   = $(this);
		var reference = $button.attr('href');

		$('body').append('<a href="javascript:" class="iframe-popup__close"></a>');
		$('body').append('<iframe src="'+reference+'" id="iframe-popup" class="iframe-popup">Loading...</iframe>');

		$('.iframe-popup__close').on('click', function() {
			$('.iframe-popup__close').detach();
			$('.iframe-popup').detach();

			return false;
		});

	} else {
		document.location.href = reference;
	}

	return false;
});