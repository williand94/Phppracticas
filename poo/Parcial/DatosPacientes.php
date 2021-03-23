<?php

    class Pacientes extends Mysql{

      

        public $intTipoDocumento;
        public $strFullName;
        public $strFechaNacimiento;
        public $strDireccion;
        public $intTelefono;
        public $strEps;
        public $strRegimen;
        public $strNivelUrgencia;
        public $strCondicionClinica;
        public $intPisoAsignado;
        public $intCamaAsignada;
        public $strPisoTraslado;
        public $strCamaTraslado;
        public $strEstado;

            

        public function setPaciente(){

            
            $objPaciente  = new Pacientes();
            $reuestePaciente = $this->objPaciente->insertPaciente($intTipoDocumento,$strFullName, $strFechaNacimiento);
                      


    }
    

?>