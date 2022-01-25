<?php
    //session_start();

    if(isset($_POST['exit'])){

        //se destrulle la seesion
        unset($_SESSION['usuario']);

        header('location:index.php');

    }

?>