//Verificación de envio de datos mediante ajax
document.addEventListener('DOMContentLoaded',function(){

    var form = document.querySelector("#form");
    form.onsubmit = function(e){
        e.preventDefault();

        var strNombre = document.querySelector("#txtNombre").value;
        var strApellido = document.querySelector("#txtNombre").value;

        var request = (window.XMLHttpRequest) ? new XMLHttpRequest : new ActiveXObject('Microsoft.XMLHTTP');
        var ajax = "http://localhost/php/ajax_practica/index.php";
        var formData = new FormData(form);
            request.open("post",ajax,true);  
            request.send(formData);
            request.onreadystatechange = function(){
                
                console.log(request);
            }
       
    }
});