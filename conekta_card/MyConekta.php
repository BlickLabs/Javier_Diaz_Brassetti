<?php

error_reporting(E_ALL);

require_once("../conekta/lib/Conekta.php");
//include("../model/conexion.php");
Conekta::setLocale('es');
Conekta::setApiKey("key_5scrweicPYN7TsJ87VozVg");

use Mailgun\Mailgun;

//$calle = $_POST['street'];
//$num_ext = $_POST['ext_number'];
//$num_int = $_POST['int_number'];
//$col = $_POST['colony'];
//$city = $_POST['city'];
//$state = $_POST['state'];
//$cod_post = $_POST['postal_code'];
//$amount = $_POST['total'] . "00";

if ($_POST) {

   // $token=$_POST['conektaTokenId'];

    //Sanitize input data using PHP filter_var().
    $amount = filter_var($_POST["total"], FILTER_SANITIZE_NUMBER_INT);
    $user_name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $user_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);
    $street = filter_var($_POST["street"], FILTER_SANITIZE_STRING);
    $ext_number = filter_var($_POST["ext_number"], FILTER_SANITIZE_STRING);
    $int_number = filter_var($_POST["int_number"], FILTER_SANITIZE_STRING);
    $colony = filter_var($_POST["colony"], FILTER_SANITIZE_STRING);
    $city = filter_var($_POST["city"], FILTER_SANITIZE_STRING);
    $state = filter_var($_POST["state"], FILTER_SANITIZE_STRING);
    $postal_code = filter_var($_POST["postal_code"], FILTER_SANITIZE_STRING);
   
    
    

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


    try {
        $charge = Conekta_Charge::create(array(
                    'amount' => '40000',
                    'currency' => 'MXN',
                    'description' => 'Libro',
                    'reference_id' => '9839-wolf_pack',
                    'card' => $_POST['conektaTokenId'],
                    'details' => array(
                        'name' => $user_name,
                        'phone' => $phone,
                        'email' => $user_email,
                        'customer' => array(
                            'corporation_name' => 'Conekta Inc.',
                            'logged_in' => true,
                            'successful_purchases' => 14,
                            'created_at' => 1379784950,
                            'updated_at' => 1379784950,
                            'offline_payments' => 4,
                            'score' => 9
                        ),
                        'line_items' => array(
                            array(
                                'name' => 'Box of Cohiba S1s',
                                'description' => 'Imported From Mex.',
                                'unit_price' => 20000,
                                'quantity' => 1,
                                'sku' => 'cohb_s1',
                                'type' => 'Libto'
                            )
                        )
                    )
        ));
        $toke = $charge->status;
        if ($toke == 'paid') {
           require_once '../model/pago_libro.php';
            require_once '../model/pago_cliente.php';
//           $pertence = 'compra_libro';
//          mysqli_select_db($con, "$dbname");
//          
//            $query = mysqli_query($con, "INSERT INTO Usuarios (Nombre,Email,telefono,calle,num_ext,num_int,colonia,ciudad,del_mun,codigo_postal,pertenece_a) VALUES ('$user_name','$user_email','$phone','$street','$ext_number','$int_number','$colony','$city','$state','$postal_code','$pertence')");
//            mysqli_close($con);
          
            $output = json_encode(array('type' => 'message', 'text' => 'Feliciades tu pago ha sido aprobado,recibirás un correo con más detalles'));
            die($output);
        }
    } catch (Exception $ex) {
        
        $output = json_encode(array(
            'type' => 'error', 
            'text' => 'Lo sentimos tu pago no pudo ser procesado,Intentalo de nuevo.',
            'error' => $ex->getMessage()));
        die($output);
    }
}
?>