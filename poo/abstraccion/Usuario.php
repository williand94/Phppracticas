<?php
    
    require_once("ClassUsuario.php");

    $objUsuarioUno = new Usuario("Willian David Vallecilla Riascos","reclutamiento@proservis.com.co","Adminisitrador");
    $objVanessa = new Usuario("Paola Vanessa Montoya","mayra.salazar@tcbuen.com","Cliente");

    //echo $objUsuarioUno->getNombres()."<br>";
    //echo Usuario::$strEstado."<br>";
    $objUsuarioUno->getPerfil()."<br>";
    echo "<br><br>";

    $objVanessa->getPerfil()."<br>";
    $objVanessa->setContra("David Mi amor_culeame con amor papí");
    echo "<br><br>";

    $objVanessa->getPerfil()."<br>";
   

?>
    




