<?php error_reporting(E_ALL);
include("../model/conexion.php");
use Mailgun\Mailgun;

require '../vendor/autoload.php';
$cantidad=$_POST['cantidad'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$calle=$_POST['street'];
$num_ext=$_POST['ext_number'];
$num_int=$_POST['int_number'];
$colonia=$_POST['colony'];
$ciudad=$_POST['city'];
$estado=$_POST['state'];
$codigo_postal=$_POST['postal_code'];
$asunto = 'Un Cliente A aquirido El Libro Te Lo Digo A Ti ';

/* Desarrollo */
$api_key = 'key-eb656047b090ea091ef7c5d2fbd83dc5';
$api_domain = 'sandbox3bfa1334fbee4dcca5b08a9b34b46337.mailgun.org';
$send_to = 'contacto@javierdiazbrassetti.com';

////# Include the Autoloader (see "Libraries" for install instructions)
//    require '../vendor/autoload.php';
//    use Mailgun\Mailgun;

//# Instantiate the client.
    $mgClient = new Mailgun('key-eb656047b090ea091ef7c5d2fbd83dc5');
    $domain = "sandbox3bfa1334fbee4dcca5b08a9b34b46337.mailgun.org";

//
//# Make the call to the client.
    $result = $mgClient->sendMessage($domain, array(
        'from' => $email,
        'to' => $send_to,
        'subject' => 'Un Cliente a  adquirido el Libro Te Lo Digo a Ti',
        'text' => 
        
        'Hola equipo de Javier Díaz .

        ' . $name . ' a adquirido el libro Te Lo Digo a Ti
            
        Los datos del Cliente son los siguientes
        
        Nombre del cliente: ' . $name . '
        Correo electrónico: ' . $email. '
        Telefono: ' . $phone. '
        Número de Libros adquiridos: '.$cantidad.'    
            
        Direccion:
        
        Calle: ' . $calle. '
        Número Exterior: ' . $num_ext. '
        Número Interior: ' . $num_int. '
        Colonia: ' . $colonia. '      
        Ciudad: '.$ciudad.'    
        Delegación o Municipio: ' . $estado. '  
        Código Postal: ' . $codigo_postal. '  
        '
    ));
    
    
    

?>