<?php

    class Mysql extends Conexion{

        private $conexion;
        private $strquery;
        private $arrValues;

        public function __construct()
        {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();   
        }

        public function insertPaciente(string $query, array $arraValues){

            $this->strquery = $query;
            $this->arrValues = $arraValues;
            $insert = $this->conexion->prepare($this->strquery);
            $resInsert = $insert->execute($this->arrValues);

            return $resInsert;
         }

    }
   
?>