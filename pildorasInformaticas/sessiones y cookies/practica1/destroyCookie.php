<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        setcookie("nombre_usuario", $_POST["login"], time()-1);

        echo"Cookie eliminada";
    
    ?>
</body>
</html>