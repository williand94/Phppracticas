<?php 

    class Producto{

        public $strDescripcion;
        public $fltPrecio;
        protected $intStockMinimo = 10;
        protected $strStatus = "Activo";

        public function __construct(string $descripcion, float $precio)
        {
            $this->strDescripcion = $descripcion;
            $this->fltPrecio = $precio;
        }
        public function getInfoProducto(){

            $arrProducto = array('producto' => $this->strDescripcion,
                                 'precio'  => $this->fltPrecio, 
                                 'stockMinimo' => $this->intStockMinimo,  
                                 'estado' => $this->strStatus
                                );
            return $arrProducto;                    
        }
    }

?>