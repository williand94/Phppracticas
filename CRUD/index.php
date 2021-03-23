<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="estilos/hoja.css">


</head>

<body>

<?php

require("conexion.php");

//Se crea una consulta donde se guarada el resource, y de una vez se accede a un array de objetos.

$registros=$cnx->query("SELECT * FROM DATOS_USUARIO")->fetchAll(PDO::FETCH_OBJ);

//Condicional para verificar si se a pulsado el botón insertar, para crear los datos.

if (isset($_POST["cr"])) {

  $nombre=$_POST["Nom"];
  $apellido=$_POST["Ape"];
  $direccion=$_POST["Dir"];

 // $cnx= new PDO($connectionString ,DB_USER,DB_PASSWORD);

  $query="INSERT INTO DATOS_USUARIO (NOMBRE,APELLIDO,DIRECCION) VALUES (:NOMBRE,:APELLIDO,:DIRECCION)";
  $result=$cnx->prepare($query);
  $result->execute(array(":NOMBRE"=>$nombre,":APELLIDO"=>$apellido,":DIRECCION"=>$direccion));
  header("Location: index.php"); 

}

?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
    <?php

      /*Creamos el FOREACH para recorrer el arreglo de objetos
        $registros y lo guardamos en la fila que corresponda
        por x cantidad de objetos en el array, se crearan y filas en el html.
      */

      foreach($registros as $persona) :?>
            
            <tr>
              <td><?php echo $persona->ID; ?></td>
              <td><?php echo $persona->NOMBRE; ?></td>
              <td><?php echo $persona->APELLIDO; ?></td>
              <td><?php echo $persona->DIRECCION; ?></td>         
              <td class="bot"><a href="borrar.php?id=<?php echo $persona->ID;?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
              <td class='bot'><a href="editar1.php?id=<?php echo $persona->ID;?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
            </tr> 
            
    <?php 
    endforeach;
     ?>

	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name='Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
  </table>

<p>&nbsp;</p>

  </form>

</body>
</html>