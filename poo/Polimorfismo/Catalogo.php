<?php 
    require_once("ClassMesa.php");

    $objCama = new Producto("Cama",250000);
    $arraInfoProducto = $objCama->getInfoProducto();
    print_r('<pre>');
    print_r($arraInfoProducto);
    print_r('</pre>');

    $objMueble = new Mueble("Mueble Exótico",2900000,"Gucci","Blanco y Negro","Cuero");
    $arrInfoMueble = $objMueble->getInfoProducto();
   // $arrInfoMueble = $objMueble->arrProducto['stock minmo']=5;
    
    print_r('<pre>');
    print_r($arrInfoMueble);
    print_r('</pre>');

    $objMesa = new Mesa("Mesa de alcoba",550500,"Dolce Gabana","Marrón","PVC","Grande",6,"En Stock");
    $arrMesaInfo = $objMesa->getInfoProducto();
    $objMesa->setForma("Rectangular");
    print_r('<pre>');
    print_r($arrMesaInfo);
    print_r('</pre>');
    echo $objMesa->getForma();




?>