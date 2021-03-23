
    <?php

require("config.php");

    try {

        $contador=0;
        
        $login=htmlentities(addslashes($_POST["login"]));
        $pass=htmlentities(addslashes($_POST["password"]));
        
        $connectionString="mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
        $cnx= new PDO($connectionString ,DB_USER,DB_PASSWORD);
        $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $cnx->exec("SET CHARACTER SET utf8");

        $query="SELECT * FROM USUARIOS_REGISTRADOS WHERE USUARIOS=:USER";
        
        $result=$cnx->prepare($query);
     
        $result->execute(array(":USER"=>$login));

        while($registro=$result->fetch(PDO::FETCH_ASSOC)){

            if(password_verify($pass,$registro['PASSWORD'])){

                $contador++;
                
            }


        }

           var_dump($contador);

        if($contador>0){

            echo"Existe usuario";

        }else{

            echo"Usuario inexistente";
        }


        

    } catch (Exception $e) {
        
        die("Error." . $e->getMessage() . "En la linea " . $e->getLine());
    }




?>
