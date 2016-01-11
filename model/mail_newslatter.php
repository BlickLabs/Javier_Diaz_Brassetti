<?php error_reporting(E_ALL);
    // include("../model/conexion.php");
    
    $email = $_POST['email'];
//# Include the Autoloader (see "Libraries" for install instructions)
    require '../vendor/autoload.php';
    use Mailgun\Mailgun;

//# Instantiate the client.
    $mgClient = new Mailgun('key-eb656047b090ea091ef7c5d2fbd83dc5');
    $domain = "sandbox3bfa1334fbee4dcca5b08a9b34b46337.mailgun.org";
  
//
//# Make the call to the client.
    $result = $mgClient->sendMessage($domain, array(
        'from' => 'Javier Diaz Brassetti <postmaster@sandbox3bfa1334fbee4dcca5b08a9b34b46337.mailgun.org>',
        'to' => $email,
        'subject' => 'Gracias por registrate.',
        'text' => 'Hola.

        ¡Gracias por registrarte con nosotros!

        a través del correo electrónico te enviaremos nuestro newsletter para 
        mantenerte informado sobre nuestras promociones y eventos'
    ));
    
    $msg = '¡Gracias por Registrarte!';
echo '<div class="alert alert-success"><p><i class="fa fa-check"></i> '.$msg.'</p></div>';
return true;
//header('Location: ../registro_exitoso.html');


//// Change database 
//mysqli_select_db($con, "$dbname");
//
//    $query = mysqli_query($con, "INSERT INTO User (email,name) 
//VALUES ('$email','$name')");
//
//    mysqli_close($con);    
    
    ?>