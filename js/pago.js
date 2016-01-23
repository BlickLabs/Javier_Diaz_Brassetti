
$(document).ready(function() {

	// process the form
	$('form').submit(function(event) {

		$('.form-group').removeClass('has-error'); // remove the error class
		$('.help-block').remove(); // remove the error text

		
		// get the form data and get this data using jQuery
		var formData = {
			'name' 				: $('input[name=name]').val(),
                        'email' 			: $('input[name=email]').val(),
                        'phone' 		        : $('input[name=phone]').val(),
                        'street' 		        : $('input[name=street]').val(),
                        'ext_number' 		        : $('input[name=ext_number]').val(),
                        'int_number' 		        : $('input[name=int_number]').val(),
                        'colony' 		        : $('input[name=colony]').val(),
                        'city' 				: $('input[name=city]').val(),
                        'state' 			: $('input[name=state]').val(),
			'postal_code' 	                : $('input[name=postal_code]').val(),
                        'token' 	                : $('input[name=conektaTokenId]').val()
		};

		// procesamos el formulario
		$.ajax({
			type 		: 'POST',  // define the type of HTTP  to use (POST)
			url 		: 'conekta_card/process.php', // the url where we want to POST
			data 		: formData, // data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true
		})
			// using the done promise callback
			.done(function(data) {

				// log data to the console so we can see
				console.log(data); 

				// here we will handle errors and validation messages
				if ( ! data.success) {
					
					// handle errors for name 
					if (data.errors.name) {
						$('#name-group').addClass('has-error'); // add the error class to show red input
						$('#name-group').append('<div class="help-block">' + data.errors.name + '</div>'); // add the actual error message under our input
					}

					// handle errors for email 
					if (data.errors.email) {
						$('#email-group').addClass('has-error'); // add the error class to show red input
						$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
					}

				

				} else {

					// ALL GOOD! just show the success message!
					$('form').append('<div class="alert alert-success">' + data.message + '</div>');

					

				}
			})

			// using the fail promise callback
			.fail(function(data) {

				// show any errors
				// best to remove for production
				console.log(data);
			});

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});
