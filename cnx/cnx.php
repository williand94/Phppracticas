<?php

	class Conexion{

		public static function Conectar(){

			define('servidor', 'localhost');
			define('nombre_bd', 'pruebas');
			define('usuario',  'root');
			define('password', '');

			$opciones=array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

			try {

                $cnx= new PDO("mysql:host=".servidor."; dbname=".nombre_bd,usuario,password,$opciones);
                
                if ($cnx) {
                	
                echo "Éxito al conectar";
                	
                }

				return $cnx;


				
			} catch (Exception $e) {

				die("El error de conexion es : " . $e->getMessage());
				
			}



		}


	}

?>