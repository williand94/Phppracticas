<?php

    require("conexion.php");

    class insertPresion extends Conexion{



        public function insertPresion(){

            parent::__construct();

        }

        public function insert_datos(){

            $result=new Conexion;

            $fecha=$_GET["fecha"];
            $hora=$_GET["time"];
            $presion_s=$_GET["presion_s"];
            $presion_d=$_GET["presion_d"];
            $frc=$_GET["frc"];
            $medicamentos=$_GET["mcd"];

            $query="INSERT INTO signos_v (FECHA,HORA,PRESIONSISTOLICA,PRESIONDIASTOLICA,FRECUENCIACARDIACA,MEDICAMENTOS)
                                   VALUES(':FECHA',':HORA',':PRESION_S',':PRESION_D',':FRC',':MEDICAMENTOS')";

            $result=$this->cnx->prepare($query);
            
            $result->bindParam(':FECHA', $fecha);
            $result->bindParam(':HORA', $hora);
            $result->bindParam(':PRESION_S', $presion_s);
            $result->bindParam(':PRESION_d', $presion_d);
            $result->bindParam(':FRC', $frc);
            $result->bindParam(':MEDICAMENTOS', $medicamentos);

            $result->execute();

            $resource=$result->fetchAll(PDO::FETCH_ASSOC);

            if ($result->rowCount()>0) {
                
                echo"<script>alert('Registos guardados.')</script>";
            }
            else{

                echo"<script>alert('No se pudo guardar el registro.')</script>";

            }

            $resource->closeCursor();

           
            return $resource;

            $this->cnx=null;



        }



    }




?>
