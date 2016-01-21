<?php error_reporting(E_ALL);
include("../model/conexion.php");
use Mailgun\Mailgun;

require '../vendor/autoload.php';
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
$asunto = 'Un Cliente A aquirido TE LO DIGO A TI ';

/*JDB */
$api_key = 'key-a60ceca94c5a2b84c71aac83a3f247b3';
$api_domain = 'sandbox20d96bd94fad442fac6ffb4453e64a25.mailgun.org';
$send_to = $email;

////# Include the Autoloader (see "Libraries" for install instructions)
//    require '../vendor/autoload.php';
//    use Mailgun\Mailgun;

//# Instantiate the client.
    $mgClient = new Mailgun('key-a60ceca94c5a2b84c71aac83a3f247b3');
    $domain = "sandbox20d96bd94fad442fac6ffb4453e64a25.mailgun.org";

//
//# Make the call to the client.
    $result = $mgClient->sendMessage($domain, array(
        'from' => 'Javier Diaz Brassetti <postmaster@sandbox20d96bd94fad442fac6ffb4453e64a25.mailgun.org>',
        'to' => $send_to,
        'subject' => 'Gracias por adquirir el libro  Te Lo Digo a Ti',
        'text' => 
        
        'Hola ' . $name . '
            
            
        Gracias por Adquirir Nuestro Libro
        
        ya tenemos tus datos y lo más pronto posible te haremos llegar tu libro'
    ));
    
    
    

?>