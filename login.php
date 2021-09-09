<?php
    include 'dbcon.php';

    $v1=$_REQUEST['uname'];
    $v2=$_REQUEST['psw'];  
    
    $sql ="SELECT id,contra FROM `usuarios` WHERE usuario='".$v1."'";
    $resultado = mysqli_query($conn, $sql);
    if(!$resultado){
        echo "Incorrecto";
    }else{
        
        $fetchpsw=mysqli_fetch_array($resultado);
        $decpsw=md5($v2);
        if($decpsw==$fetchpsw['contra']){
            session_start();
            $_SESSION['user']=$v1;
            if($fetchpsw['id']==19){
                header('Location:PanelAdmin.php');
                exit;
            }
            header('Location:PanelUsuario.php');
            exit;
        }else{       
            header("Location:index.php?msg=1");
            exit;
        }
    }
?>