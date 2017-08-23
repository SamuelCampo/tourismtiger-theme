/*  =========================
	gForm controller */

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

	// todo load these scripts
    var CalculateSig = function CalculateSig(stringToSign, privateKey){
        //calculate the signature needed for authentication
        var hash = CryptoJS.HmacSHA1(stringToSign, privateKey);
        var base64 = hash.toString(CryptoJS.enc.Base64);
        return encodeURIComponent(base64);
    };

    /**
     * This function makes AJAX request to gForm API
     * Also there are actions which happen after AJAX
     */ 
    function submitGForm (url, values_json, $form) {
	    $.post(url, values_json, function(data) {

	    	// Responce
	        console.log(data);

	        /**
	         * Redirect
	         */
	        if (typeof data === 'string') {
	            document.location.href = data.split('rel="canonical" href="')[1].split('" />')[0];
	        }

	        /**
	         * Show confirmation message if it's exist
	         */
	        if (data.response) {
	        	if (data.response.is_valid == true) {

	        		// Show confirmation
		            $form
		            	.hide()
		            	.parent()
		            	.append(data.response.confirmation_message)
		            	.find('.gform_confirmation_message')
		            	.addClass('wysiwyg');

		            //Scroll to confirmation
		            $('body, html').animate({
		            	scrollTop: $('.gform_anchor').offset().top
		            });

		            $('.slick-slider').slick('setOption', 'height', null, true);
	        	} else {
	        		var msg        = data.response.validation_messages;
	        		var theHighest = 0; // this is anchor where to scroll

	        		// Remove spinner from submit button
	        		$form.find('[type="submit"]').handleClick('toggleSpiner');

	        		// Loop each error message
	        		for (var id in msg) {
	        			var $invalidField = $form.find('[name="input_'+id+'"]');
	        			var $invalidWrap  = $invalidField.closest('.gform-field');
	        			var $notification = $('<div class="gform-error">'+msg[id]+'</div>');
	        			var wrapTopOffset = $invalidWrap.offset().top;
	        			var wrapWidth     = $invalidWrap.width();

	        			// Show error message
	        			$invalidWrap
	        				.append($notification)
	        				.find('.gform-error')
	        				.width(wrapWidth)
	        				.slideDown();

	        			if (wrapTopOffset < theHighest || theHighest === 0)
	        				theHighest = wrapTopOffset;
	        		}

	        		// Scroll to the highest error message
	        		$('body, html').animate({
	        			scrollTop: theHighest - 50
	        		});

	        		$('.slick-slider').slick('setOption', 'height', null, true);
	        	}
	        }	
	    });

	    return false;
    }

	/**
	 * Methods to $.gForm()
	 */
	var methods = {

		init: function () {

			var $forms = $(this).not('[data-inited]');

			if ($forms.length > 0) {

				/**
				 * Actions over $form
				 * - Stylize specific fields
				 * - Set mask to time-field
				 * - Set mask to date
				 * - Set mask to phone
				 * - Route actions
				 * - On Submit action
				 * - Conditionalize
				 * - Set data-init to the form
				 */
				$forms
					.find('select, input[type="radio"], input[type="checkbox"], input[type="file"]')
					.styler();

				$forms
					.find('.type_time')
					.find('input')
					.mask('00');

				$forms
					.find('.type_date')
					.find('input')
					.mask('00/00/0000');

				$forms
					.find('.type_phone')
					.find('input')
					.mask('(000) 000-0000');

				$forms.on('click', '.gform-pagination__btn', function (e) {
					e.preventDefault();
					$(this).gForm('routePage');
					return false;
				});

				$forms.submit(function (e) {
					e.preventDefault();
					var $form = $(this);

					$form.find('[type="submit"]').handleClick('toggleSpiner');
					$form.gForm('submit');

					return false;
				});

				$forms.gForm('conditionalize');

				$forms.on('change', 'input[type="checkbox"], input[type="radio"], select', function () {
					$forms.gForm('conditionalize');
				});

				$forms.attr('data-inited', 1);
			}
		},

		/**
		 * Submit method does following things:
		 * - Validate data
		 * - Grab data
		 * - Send data
		 */
		submit: function () {

            /**
             * DOM Objects
             */
            var $form         = $(this);
            var $body         = $form.find('.gform-body');
            var $fields       = $body.find('.gform-field');
            var $reCaptcha    = $body.find('.g-recaptcha');
            var $notifyGroups = $form.find('.gform-notify_group'); // todo: create on frontend

            /**
             * Data variable is used 
             * for AJAX requests in Wordpress
             */
            var values      = {};
            var inputValues = {};
            var formId      = $form.attr('id').split('-')[1];


            $form.find('.gform-error').detach();

            /**
             * Loop user fields
             */
            if ($fields.length > 0) {
                $fields.each(function(){
                    var $item           = $(this);
                    var label           = $item.attr('data-label');

                    // Default type of handle
                    var isHandleDefault = (
                    	   $item.hasClass('type_text') 
                    	|| $item.hasClass('type_phone') 
                    	|| $item.hasClass('type_select') 
                    	|| $item.hasClass('type_multiselect') 
                    	|| $item.hasClass('type_website') 
                    	|| $item.hasClass('type_number')
                    	|| $item.hasClass('type_textarea')
                    );

                    // Choices type of handle
                    var isHandleChoices = (
                    	   $item.hasClass('type_checkbox') 
                    	|| $item.hasClass('type_radio') 
                    );

                    // Choices type of handle
                    var isHandleMultiply = (
                    	   $item.hasClass('type_name') 
                    	|| $item.hasClass('type_address') 
                    	|| $item.hasClass('type_time') 
                    	|| $item.hasClass('type_email') 
                    );

                    // Start handling
                    if (isHandleDefault) {
                    	var $input   = $item.find('input, textarea, select');
                        var name     = $input.attr('name');
                        var value    = $input.val();

                        inputValues[name] = value;
                    }

                    // Start choices handling
                    if (isHandleChoices) {
                    	var isOtherChoice = $item.find('[data-more="1"]').length > 0;

                    	var $checked      = $item.find('input:checked');
                    	var is_checked    = $checked.length > 0;

                    	// Whether this choices group 
                    	// has additional input and somethng checked
                    	if (isOtherChoice && is_checked) {
                    		var isCheckedMore = $checked.attr('data-more') == '1';

                    		// Whether checked additional input
                    		if (isCheckedMore)
                    			$checked = $item.find('input[type="text"]');
                    	}

                    	// Time to setting inputVariables
                    	if (typeof $checked !== 'object') {
                    		var name          = $checked.attr('name');
                    		var value         = $checked.val();
                        	inputValues[name] = value;
                        } else {
                        	var arrSize = $checked.length;

                            /**
                             * Get variables of each DOM item
                             */
                            for (var counter = 0; counter < arrSize; counter++) {
                        		var name          = $checked.eq(counter).attr('name');
                        		var value         = $checked.eq(counter).val();
                                inputValues[name] = value;
                            }
                        }
                    }

                    // Start handling
                    if (isHandleMultiply) {
                    	var $inputs  = $item.find('input, select');

                    	if (typeof $inputs !== 'object') {
	                        var name     = $input.attr('name');
	                        var value    = $input.val();

	                        inputValues[name] = value;
                    	} else {
                        	var arrSize = $inputs.length;

                            /**
                             * Get variables of each DOM item
                             */
                            for (var counter = 0; counter < arrSize; counter++) {
                        		var name          = $inputs.eq(counter).attr('name');
                        		var value         = $inputs.eq(counter).val();
                                inputValues[name] = value;
                            }
                    	}
                    }
                });
            }

            /**
             * Check reCaptcha is it's exist
             */
            if ($reCaptcha.length > 0) {
                var captcha = grecaptcha.getResponse();

                if(!captcha.length){
                    e.preventDefault();
                    console.warn('False captcha');
                    return false;
                } 
            }

            /**
             * Input values for submitting
             */
            values.input_values = inputValues;
            var values_json     = JSON.stringify(values);

            console.log(values);

            //set variables
            var d               = new Date;
            var expiration      = 3600; // 1 hour,
            var unixtime        = parseInt(d.getTime() / 1000);
            var future_unixtime = unixtime + expiration;
            var publicKey       = global_var.gf_public_key;
            var privateKey      = global_var.gf_private_key;
            var method          = "POST";
            var route           = "/gravityformsapi/forms/"+formId+"/submissions";

            var stringToSign = publicKey + ":" + method + ":" + route + ":" + future_unixtime;
            var sig = CalculateSig(stringToSign, privateKey);
            var url = global_var.url + route + '?api_key=' + publicKey + '&signature=' + sig + '&expires=' + future_unixtime;

            // Ok, let's go to AJAX MAA-FUCKA!!!
            submitGForm(url, values_json, $form);

            return false;
		},

		/** 
		 * Handle button which 
		 * was clicked to route 
		 * to another form page
		 */
		routePage: function () {
			var $btn      = $(this);
			var goTo      = +$btn.attr('data-goto') - 1; // get id of page where to go

			var $body     = $btn.closest('.gform-body');
			var $theOne   = $body.children().eq(goTo);

			$btn.animate({ 'opacity': 0 }, 300);

			$theOne
				.animate({
					'opacity': 1
				}, 300)
				.css({
					'pointer-events': 'auto'
				}, 300);

			$('body, html').animate({
				scrollTop: ($theOne.offset().top) - 50
			}, 300);
		},

		conditionalize: function () {
			var $form          = $(this);
			var $conditionaled = $form.find('[data-conditional-type]');

			$conditionaled.each(function () {
				var $field       = $(this);
				var type         = $field.attr('data-conditional-type');
				var fieldId      = $field.closest('[data-id]').attr('data-id');
				var $fieldWrap   = $form.find('[data-id="' + fieldId + '"]');
				var id           = $field.attr('data-conditional-id');
				var operator     = $field.attr('data-conditional-operator');
				var value        = $field.attr('data-conditional-value');
				var $related     = $form.find('[data-id="' + id + '"]');
				var relatedValue = $related.find('input, textarea, select').val();
				var $inputs      = $field.find('input, textarea, select');

				switch (operator) {
					case 'is':
						operator = true;
						break;

					default:
						operator = true;
						break;
				}

				var conditional = (relatedValue == value) === operator;

				if (conditional) {
					$fieldWrap.show().removeClass('js-hidden');

					if ($inputs.is('select') || $inputs.is('[type="radio"]') || $inputs.is('[type="checkbox"]'))
						$inputs.styler();
				} else {
					$fieldWrap.hide().addClass('js-hidden');
					$inputs.val('');

					if ($inputs.is('select') || $inputs.is('[type="radio"]') || $inputs.is('[type="checkbox"]'))
						$inputs.styler('destroy');
				}

				$('.slick-slider').slick('setOption', 'height', null, true);
			});
		}
	};

	/** 
	 * Init method
	 */
	$.fn.gForm = function( method ) {

        if ( methods[method] ) {
          return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
          return methods.init.apply( this, arguments );
        } else {
          $.error( 'Method named ' +  method + ' isn\'t exist within jQuery.gForm' );
        } 

    };
}));