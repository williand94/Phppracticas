<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<?php


include_once "cnx.php";
$objetoc= new Conexion();
$cnx=$objetoc->Conectar();

$query="SELECT * FROM USUARIOS_PASS";

$result=$cnx->prepare($query);

$result->execute();
$data=$result->fetchAll(PDO::FETCH_ASSOC);

		
print  json_encode($data);


?>


</body>
</html>
