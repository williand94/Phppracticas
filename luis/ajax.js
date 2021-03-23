
$(document).ready(function(){

	$("#btnjson").click(function(){
//cuando se le da click al botn se genera el llamado a ajax para realizar la consulta y pasar los datos por medio de json
		$.ajax({

			url:"consulta.php",
			type:"POST",
			dataType:"json",
			success:function(data){
				console.log(data);
			}
		});	
	
	});

});