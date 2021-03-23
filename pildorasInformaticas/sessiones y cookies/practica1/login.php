<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="shortcut icon"  href="#">

	
</head>	

<body>

		<?php 
		include("config.php");

		$autenticado=false;
		
			if(isset($_POST["enviar"])){


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
		
						$autenticado=true;

						if(isset($_POST["recordar"])){

							 setcookie("nombre_usuario", $_POST["login"], time()+86400);
						}
		
					}else{
					
						echo"Error. Usuario o contraseña incorrectos.";
						
					}
		
					
		
				} catch (Exception $e) {
					
					die("Error." . $e->getMessage() . "En la linea " . $e->getLine());
				}
		
			}
		
		
		
		?>

		<?php 
		
			if($autenticado==false){
				
				if(!isset($_COOKIE["nombre_usuario"])){

					include("formulario.html"); 
				}
			
			}
						
		?>

<h1>Hola, se reemplazó este texto por las imagenes buajajaja</h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
	 Aliquid soluta hic maiores debitis cum labore aliquam minima fuga.
	usto eveniet natus hic modi minima. Aperiam amet inventore harum minima libero! 200.

	Lorem ipsum dolor sit amet consectetur adipisicing elit.
	 Aliquid soluta hic maiores debitis cum labore aliquam minima fuga.
	usto eveniet natus hic modi minima. Aperiam amet inventore harum minima libero! 200.

	Lorem ipsum dolor sit amet consectetur adipisicing elit.
	 Aliquid soluta hic maiores debitis cum labore aliquam minima fuga.
	usto eveniet natus hic modi minima. Aperiam amet inventore harum minima libero! 200.

</p>
	
	
</body>
</html>