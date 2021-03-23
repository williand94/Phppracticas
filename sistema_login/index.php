<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		
		tr,td,h1{
			text-align: center;
			font-size: 1em;
			color: #6a197d;
		}

		table{

			margin: 0 auto;
			width: 25%;
			height: 100px;
			background: #84a9ac;
			padding: 10px;
			border: 1px  #fff;
		}
		td{
			color: #eeeeee;
			border-radius: 10%;
		}


	</style>
	<script src="jquery/jquery-3.5.1.min.js"></script>
	<script src="ajax.js"></script>
</head>
<body>

	

	<form action="consulta.php" method="POST">



		<table>

			<tr><td colspan="2"><h1>Introduce tus datos</h1></td></tr>


			<tr>
				<td class="izq">
				Login:</td><td class="der"><input type="text" name="login"></td> 
			</tr>
			<tr>	
				<td class="izq">
				Password:</td><td class="der"><input type="password" name="password"></td>	
			</tr>		

			<tr>
				<!--<td colspan="2"><button type="button" name="enviar"  id="enviar" >Login</button></td>-->
				<!--<td colspan="2" ><button id="btnenviar">Json</button></td>-->
				
				<td colspan="2"><input type="submit" name="enviar" value="Login" id=""></td>
			</tr>

		</table>
		


	</form>
	

		
	</script>
	
</body>
</html>