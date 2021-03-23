<?php

//require("insert.php");

 
if (isset($_GET["enviar"])) {

    if($presion_s>=130) {echo"<script>alert('Presión alta')</script>";}

    if($presion_s<=100) {echo"<script>alert('Presión baja')</script>"; }
    
    if($presion_d>85){echo"<script>alert('Presión Diastólica está alta')</script>"; }

    if($presion_d<70){echo"<script>alert('Presión Diastólica está baja')</script>"; }

    if($frecuencia>100){echo"<script>alert('Frecuencia Cardíaca está alta')</script>"; }

    if($frecuencia<60){echo"<script>alert('Frecuencia Cardíaca está baja')</script>"; }

}
?>