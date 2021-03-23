<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        session_start();

        if (!isset($_SESSION["usuario"])) {
            
            header("Location: login.php");
        }
         
    ?>  

    <h1>Página de los usarios registrados.</h1>
    <?php echo "Usuario " .$_SESSION["usuario"] ?>
    <p><a href="usuarios_r.php">Volver</a></p>
    <p><a href="cerrar.php"> Salir</a></p>



    
</body>
</html>