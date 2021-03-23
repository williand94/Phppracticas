<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        table{

            width:500px ;
            height: 200px;
        }

        

    </style>
</head>
<body>
    
    <?php

        session_start();

        if (!isset($_SESSION["usuario"])) {
            
            header("Location: login.php");
        }
         
    ?>  

    <h1>Página de los usarios registrados.</h1>

    <table border="1">
    
        <th colspan="3">Zona de usuarios</th>

        <tr><td><a href="usuarios1.php">Página 1</a></td>
        <td><a href="usuarios2.php">Página 2</a></td>
        <td><a href="usuarios3.php">Página 3</a></td>
        </tr>

    
    
    </table>
    <p><a href="cerrar.php"> Salir</a></p>

    
</body>
</html>