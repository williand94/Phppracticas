<?php

    require_once("autoload.php");

    $fecha=$_GET["fecha"];
    $hora=$_GET["time"];
    $presion_a=$_GET["presion_s"];
    $presion_b=$_GET["presion_d"];
    $frecuencia=$_GET["frc"];
    $mdicamento=$_GET["mcd"];



    $objUsuario= new Usuario();

    $objUsuario->insertDatos($fecha, $hora,$presion_a,$presion_b, $frecuencia,$mdicamento);


?>