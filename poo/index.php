<?php 
    require_once("Operacion.php");

    $operacion1 = new Operacion(5,7);
    $operacion2 = new Operacion(3,0);
    $operacion3 = new Operacion(7,3);
 
    $oper = $operacion1->getsuma();
    echo $oper;
    echo"<br>";
    
    $oper = $operacion1->getresta();
    echo $oper;
    echo"<br>";
    echo"<br>";


    $oper = $operacion2->getmultiplicacion();
    //echo "Esta es la tabla del $operacion1->Intnum1: ".$oper;
    echo"<br>";
    
    $oper = $operacion3->getdivision();
    echo $oper;
    echo"<br>";

?>