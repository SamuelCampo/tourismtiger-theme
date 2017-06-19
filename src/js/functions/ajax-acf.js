/*  =========================
	AJAX ACF */

// TODO: Test variables


$.fn.ajax_acf_load = function() {
  
    var $field        = $(this);
	var id            = $field.attr('id');
	var counter       = +$field.data('data-ajax-count');
	var field_name    = $field.data('data-ajax-field');
	var field_offset  = 1;
	var more          = true;
	var field_total   = 1;

	if ( counter > 0 && $(id).length === 1 ) {
		conter -= 1; 
		$field.data('data-ajax-count', conter);

		$.post(
			myajax.url, {
			  'action': 'ajax_acf_load',
			  'post_id': myajax.post_id,
			  'offset': field_offset,
			  'nonce': myajax.ajaxnonce,
			  'field': field_name
			},
			function (json) {
			  $(id).append(json['content']);

			  field_offset = json['offset'];

			  $(document).initWpKit();

			  if (json['more']) {
			    $(id).ajax_acf_load();
			  }
			},
			'json'
		);

	} else {
		return false;
	} 

}