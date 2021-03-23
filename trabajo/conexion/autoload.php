<?php 

    function autoload($clases){

        require_once($clases.".php");

    } 
    
    spl_autoload_register("autoload");

?>