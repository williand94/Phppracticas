<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/hoja.css">
</head>
<body>
    <?php 
       
    require("conexion.php");   


    if (!isset($_POST["up"])) {
    
        $id=$_GET["id"];
        $nom=$_GET["nom"];
        $ape=$_GET["ape"];
        $dir=$_GET["dir"];
        
    }else{

        $id=$_POST["id"];
        $nom=$_POST["nom"];
        $ape=$_POST["ape"];
        $dir=$_POST["dir"];

        $sql="UPDATE DATOS_USUARIO SET NOMBRE=:NOM, APELLIDO=:APE, DIRECCION=:DIR WHERE ID=:ID";

        $result=$cnx->prepare($sql);
        $result->execute(array(":ID"=>$id,":NOM"=>$nom,":APE"=>$ape,":DIR"=>$dir));
        header("Location: index.php");

    }    
    

    ?>
 
    <form name="form1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <table width="35%" border="0" align="center">

            <tr>
                <td></td>
                <td><label for="id"></label><input type="hidden" name="id" id="id" value="<?php echo $id ;?>"></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><label for="nom"></label><input type="text" name="nom" id="nom" value="<?php echo $nom;?>"></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><label for="ape"></label><input type="text" name="ape" id="ape"value="<?php echo $ape;?>"></td>
            </tr>
            <tr>
                <td>Direccion</td>
                <td><label for="dir"></label><input type="text" name="dir" id="dir" value="<?php echo $dir;?>"></td>
            </tr>
            <tr><td colspan="2"><input type="submit" name="up" id="up" value="Actualizar"></td></tr>

        </table>    
    </form>
</body>
</html>