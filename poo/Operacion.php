<?php

class Operacion{

    public $Intnum1=0;
    public $Intnum2=0;
    public $resultado;

    function __construct($n1,$n2)
    {         
        $this->Intnum1=$n1;
        $this->Intnum2=$n2;  
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
        
        for($i=1;$i<=10;$i++){

             echo $this->Intnum1." * " . $i ."=".$this->resultado = $this->Intnum1 * $i ."<br>";      
        
        }

    } 
    public function getdivision(){

        if($this->Intnum1 == 0 OR $this->Intnum2 == 0 ){
            
            echo "División por 0 no existe!";
        }else{
            $this->resultado = $this->Intnum1 / $this->Intnum2;

        }
        return $this->resultado;
    }

    

}


?>