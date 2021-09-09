<?php
 session_start(); 
    include 'dbcon.php';
    if(isset($_SESSION['user'])){
    $destino=$_POST['destino'];
    $precio=$_POST['precio'];
    $empresa=$_POST['empresa'];
    $fechas=$_POST['fechas'];
    $fechal=$_POST['fechal'];
    $code=''.random_int(10000,99999).'C';
    $fechas=date("Y-m-d");
    $fechal=date("Y-m-d");
    

    $sql="SELECT id FROM empresa WHERE nombre_empresa='".$empresa."';";
    $resultado= mysqli_query($conn, $sql);
    if(!$resultado){
        header('Location:AgregarViaje.php?error=1');
        exit;
    }
    $fetch=mysqli_fetch_array($resultado);


    $sql ="INSERT INTO `viaje`
    (
    `codigo`,
    `destino`,
    `fechas`,
    `fechal`,
    `precio`,
    `disponible`,
    `idEmpresa`)
    VALUES
    (
    '$code',
    '$destino',
    '$fechas',
    '$fechal',
    $precio,
    1,".
    $fetch['id'].");";

    $resultado= mysqli_query($conn, $sql);
    if(!$resultado){
        header('Location:AgregarViaje.php?error=2');
        exit;
    }else{
        header('Location:GestionarViaje.php');
        exit;
    }
}else{
        header('Location:index.php');
        exit;
    }


    ?>