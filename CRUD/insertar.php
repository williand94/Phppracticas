<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $nombre=$_GET["nom"];
        $apellido=$_GET["ape"];
        $direccion=$_GET["dir"];


        require("conexion.php");

        if(isset($_GET["cr"])){

        $query="INSERT INTO DATOS_USUARIO (NOMBRE,APELLIDO,DIRECCION) VALUES(:NOMBRE,:APELLIDO,:DIRECCION)";
        $result=$cnx->prepare($query);
        $result->execute(array(":NOMBRE"=>$nombre,":APELLIDO"=>$apellido,":DIRECCION"=>$direccion));
        
        header("Location: index.php");
        }else{

            echo"<script>alert('No se pudo insertar el registro')</script>";

        }
    
    ?>
</body>
</html>