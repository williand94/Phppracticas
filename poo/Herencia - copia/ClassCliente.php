<?php
    require_once("ClassPersona.php");
    
    class Cliente extends Persona{

        static $fltCredito;

        function __construct(int $dpi,string $nombre,int $edad)
        {
            parent::__construct($dpi,$nombre,$edad);

        }
        public static function setCredito(float $credito){
            self::$fltCredito = $credito;
            
        }
        public function getCredito(){
           
          return self::$fltCredito;
        }
    }
?>