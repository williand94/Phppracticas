<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    require("config.php");

        try {
            
            $connectionString="mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
            $cnx= new PDO($connectionString ,DB_USER,DB_PASSWORD);
            $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $cnx->exec("SET CHARACTER SET utf8");

            $query="SELECT * FROM USUARIOS_REGISTRADOS WHERE USUARIOS=:USER AND PASSWORD=:PASS";
            
            $result=$cnx->prepare($query);
         
            $login=htmlentities(addslashes($_POST["login"]));
            $pass=htmlentities(addslashes($_POST["password"]));

            $result->bindValue(":USER", $login);
            $result->bindValue(":PASS", $pass);
            $result->execute();
            
            $num_registro =  $result->rowCount();

            if($num_registro!=0){

                session_start();

                $_SESSION["usuario"] = $_POST["login"];

                header("location: usuarios_r.php");

            }else{
            
                header("location: login.php");
                
            }

            

        } catch (Exception $e) {
            
            die("Error." . $e->getMessage() . "En la linea " . $e->getLine());
        }




    ?>
    
</body>
</html>