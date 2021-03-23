<?php

class Operacion{

    public $Intnum1=0;
    public $Intnum2=0;
    public $resultado;

    function __construct($n1,$n2)
    {   
        $this->Intnum1=$n1;
        $this->Intnum2=$n2;    
        $this->getsuma(3,3);
    }

    public function getsuma(){

        $this->resultado = $this->Intnum1 + $this->Intnum2;
        return $this->resultado;
    }
    public function getresta(){

        $this->resultado = $this->Intnum1 - $this->Intnum2;
        return $this->resultado;
    }
    public function getmultiplicacion(){

        $this->resultado = $this->Intnum1 * $this->Intnum2;
        return $this->resultado;
    } 
    public function getdivision(){

        $this->resultado = $this->Intnum1 / $this->Intnum2;
        return $this->resultado;
    }

    

}


?>