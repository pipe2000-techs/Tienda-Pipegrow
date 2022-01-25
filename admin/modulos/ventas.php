<?php
    include ("global/sessiones.php");
    
    include ("../global/config.php");
    include ("../global/conexion.php");

    //se llaman todas los datos de la tabla ventas
    $concultaven = $pdo -> prepare("select * from ventas");
    $concultaven -> execute();
    $ventas = $concultaven -> fetchall(PDO::FETCH_ASSOC);


?>