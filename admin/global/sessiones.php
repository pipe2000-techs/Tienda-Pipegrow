<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo "deves iniciar sesiob";
        header('location:index.php');
        die();
    }else{
        //print_r($_SESSION['usuario']);

        $nombre = $_SESSION['usuario']['nombre'];
        $foto = $_SESSION['usuario']['foto'];
    }
?>