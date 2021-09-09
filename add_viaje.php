<?php
 <?php session_start(); ?>
    include 'dbcon.php';
    if(isset($_SESSION['user'])){
    $destino=$_POST['destino'];
    $precio=$_POST['precio'];
    $empresa=$_POST['empresa'];
    $fechas=$_POST['fechas'];
    $fechal=$_POST['fechal'];
    $code=''.random_int(10000,99999).'C';
    $fechas=date("Y-m-d");
    $reg_exUser='/^[a-zA-Z]+$/';
    $reg_exPass='/^[A-Za-z0-9]{8,}+$/';
    if(!preg_match($reg_exUser,$destino) || !preg_match($reg_exUser,$empresa)){
        header('Location:AgregarViaje.php');
        exit;
    }

    $sql="SELECT id FROM empresa WHERE nombre_empresa='".$empresa."';";
    $resultado= mysqli_query($conn, $sql);
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
    $code,
    $destino,
    $fechas,
    $fechal,
    $precio,
    1,
    $fetch);";

    $resultado= mysqli_query($conn, $sql);
    if(!$resultado){
        header('Location:register.php?error=1');
        exit;
    }else{
        header('Location:login.php');
        exit;
    }
}else{
        header('Location:index.php');
        exit;
    }


    ?>