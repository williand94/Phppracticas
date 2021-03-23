<?php 

    class Conexion{
        
        private $cnx;

        public function __construct()
        {
            $connectionString= "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";

            try {
               
                $this->cnx = new PDO($connectionString, DB_USER, DB_PASSWORD);     

            } catch (Exception $e) {
                $this->cnx='Error de conexión';
                echo "Error : " . $e->getMessage() . ".En la linea: " . $e->getLine();
            }
            
        }

        public function connect(){

            return $this->cnx;
        }    

    }   
    
?>