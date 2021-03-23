<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            
        if(isset($_POST['submit']))
        
        {
        
        //$name = $_POST['name'];
       // $names = $_POST['names'];

        echo $_POST;
        
       
        
        }
 
    
    ?>
    <form id="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label for="">Nombre</label>
    <input type="text" id="txtNombre" name="name" placeholder="Escriba su nombre">
    <label for="">Apellido</label>
    <input type="text" id="txtApellido" name="names" placeholder="Escriba su apellido">
    <input type="submit" value="Go" id="enviar">
    </form>
    <script>
    
    document.addEventListener('DOMContentLoaded',function(){

        var form = document.querySelector("#form");
        form.onsubmit = function(e){
            e.preventDefault();

            var strNombre = document.querySelector("#txtNombre").value;
            var strApellido = document.querySelector("#txtApellido").value;

            var request = (window.XMLHttpRequest) ? new XMLHttpRequest : new ActiveXObject('Microsoft.XMLHTTP');
            var ajax = "http://localhost/php/ajax_practica/index.php";
            var formData = new FormData(form);
                request.open("POST",ajax,true);  
                request.send(formData);
                request.onreadystatechange = function(){
                    
                    console.log(request);
                }
        
        }
        });
    </script>
</body>
</html>