<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

function operaciones($num1,$num2){


   for($i=0;$i<10;$i++){

    $operacion1 = $num1 * $i; 
       print $num1."*".$i ."=".$operacion1."<br>";   
     

   }

    
   for($j=0;$j<10;$j++){
    
    $operacion2 = $num2 * $j."<br>";       

      print $num2."*".$j ."=".$operacion2;   

}

    


}

        echo operaciones(3,2);

        $array=array("nombre"=>"david","apellido"=>"vallecilla");

        foreach($array as $info=>$datos){

            print($array[$info])."<br>";
        }
?>
</body>
</html>