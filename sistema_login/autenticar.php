<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="jquery/jquery-3.5.1.min.js"></script>
	<script src="ajax.js"></script>
</head>
<body>



<?php

	require "config.php";



		try{

			$cnx=new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);

			$cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
			$cnx->exec("SET CHARACTER SET UTF8");

			$query="SELECT * FROM USUARIOS WHERE USERS=:LOGIN AND PASSWORD=:PASSWORD";

			$result=$cnx->prepare($query);

			$login=htmlentities(addslashes($_POST["login"]));
			$pass=htmlentities(addslashes($_POST["password"]));

			$result->bindValue(":LOGIN",$login);
			$result->bindValue(":PASSWORD",$pass);

			$result->execute();

			$data=$result->fetchAll(PDO::FETCH_ASSOC);		

			/*$userData = array();
			

			while($row=$result->fetch(PDO::FETCH_ASSOC)){
  
     		 $userData[]= $row;
     		

			}*/

			if($result->rowCount()>0){

				echo "logrado";

				//header("location: index.php");
				
		 		//echo json_encode($userData);

			}else{
				
				header("location:login.php");
			}


		}catch(Exception $e){

			die("Error: " . $e->getMessage() . $e->getLine());


		}
			print $data;
		    
		  //var_dump($result);


?>
	
</body>
</html>