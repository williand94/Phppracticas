<?php

    require("conexion.php");

    class insertPresion extends Conexion{



        public function insertPresion(){

            parent::__construct();

        }

        public function insert_datos(){

            $fecha=$_GET["fecha"];
            $hora=$_GET["time"];
            $presion_s=$_GET["presion_s"];
            $presion_d=$_GET["presion_d"];
            $frc=$_GET["frc"];
            $medicamentos=$_GET["mcd"];

            $query="INSERT INTO REGISTROSMEDICOS (FECHA,HORA,PRESIONSISTOLICA,PRESIONDIASTOLICA,FRECUENCIACARDIACA,MEDICAMENTOS)
                                                 VALUES($fecha,$hora,$presion_s,$presion_d,$frc,$medicamentos)";
            $result=$this->cnx->prepare($query);
            $result=$this->cnx->execute(array());
            $resource=$result->fetchAll(PDO::FETCH_ASSOC);
            $resource->closeCursor();

            if ($result->rowCount()>0) {
                
                echo"<script>alert('Registos guardados.')</script>";
            }else{

                echo"<script>alert('No se pudo guardar el registro.')</script>";

            }
           
            return $resource;

            $this->cnx=null;



        }

    }




?>
