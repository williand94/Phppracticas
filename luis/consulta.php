<?php


include_once "cnx.php";

//se instancia la clase conexión , para acceder a los métodos de la misma
$objetoc= new Conexion();
$cnx=$objetoc->Conectar();

$query="SELECT * FROM USUARIOS_PASS";

$result=$cnx->prepare($query);

$result->execute();
$data=$result->fetchAll(PDO::FETCH_ASSOC);

//print $data;	
//encapsula los datos de la consulta y los convierte en archivos json
print json_encode($data);
$cnx=null;

?>