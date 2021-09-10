<?php
 session_start(); 
    include 'dbcon.php';
    if(isset($_SESSION['user'])){
    $ruc=$_POST['ruc'];
    $empresa=$_POST['empresa'];
    $fechav=$_POST['fechav'];
    $fechae=$_POST['fechae'];
    $code=''.random_int(10000,99999).'C';
    $fechav=date("Y-m-d");
    $fechae=date("Y-m-d");
    

   


    $sql ="INSERT INTO `empresa`
    (
    `codigo`,
    `ruc`,
    `nombre_empresa`,
    `fechav`,
    `fechae`,
    `validez`)
    VALUES
    (
    '$code',
    '$ruc',
    '$empresa',
    '$fechav',
    '$fechae',
    1);";

    $resultado= mysqli_query($conn, $sql);
    if(!$resultado){
        header('Location:AgregarAfiliacion.php?error=2');
        exit;
    }else{
        header('Location:GestionarAfiliacion.php');
        exit;
    }
}else{
        header('Location:index.php');
        exit;
    }


    ?>