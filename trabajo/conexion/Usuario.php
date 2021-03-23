<?php

    require_once("autoload.php");

    class Usuario extends Conexion{

        private $fecha;
        private $hora;
        private $presn_s;
        private $presn_d;
        private $frc;
        private $medicina;
        private $conexion;
        
             

        public function __construct()
        {
            $this->conexion= new Conexion();
            $this->conexion=$this->conexion->connect();
            
        }
            public function insertDatos(int $fechaF,int $horaF,int $presion_s ,int $presion_d,int $frcF,string $medicamento){

                $this->fecha= $fechaF;
                $this->hora= $horaF;
                $this->presn_s= $presion_s;
                $this->presn_d= $presion_d;
                $this->frc= $frcF;
                $this->medicina= $medicamento;


                $query="INSERT INTO SIGNOS_V (FECHA,HORA,PRESIONSISTOLICA,PRESIONDIASTOLICA,FRECUENCIACARDIACA,MEDICAMENTOS)
                                             VALUES(?,?,?,?,?,?)";
                                                            
                $resource=$this->conexion->prepare($query);
                $arrayData= array($this->fecha, $this->hora,$this->presn_s,$this->presn_d,$this->frc, $this->medicina);
                $result=$this->conexion->execute($arrayData);


            }
            
        

    }

?>