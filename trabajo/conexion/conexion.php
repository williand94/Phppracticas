<?php 

    class Conexion{

        private $host="localhost";
        private $user="root";
        private $password="";
        private $db="registros";
        private $cnx;

        public function __construct(){

            $connectionString="mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
            
            try {

                $this->cnx=new PDO($connectionString,$this->user,$this->password);
                $this->cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                echo"Conexión exitosa";

            } catch(Exception $e) {
                
                $this->cnx="error de conexión";
                echo"Error: " . $e->getMessage() . " Linea " . $e->getLine();
            }
        }

        public function connect(){

            return $this->cnx;
        }

    }


?>