<?php
    require_once("ClassTienda.php");

    $objProducto = new Tienda();

    $objProducto->setProducto("PC Gamer",3000,12);
    echo $objProducto->getProducto();
    echo"<br><br>";

    $objProducto->setCarrito("PC Gamer",2);
    echo $objProducto->getCarrito();
?>