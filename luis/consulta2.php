<?php
	include_once "cnx.php";
	$objeto= new Conexion();
	$cnx=$objeto->Conectar();

	$query="SELECT * FROM USUARIOS_PASS WHERE USUARIOS=:LOGIN AND PASSWORD=:PASSWORD";

	$resultado=$cnx->prepare($query);

	$login=htmlentities(addslashes($_POST["login"]));
	$pass=htmlentities(addslashes($_POST["password"]));

	$resultado->bindValue(":LOGIN",$login);
	$resultado->bindValue(":PASSWORD",$pass);

	$resultado->execute();
	$resultado->fetchAll(PDO::FETCH_ASSOC);

	if($resultado->rowCount()>0){


				header("location:index.php");
				
			}else{
				
				header("location:login.php");
			}


	//print  json_encode($data);
	//$cnx=null;
	

?>