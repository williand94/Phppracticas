
$(document).ready(function(){

	$("#btnenviar").click(function(){

		$.ajax({

			url:"consulta1.php",
			type:"POST",
			dataType:"json",
			success:function(data){

				console.log(data);
			}
		})

	});

});