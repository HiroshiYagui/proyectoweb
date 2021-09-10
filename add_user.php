<?php
 
    include 'dbcon.php';
    session_start(); 
    include 'dbcon.php';
    if(isset($_SESSION['user'])){
    $user=$_POST['usuario'];
    $apellido=$_POST['apellido'];
    $dni=$_POST['dni'];
    $email=$_POST['email'];
    $psw=$_POST['password'];
    $area=$_POST['area'];
    $code=''.random_int(10000,99999).'C';
    $fecha=date("Y-m-d");
    $reg_exUser='/^[a-zA-Z]+$/';
    $reg_exPass='/^[A-Za-z0-9]{8,}+$/';
    if(!preg_match($reg_exUser,$user) ){
        header('Location:AgregarUsuario.php?error=1');
        exit;
    }

    


    $pswenc=md5($psw);
    $sql ="INSERT INTO usuario(nombre,apellido,dni,usuario,contra,fecha,codigo,area,activo) VALUES ('$user', '$apellido','$dni','$email','$pswenc','$fecha','$code',$area,1)";
    $resultado= mysqli_query($conn, $sql);
    if(!$resultado){
        header('Location:AgregarUsuario.php?error=1');
        exit;
    }else{
        header('Location:GestionarUsuarios.php');
        exit;
    }
}else{
    header('Location:index.php');
    exit;
}

    ?>