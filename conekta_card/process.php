<?php

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data

// validate the variables ======================================================
	// if any of these variables don't exist, add an error to our $errors array

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

// return a response ===========================================================

	// if there are any errors in our errors array, return a success boolean of false
	if ( ! empty($errors)) {

		// imprimimos los mensajes de error
		$data['success'] = false;
		$data['errors']  = $errors;
                $data['message'] = 'error!';
	} else {

		
		// mostramos el mensaje de exito
		$data['success'] = true;
		$data['message'] = 'Success!';
             
                
	}

	// return all our data to an AJAX call
	echo json_encode($data);