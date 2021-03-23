
		var xhr= new XMLHttpRequest();
		xhr.open('GET','autenticar.php');
		xhr.onload= function(){

			if(xhr.status === 200){

				var json= xhr.responseTest;
				console.log(json);

			}else{

				console.log("Existe un error : " +xhr.status);
			}


		}
		
