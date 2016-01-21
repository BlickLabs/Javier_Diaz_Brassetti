<?php error_reporting(E_ALL);

require_once("../conekta/lib/Conekta.php");
include("../model/conexion.php");
Conekta::setLocale('es');
Conekta::setApiKey("key_5scrweicPYN7TsJ87VozVg");
use Mailgun\Mailgun;
//$scalle=$_POST['street'];
//$num_ext=$_POST['ext_number'];
//$num_int=$_POST['int_number'];
//$col=$_POST['colony'];
//$city=$_POST['city'];
//$state=$_POST['state'];
//$cod_post=$_POST['postal_code'];

try{
    $charge = Conekta_Charge::create(array(
  'amount'=> 30000,
  'currency'=>'MXN',
  'description'=> 'Libro',
  'reference_id'=> '9839-wolf_pack',
  'card'=> $_POST['conektaTokenId'],
  'details'=> array(
    'name'=> $_POST['card_name'],
    'phone'=> $_POST['phone'],
    'email'=> $_POST['email'],
    'customer'=> array(
      'corporation_name'=> 'Conekta Inc.',
      'logged_in'=> true,
      'successful_purchases'=> 14,
      'created_at'=> 1379784950,
      'updated_at'=> 1379784950,
      'offline_payments'=> 4,
      'score'=> 9
    ),
    'line_items'=> array(
      array(
        'name'=> 'Box of Cohiba S1s',
        'description'=> 'Imported From Mex.',
        'unit_price'=> 20000,
        'quantity'=> 1,
        'sku'=> 'cohb_s1',
        'type'=> 'food'
      )
    )
   )
  
    ));
  $toke=$charge->status;
  if ($toke=='paid'){
   require_once '../model/pago_libro.php';
   require_once '../model/pago_cliente.php';
   $pertence= 'compra_libro';
//Change database 
mysqli_select_db($con, "$dbname");
mysql_set_charset('utf8');


$query = mysqli_query($con, "INSERT INTO Usuarios (Nombre,Email,telefono,calle,num_ext,num_int,colonia,ciudad,del_mun,codigo_postal,pertenece_a) VALUES ('$name','$email','$phone','$calle','$num_ext','$num_int','$colonia','$ciudad','$estado','$codigo_postal','$pertence')");
mysqli_close($con); 
   header('Location: ../pago_exitoso.html');  
  }
} catch (Exception $ex) {
   header('Location: ../pago_rechazado.html');
   
}
        
        
        
?>