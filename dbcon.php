<?php
$dbuser = 'd3eioza7gkhgt5ic';
$dbpass = 'qodg228qe0w44a1a';
$dbname = 'rvbx6ivotzmm12th';
$host ='frwahxxknm9kwy6c.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';//editar
$conn = mysqli_connect($host,$dbuser,$dbpass,$dbname);//editar


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  date_default_timezone_set("America/Bogota"); 

?>