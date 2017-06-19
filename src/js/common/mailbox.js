/*  =========================
	Mailbox */

$(function() {

	$('#contact-form').submit(function () {
	    var valid  = true;
	    var $form   = $(this);
		var $input = $form.find('input.js-send-data');
        var data   = { action: 'examplemail' };

	    $input.map(function(){
	        var $field = $(this);
            var name   = $field.attr('name');
            var value  = $field.val();

	        if ( value.length < 1 ) {
	            $field.addClass('error');
	            valid = false;
	        } else {
	            $field.removeClass('error');
                data[name] = value;
	        }
	    });

	    if ( valid ) { 
            $.ajax({ 
                method: 'POST', 
                url: myajax.url, 
                data: data,  
                beforeSend: function() { 
                    $form.find('button').attr('disabled', 'disabled');
                    var img = '<div id="done" class="btn-loader"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>';
                    $form.find('button').append(img); 
                },
                complete: function() {
                    $form.find('button').prop('disabled', false); 
                    $form.find('input, textarea').val('');
                    $('#done').detach();  
                    // document.location.href = 'http://example.com';
                    // or
                    // form.find('.contact-form__thanks').fadeIn();
                }                          
            }); 
        } 

        return false;
	});

    
});