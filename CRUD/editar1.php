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


    if (isset($_POST["up"])) {
    
        $idi=$_POST["id"];
        $nomb=$_POST["nom"];
        $apel=$_POST["ape"];
        $dire=$_POST["dir"];

        $sql="UPDATE DATOS_USUARIO SET NOMBRE=:NOM, APELLIDO=:APE, DIRECCION=:DIR WHERE ID=:ID";

        $result=$cnx->prepare($sql);
        $result->execute(array(":ID"=>$idi,":NOM"=>$nomb,":APE"=>$apel,":DIR"=>$dire));
        header("Location: index.php");

    }else{

       $id=$_GET["id"];
        $query="SELECT *FROM DATOS_USUARIO WHERE ID=:ID";
        $stmt=$cnx->prepare($query);
        $stmt->bindValue(":ID",$id);
        $stmt->execute();

        while($fila=$stmt->fetch(PDO::FETCH_OBJ)){
    
        ?>
 
    <form name="form1" action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <table width="35%" border="" align="center">

            <tr>
                <td></td>
                <td><label for="id"></label><input type="hidden" name="id" id="id" value="<?php echo $id;?>"></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><label for="nom"></label><input type="text" name="nom" id="nom" value="<?php echo $fila->NOMBRE;?>"></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><label for="ape"></label><input type="text" name="ape" id="ape"value="<?php  echo $fila->APELLIDO; ?>"></td>
            </tr>
            <tr>
                <td>Direccion</td>
                <td><label for="dir"></label><input type="text" name="dir" id="dir" value="<?php echo $fila->DIRECCION;?>"></td>
            </tr>
            <tr><td colspan="2"><input type="submit" name="up" id="up" value="Actualizar"></td></tr>

        </table>    
        </form><?php } }?>
</body>
</html>