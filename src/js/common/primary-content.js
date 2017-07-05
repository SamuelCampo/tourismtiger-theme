/*  =========================
	Primary content */

var $primaryContent = $('.primary-content');

$primaryContent.each(function(){
	var $self = $(this);

	/**
	 * Check whether that section wasn't loaded
	 */
	if (!$self.hasClass('js-loaded')) {


		/**
		 * Set background image
		 */
		if ($self.attr('data-section-image')) {
			var url  = $self.attr('data-section-image');
			var attr = 'url('+url+')';
	        var img = new Image();


			/**
			 * Expanable image
			 */
			if ($self.attr('data-section-expanded') == '1') {
		        img.onload = function(){
		            var img_percent = img.height / img.width * 100;
		            var img_height = screen.width / 100 * img_percent;

		            $self.css('background-image', attr).animate({
		              'min-height': img_height, 
		            }, 100);
				};
		    }

		    // assign url to new image 
	        img.src = url;

			// Set background image
            $self.css('background-image', attr);
		}


		/**
		 * Generate google maps background
		 */
		if ($self.attr('data-section-lat') && $self.attr('data-section-lng')) {
			var lat = $self.attr('data-section-lat');
			var lng = $self.attr('data-section-lng');

			$self.prepend("<div class='acf-map primary-content--bg_map'><div class='marker' data-lat='"+lat+"' data-lng='"+lng+"'></div></div>");
		}

		/**
		 * Add indicator-class to avoid reworking 
		 * that file during ajax request
		 */
		$self.addClass('js-loaded');
	}
});