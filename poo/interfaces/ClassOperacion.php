<?php 
    require_once("Operacion.php");
    require_once("OperacionesBasicas.php");


    class Calcular implements Operacion,OperacionesBasicas{

        public $intNumero;
        
        public function raizCuadrada(float $numero):float
        {   
            $this->intNumero = $numero;
            $total = sqrt($this->intNumero);
            return $total;
        }

        public function Potencia(int $numero,int $potencia):int
        {
            $total = pow($numero,$potencia);
            return $total;
        }
        public function OpBasicas(float $cant1, float $cant2, string $operacion)
        {
            if ($operacion == "+") {
                
                $result = $cant1 + $cant2;

            }else if($operacion == "-"){

                $result = $cant1 - $cant2;

            }else if($operacion == "*"){

                $result = $cant1 * $cant2;

            }else if($operacion == "/"){

                $result = $cant1 / $cant2;

            } else {
                echo "La operación elegida no es válida";
            }
            return $result;
        }
    }
?>