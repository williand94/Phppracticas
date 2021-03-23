<?php 

require("conexion.php");

            $objeto=new Conexion;
            $cnx=$objeto->Conectar();

            $query="SELECT * FROM USUARIOS_PASS";

            $result=$cnx->prepare($query);

            $result->execute();
            $data=$result->fetchAll(PDO::FETCH_ASSOC);

            var_dump($data) ;

           
       

?>