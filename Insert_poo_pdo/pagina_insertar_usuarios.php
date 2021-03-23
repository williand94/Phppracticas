<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

require("config.php");

	class Conexion{

		

		public static function Conectar(){

			$usuario= $_POST["usu"];
			$contrasenia= $_POST["contra"];
			$password= password_hash($contrasenia,PASSWORD_DEFAULT);
	


			try{
				
				$connectionString="mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
				$cnx= new PDO($connectionString ,DB_USER,DB_PASSWORD);		
				$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$cnx->exec("SET CHARACTER SET utf8");		



				$sql="INSERT INTO USUARIOS_REGISTRADOS (USUARIOS, PASSWORD) VALUES (:usu, :contra)";
				
				$resultado=$cnx->prepare($sql);		
				
				
				$resultado->execute(array(":usu"=>$usuario, ":contra"=>$password));		
				
				
				echo "Registro insertado";
				
				$resultado->closeCursor();

			}
		
			catch(Exception $e){			
		
		
			echo "Línea del error: " . $e->getLine();
		
			}

		}


	}










	/*$usuario= $_POST["usu"];
	$contrasenia= $_POST["contra"];
	$password= password_hash($contrasenia,PASSWORD_DEFAULT);
	
	
				
	try{
		require("config.php");
		
		$connectionString="mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
        $cnx= new PDO($connectionString ,DB_USER,DB_PASSWORD);		
		$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$cnx->exec("SET CHARACTER SET utf8");		
		
		
		$sql="INSERT INTO USUARIOS_REGISTRADOS (USUARIOS, PASSWORD) VALUES (:usu, :contra)";
		
		$resultado=$cnx->prepare($sql);		
		
		
		$resultado->execute(array(":usu"=>$usuario, ":contra"=>$password));		
		
		
		echo "Registro insertado";
		
		$resultado->closeCursor();

	}catch(Exception $e){			
		
		
		echo "Línea del error: " . $e->getLine();
		
	}finally{
		
		$base=null;
		
		
	}*/

?>
</body>
</html>