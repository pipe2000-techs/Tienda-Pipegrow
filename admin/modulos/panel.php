<?php
    include ("global/sessiones.php");

    include ("../global/config.php");
    include ("../global/conexion.php");


    //total de ventas y total de ingresos
        $consultaSQL= $pdo -> prepare("select count(*) totalventas, sum(total_ven) as totalingresos from ventas");
        $consultaSQL -> execute();
        $registros = $consultaSQL -> fetch(PDO::FETCH_ASSOC);

        $totalventas= $registros['totalventas'];
        $totalingresos = $registros['totalingresos'];

    //total de pendientes

    //ventas recientes se llaman las ultimas 5 ventas
        $ventres = $pdo -> prepare("SELECT * FROM ventas ORDER BY cod_ven DESC LIMIT 5");
        $ventres -> execute();
        $resientes = $ventres -> fetchall(PDO::FETCH_ASSOC);
?>