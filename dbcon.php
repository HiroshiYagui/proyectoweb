<?php
$dbuser = 'ag1ifq04aiclqohr';
$dbpass = 'hw1ailng7b3akrx2';
$dbname = 'yes7ogwhyaa6fthl';
$host ='pk1l4ihepirw9fob.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';//editar
$conn = mysqli_connect($host,$dbuser,$dbpass,$dbname);//editar


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  date_default_timezone_set("America/Bogota"); 

?>