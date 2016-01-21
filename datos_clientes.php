<?php 

error_reporting(0);


//$host="mysql.hostinger.mx";
//$uname="u399060757_root";
//$pass="2011301308";
//$database = "u399060757_javie";
//
//  
$host="localhost";
$uname="root";
$pass="";
$database = "javier_diaz";

$connection=mysql_connect($host,$uname,$pass,$database); 

echo mysql_error();

//or die("Database Connection Failed");
$selectdb=mysql_select_db($database) or 
die("Database could not be selected"); 
$result=mysql_select_db($database)
or die("database cannot be selected <br>");

// Fetch Record from Database

$output = "";
$table = ""; // Enter Your Table Name 
$sql = mysql_query("select nombre, email , pertenece_a  from Usuarios");
$columns_total = mysql_num_fields($sql);

// Get The Field Name

for ($i = 0; $i < $columns_total; $i++) {
$heading = mysql_field_name($sql, $i);
$output .= '"'.$heading.'",';
}
$output .="\n";

// Get Records from the table

while ($row = mysql_fetch_array($sql)) {
for ($i = 0; $i < $columns_total; $i++) {
$output .='"'.$row["$i"].'",';
}
$output .="\n";
}

// Download the file

$filename = "datos.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

echo $output;
exit;

?>

?>