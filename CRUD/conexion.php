<?php 

require("config.php");
    
    try {

        $connectionString="mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
        $cnx= new PDO($connectionString ,DB_USER,DB_PASSWORD);
        $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $cnx->exec("SET CHARACTER SET utf8");

        
    } catch (Exception $e) {
        
        die("Error." . $e->getMessage() . "en la linea " .$e->getLine());
    }


?>