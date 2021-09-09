<?php
 
    include 'dbcon.php';
    
    $user=$_POST['usuario'];
    $user=$_POST['apellido'];
    $user=$_POST['dni'];
    $email=$_POST['email'];
    $psw=$_POST['password'];
    $code=''.random_int(10000,99999).'C';
    $fecha=date("Y-m-d");
    $reg_exUser='/^[a-zA-Z]+$/';
    $reg_exPass='/^[A-Za-z0-9]{8,}+$/';
    if(!preg_match($reg_exUser,$user) || !preg_match($reg_exPass,$psw)){
        header('Location:register.php?error=1');
        exit;
    }

    


    $pswenc=md5($psw);
    $sql ="INSERT INTO usuario(nombre,usuario,contra,codigo,area,activo) VALUES ('$user', '$email','$pswenc','$code','Cliente',1)";
    $resultado= mysqli_query($conn, $sql);
    if(!$resultado){
        header('Location:register.php?error=1');
        exit;
    }else{
        header('Location:login.php');
        exit;
    }


    ?>