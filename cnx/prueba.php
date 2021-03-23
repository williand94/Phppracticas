<?php 

include"cnx.php";

$objeto=new Conexion;
$connect=$objeto->Conectar();

$query="SELECT * FROM USUARIOS_PASS";

$result=$connect->prepare($query);

$result->execute();
$data=$result->fetchAll(PDO::FETCH_ASSOC);

var_dump($data) ;
?>