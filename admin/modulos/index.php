<?php
    session_start();

    error_reporting(0);

    if(isset($_SESSION['usuario'])){

        header('location:vistapanel.php');
        
    }else{

        if(isset($_POST['ingresar'])){

            include ("../global/config.php");
            include ("../global/conexion.php");

            
            $usuario = ($_POST['usuario']);
            $contraseña = ($_POST['contraseña']);

            $consultaSQL= $pdo -> prepare("select * from admin where usuario='$usuario' and contra='$contraseña'");
            $consultaSQL -> execute();

            $registros = $consultaSQL -> fetch(PDO::FETCH_ASSOC);


            $numeroRegistros = $consultaSQL -> rowCount();
                
            if($numeroRegistros >= 1){
                    
                //se creala secion de usuraio
                $_SESSION['usuario'] = $registros;
                header('location:vistapanel.php');

            }else{
                echo "<script> alert('USUARIO O CONTRASEÑA INCORECTO');</script>";
            }
        }
    }
?>