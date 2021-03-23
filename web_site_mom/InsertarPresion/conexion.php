<?php

require("config.php");

 class Conexion{

    protected $cnx;

    public function Conexion(){ 


        try {

            $this->cnx= new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME,DB_USER,DB_PASSWORD);
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->cnx->exec("SET CHARACTER SET utf8");


            echo "conexión exitosa";

            return $this->cnx;
        
            
        } catch (Exception $e) {

            echo "Error: ". $e->getMessage() . $e->getLine();
        }

    }




}



?>