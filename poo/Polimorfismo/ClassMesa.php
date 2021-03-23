<?php
    require_once("ClassMueble.php");

    class Mesa extends Mueble{
        
        private $strforma ="";
        protected $strTamanio;

        public function __construct(string $descripcion, float $precio, string $marca,string $color,string $material,string $tamanio)
        {
            parent::__construct($descripcion,$precio,$marca,$color,$material);

            $this->strTamanio = $tamanio;
        }
        public function setForma(string $forma){

            $this->strforma = $forma;
            
        }
        public function getForma(){

            return $this->strforma;
            
        }
        public function getInfoProducto(){

            $arrProducto = array('producto' => $this->strDescripcion,
                                 'precio'  => $this->fltPrecio, 
                                 'Marca' => $this->strMarca,
                                 'color' => $this->strColor,
                                 'material' => $this->strMaterial,
                                 'Tamaño' => $this->strTamanio,
                                 'stockMinimo' => $this->intStockMinimo = 6,  
                                 'estado' => $this->strStatus,
                                                             
                                );
            return $arrProducto;                    
        }
    }
?>