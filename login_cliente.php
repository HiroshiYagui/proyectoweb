<?php
    include 'dbcon.php';

    $v1=$_POST['email'];
    $v2=$_POST['password'];  
    
    $sql ="SELECT id,contra,area FROM `usuario` WHERE usuario='".$v1."'";
    $resultado = mysqli_query($conn, $sql);
    if(!$resultado){
        header("Location:login.php?error=2");
        exit;
    }else{
        $fetchpsw=mysqli_fetch_array($resultado);
        $decpsw=md5($v2);
        if($decpsw==$fetchpsw['contra']){
            session_start();
            $_SESSION['user']=$fetchpsw['id'];
            if($fetchpsw['area']=='Cliente'){
                header('Location:index2.php');
                exit;
            }
            header('Location:Administrador.php');
            exit;
        }else{       
            header("Location:login.php?error=1");
            exit;
        }
    }
?>