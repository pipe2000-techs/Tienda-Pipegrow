<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        //header('location:../index.php');
        echo"<script> window.location='../index.php'; </script>";
        die();
    }else{
        //print_r($_SESSION['usuario']);

        header("Content-type: application/pdf");
        header("Content-Disposition: inline; filename=documento.pdf");
        readfile("../../facturas/".$_GET["IdVenta"].".pdf");
    }
?>