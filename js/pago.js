
$(document).ready(function() {    
    $("#contact_form  input[required=true], #contact_form input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
        $("#result").slideUp();
    });
});