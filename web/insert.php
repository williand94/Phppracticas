<?php

include("config.php");

    //Rescato datos del formulario, para utilizarlos en la consulta sql.

    $fecha=$_GET["fecha"];
    $hora=$_GET["time"];
    $presion_s=$_GET["presion_s"];
    $presion_d=$_GET["presion_d"];
    $frecuencia=$_GET["frc"];
    $medicina=$_GET["pastas"];

    //Validación del formulario.
    if (isset($_GET["enviar"])) {

        if($presion_s>=130) {echo"<script>alert('Presión alta')</script>";}

        if($presion_s<=100) {echo"<script>alert('Presión baja')</script>"; }
        
        if($presion_d>85){echo"<script>alert('Presión Diastólica está alta')</script>"; }

        if($presion_d<70){echo"<script>alert('Presión Diastólica está baja')</script>"; }

        if($frecuencia>100){echo"<script>alert('Frecuencia Cardíaca está alta')</script>"; }

        if($frecuencia<60){echo"<script>alert('Frecuencia Cardíaca está baja')</script>"; }
    
    }

    //Conexión a la BD y consulta insert.
    try {
        $connectionString="mysql:host=".$host.";dbname=".$db.";charset=utf8";
        $cnx= new PDO($connectionString ,DB_USER,DB_PASSWORD);
        $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $cnx->exec("SET CHARACTER SET utf8");

        $query="INSERT INTO SIGNOS_V (FECHA,HORA,PRESIONSISTOLICA,PRESIONDIASTOLICA,FRECUENCIACARDIACA,MEDICAMENTOS)
                                      VALUES(:FECHA,:HORA,:PRESION_S,:PRESION_D,:FRC,:MEDICINA)";
        $result=$cnx->prepare($query);
        $result->execute(array(":FECHA"=>$fecha, ":HORA"=>$hora, ":PRESION_S"=>$presion_s, ":PRESION_D"=>$presion_d, ":FRC"=>$frecuencia
                                ,":MEDICINA"=>$medicina));

        $resultado=$result->rowCount();                        

        if($resultado>0){    
            
            echo'<script>alert("Registro  exitoso");</script>';

        }else{

            echo"<script>alert('No se pudo agregar el registro')</script>";
        }                        
        
        $result->closeCursor();

    } catch (Exception $e) {
        
        echo "Error: " . $e->getMessage() . " Linea " . $e->getLine();
    }

?>