<?php
if($_POST)
{
	
	
	//Sanitize input data using PHP filter_var().
	$user_name		= filter_var($_POST["name"], FILTER_SANITIZE_STRING);
	$user_email		= filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$phone  	        = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);
	$street	                = filter_var($_POST["street"], FILTER_SANITIZE_STRING);
	$ext_number		= filter_var($_POST["ext_number"], FILTER_SANITIZE_STRING);
	$int_number		= filter_var($_POST["int_number"], FILTER_SANITIZE_STRING);
        $colony 		= filter_var($_POST["colony"], FILTER_SANITIZE_STRING);
        $city		        = filter_var($_POST["city"], FILTER_SANITIZE_STRING);
        $state		        = filter_var($_POST["state"], FILTER_SANITIZE_STRING);
        $postal_code		= filter_var($_POST["postal_code"], FILTER_SANITIZE_STRING);
        
	
	if (empty($_POST['name']))
		$errors['name'] = 'El Nombre es Necesario.';
        
        if (empty($_POST['email']))
		$errors['email'] = 'Email Requerido.';

	if (empty($_POST['phone']))
		$errors['phone'] = 'Numero Telefonico Requrido.';
        
        if (empty($_POST['street']))
		$errors['street'] = 'Ingresa El nombre de la calle.';
        
        if (empty($_POST['ext_number']))
		$errors['ext_number'] = 'Ingresa el Número de tu domicilio.';
        
        if (empty($_POST['colony']))
		$errors['colony'] = 'Ingresa el nombre de la colinia.';
        
        if (empty($_POST['colony']))
		$errors['colony'] = 'Ingresa el nombre de la colinia.';
        
        if (empty($_POST['city']))
		$errors['city'] = 'Ingresa el nombre de la ciudad donde vives.';
        
        if (empty($_POST['state']))
		$errors['state'] = 'Ingresa el nombre del la ciudad o estado donde vives.';

        if (empty($_POST['postal_code']))
		$errors['postal_code'] = 'Ingresa el número de código postal';
	
	
	if(!$send_mail)
	{       
                $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .'Feliciades tu pago ha sido aprobado,recibirás un correo con más detalles'));
		die($output);
		
	}else{
		
		$output = json_encode(array('type'=>'error', 'text' => 'Lo sentimos tu pago no pudo ser procesado.'));
		die($output);
	}
}
?>