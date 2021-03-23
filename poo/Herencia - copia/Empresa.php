<?php
    require_once("ClassEmpleado.php");
    require_once("ClassCliente.php");


        $objEmpleado = new Empleado(1994,"Willian Vallecilla",26);
        $objEmpleado->setPuesto("Administrador");                
        echo $objEmpleado->getDatosPersonales(); 
        echo "Puesto: ".$objEmpleado->getPuesto()." {$objEmpleado->strNombre}";

        echo "<br><br>";

        $objCliente = new Cliente(14996,"Vanessa Montoya",26);
        Cliente::setCredito(1290000);                
        echo $objCliente->getDatosPersonales(); 
        echo "Hola {$objCliente->strNombre},Su Crédito es de : "."$".$objCliente->getCredito();


        
?>