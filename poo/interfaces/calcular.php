<?php
    require_once("ClassOperacion.php");

    $objRaiz = new Calcular();
    echo $objRaiz->OpBasicas(3,4,"/");
    echo"<br><br>";
  //  $objRaiz->intNumero= 6;
    echo $objRaiz->raizCuadrada($objRaiz->intNumero=6);
    /*echo 
    echo"<br><br>";
    echo $objRaiz->Potencia(9,2);*/

?>