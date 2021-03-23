<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        require("conexion.php");

        $id=$_GET["id"];

        $cnx->query("DELETE FROM DATOS_USUARIO WHERE ID='$id'");
        
        //Se redirecciona después de eliminar el archivo a la página principal, para que la página no quede en blanco. 

        header("Location: index.php");
    
    ?>
</body>
</html>