<?php
    require_once("ClassProducto.php");

    class Mueble extends Producto{
        public $strMaterial;
        public $strColor;
        public $strStatus = "Agotado";
        public $strMarca = "";
        
        public function __construct(string $descripcion, float $precio, string $marca,string $color,string $material)
        {
            parent::__construct($descripcion,$precio);

            $this->strMaterial = $material;
            $this->strColor = $color;
            $this->strMarca = $marca;
            
        }
        public function setMarca(string $marca){
            $this->strMarca = $marca;
        }
        public function getInfoProducto(){

            $arrProducto = array('producto' => $this->strDescripcion,
                                 'precio'  => $this->fltPrecio, 
                                 'stockMinimo' => $this->intStockMinimo,  
                                 'estado' => $this->strStatus,
                                 'color' => $this->strColor,
                                 'material' => $this->strMaterial,
                                 'Marca' =>$this->strMarca
                                );
            return $arrProducto;                    
        }
    }
?>