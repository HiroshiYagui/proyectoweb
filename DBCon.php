<?php
//$dbuser = 'd3eioza7gkhgt5ic';
//$dbpass = 'qodg228qe0w44a1a';
//$dbname = 'rvbx6ivotzmm12th';
//$host ='frwahxxknm9kwy6c.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';//editar
$dbuser = 'admin';
$dbpass = '@cs72yi50';
$dbname = 'bdbluebus';
$host = 'localhost'; 
$conn = mysqli_connect($host,$dbuser,$dbpass,$dbname);//editar


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  date_default_timezone_set("America/Bogota"); 
  try{
    $base_de_datos = new PDO('mysql:host=localhost;dbname=' . $dbname, $dbuser, $dbpass);
     $base_de_datos->query("set names utf8;");
      $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
      $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  }catch(Exception $e){
    echo "Ocurrió algo con la base de datos: " . $e->getMessage();
  }
?>