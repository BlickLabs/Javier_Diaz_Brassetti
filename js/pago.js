$(document).ready(function() {
    $("#submit_btn").click(function() { 
       
	    var proceed = true;
       
		$("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
			$(this).css('border-color',''); 
			if(!$.trim($(this).val())){
				$(this).css('border-color','red'); 
				proceed = false; 
			}
			
			var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
			if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
				$(this).css('border-color','red');  
				proceed = false; 				
			}	
		});
       
        if(proceed) 
        {
			
            post_data = {
		        'name'                  : $('input[name=name]').val(),
                        'email'                 : $('input[name=email]').val(),
                        'phone'                 : $('input[name=phone]').val(),
                        'street'                : $('input[name=street]').val(),
                        'ext_number'            : $('input[name=ext_number]').val(),
                        'int_number'            : $('input[name=int_number]').val(),
                        'colony'                : $('input[name=colony]').val(),
                        'city'                  : $('input[name=city]').val(),
                        'state'                 : $('input[name=state]').val(),
                        'postal_code'           : $('input[name=postal_code]').val(),
                        'token'                 : $('input[name=conektaTokenId]').val()
			};
            
          
            $.post('conekta_card/MyConekta.php', post_data, function(response){  
				if(response.type == 'error'){ //load json data from server and output message     
					output = '<div class="error">'+response.text+'</div>';
				}else{
				    output = '<div class="success">'+response.text+'</div>';
					//reset values in all input fields
					$("#contact_form  input[required=true], #contact_form textarea[required=true]").val(''); 
					$("#contact_form #contact_body").slideUp(); //hide form after success
				}
				$("#contact_form #contact_results").hide().html(output).slideDown();
            }, 'json');
        }
    });
    
    
    $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
        $("#result").slideUp();
    });
});