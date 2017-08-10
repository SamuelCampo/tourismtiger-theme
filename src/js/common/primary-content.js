/*  =========================
	Primary content */

(function(factory) {
    'use strict';
    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory);
    } else if (typeof exports !== 'undefined') {
        module.exports = factory(require('jquery'));
    } else {
        factory(jQuery);
    }

}(function($) {

	var methods = {

		/**
		 * Handle each section layout
		 */
		init: function () {
			var $primaryContent = $('.primary-content').not('[data-inited]');

			$primaryContent.each(function(){
				var $self = $(this);


				/**
				 * Set section background image
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

				            $self.animate({
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
				 * Set dividers' background images
				 */
				var $divider = $self.find('[data-image]');
				if ( $divider.length > 0 ) {
					$divider.each(function(){
						var $that = $(this);
						var url   = $that.attr('data-image');
						var attr  = 'url('+url+')';
				        var img   = new Image();

				        // Set divider height
				        img.onload = function(){

				            $that.animate({
				              'height': img.height, 
				            }, 100);
						};

					    // assign url to new image 
				        img.src = url;

						// Set background image
			            $that.css('background-image', attr);
					});
				}

				/**
				 * Image component
				 */
				var $images = $self.find('.image-wrap');
				$images.each(function(){
					var $wrap  = $(this);
					var $image = $wrap.find('img');

					if ($wrap.hasClass('shape_circle') || $wrap.hasClass('shape_square')) {
						var height = $wrap.height();
						var width  = $wrap.width();

						if (height > width) {
							$wrap.height(width);
						} else {
							$wrap.width(height);
						}

						$image.css({
							'position': 'absolute',
							'left': '50%',
							'right': '50%',
							'transform': 'translate(-50%, 50%)'
						});
					}
				});

				/**
				 * Add indicator-class to avoid reworking 
				 * that file during ajax request
				 */
				$self.attr('data-inited', 1);
			});




			/**
			 * Set rows' backgrounds
			 */
			var $rows = $('.primary-content').find('.rows');
			if ($rows.children().length > 0) {
				var $row = $rows.children();

				/**
				 * Handle each child-row
				 */
				$row.each(function(){
					$(this).primaryContent( 'initRow' );
				});
			}
		},

		/**
		 * Init rows' functions
		 */
		initRow: function () {
			var $row = $(this).not('[data-inited]');
			
			if ($row.length > 0) {
				/**
				 * Build carousel
				 */
				if ($row.hasClass('layout_carousel')) {
					var scrollSlides   = +$row.attr('data-scroll') || 1;
					var showSlides     = +$row.attr('data-columns') || 1;
					var doesShowDots   = $row.attr('data-dots') || false;
					var arrowsType     = $row.attr('data-arrows-type') || 'auto';
					var prevArrowData  = '';
					var nextArrowData  = '';
					var arrowsColor    = $row.attr('data-arrows-color') || '#fff';
					var arrowsBoolean  = false;

					// Set arrows 
					switch (arrowsType) {
						case 'auto':
							arrowsBoolean = true;
							prevArrowData = '<img width="20" src="'+global_var.theme_url+'/assets/img/slider/arrow-left.png">';
							nextArrowData = '<img width="20" src="'+global_var.theme_url+'/assets/img/slider/arrow-right.png">';
							break;

						case 'custom':
							arrowsBoolean = true;
							prevArrowData = '<div class="slick-control slick-control-prev" style="color:'+arrowsColor+';"></div>';
							nextArrowData = '<div class="slick-control slick-control-next" style="color:'+arrowsColor+';"></div>';
							break;
					}	

					// Dots
					if ( doesShowDots == 'true' ) {
						doesShowDots = true;
					}

					// Media default settings
					var laptopSettings  = {
						slidesToShow: showSlides,
						slidesToScroll: scrollSlides,
					};

					var padSettings     = {
						slidesToShow: showSlides,
						slidesToScroll: scrollSlides,
					};

					var padMiniSettings = {
						slidesToShow: showSlides,
						slidesToScroll: scrollSlides,
					};

					var mobileSettings  = {
						slidesToShow: showSlides,
						slidesToScroll: scrollSlides,
					};

					// Set media queries 
					switch (showSlides) {
						case 1:
							break;

						case 2:
							mobileSettings = {
								slidesToShow: 1,
								slidesToScroll: 1,
							};
							break;

						case 3:
							mobileSettings = {
								slidesToShow: 1,
								slidesToScroll: 1,
							};
							break;

						case 4:
							padMiniSettings = {
								slidesToShow: 2,
								slidesToScroll: 2,
							};
							mobileSettings = {
								slidesToShow: 1,
								slidesToScroll: 1,
							};
							break;

						case 5:
							laptopSettings = {
								slidesToShow: 4,
								slidesToScroll: 4,
							};
							padSettings    = {
								slidesToShow: 3,
								slidesToScroll: 3,
							};
							padMiniSettings = {
								slidesToShow: 2,
								slidesToScroll: 2,
							};
							mobileSettings = {
								slidesToShow: 1,
								slidesToScroll: 1,
							};
							break;

						case 6:
							laptopSettings = {
								slidesToShow: 5,
								slidesToScroll: 5,
							};
							padSettings    = {
								slidesToShow: 4,
								slidesToScroll: 4,
							};
							padMiniSettings = {
								slidesToShow: 2,
								slidesToScroll: 2,
							};
							mobileSettings = {
								slidesToShow: 1,
								slidesToScroll: 1,
							};
							break;
					}

					// Laptop slick settings
					var laptop = {
						breakpoint: 1150,
						settings: laptopSettings
					};

					// iPad slick settings
					var pad = {
						breakpoint: 992,
						settings: padSettings
					};

					// iPad Mini slick settings
					var padMini = {
						breakpoint: 768,
						settings: padMiniSettings
					};

					// Mobile slick settings
					var mobile = {
						breakpoint: 568,
						settings: mobileSettings
					};

					// General slick settings
					var values = {
						infinite: true,
						adaptiveHeight: true,
						dots: doesShowDots,
						slidesToShow: showSlides,
						slidesToScroll: scrollSlides,
						arrows: arrowsBoolean,
						prevArrow: '<button type="button" class="slick-prev">'+prevArrowData+'</button>',
						nextArrow: '<button type="button" class="slick-next">'+nextArrowData+'</button>',
						focusOnSelect: false,
							responsive: [
								laptop,
								pad,
								padMini,
								mobile
							]
					};

					// Init slick slider
					$row.slick(values);
				}

				$row.attr('data-inited', 1);
			}
		},

		/**
		 * After onload
		 * @return {[type]} [description]
		 */
		onLoad: function () {
			var $wrapper = $('.primary-content__wrapper');

            try {
                $wrapper.acfApi('loadAjax');
            } catch (e) {
                console.error('Load ajax error: ' + e); // pass exception object to error handler
            }
		},
	};

	/** 
	 * Init method
	 */
	$.fn.primaryContent = function( method ) {

        if ( methods[method] ) {
          return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
          return methods.init.apply( this, arguments );
        } else {
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.primaryContent' );
        } 

    };

}));