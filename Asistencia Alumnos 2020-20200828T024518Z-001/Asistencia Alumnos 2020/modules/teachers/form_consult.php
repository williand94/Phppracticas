<?php
if ($_SESSION['permissions'] != 'admin')
{
	header('Location: /');
	exit();
}

$_SESSION['user_id'] = array();
$_SESSION['teacher_name'] = array();
$_SESSION['teacher_surnames'] = array();

$sql = "SELECT * FROM teachers WHERE user = '".$_POST['txtuserid']."'";

if ($result = $conexion -> query($sql))
{
	if ($row = mysqli_fetch_array($result))
	{
		$_SESSION['user_id'][0] = $row['user'];
		$_SESSION['teacher_name'][0] = $row['name'];
		$_SESSION['teacher_surnames'][0] = $row['surnames'];
		$_SESSION['teacher_curp'][0] = $row['curp'];
		$_SESSION['teacher_rfc'][0] = $row['rfc'];
		$_SESSION['teacher_address'][0] = $row['address'];
		$_SESSION['teacher_phone'][0] = $row['phone'];
		$_SESSION['teacher_level_studies'][0] = $row['level_studies'];
		$_SESSION['teacher_documentation'][0] = $row['documentation'];
		$_SESSION['teacher_observation'][0] = $row['observations'];
	}
}

echo'
<div class="form-data">
	<div class="head">
		<h1 class="titulo">Consultar</h1>
    </div>
   <div class="body">
        <form name="form-consult-teachers" action="#" method="POST">
            <div class="first">
                <label class="label">Usuario</label>
                <input style="display: none;" type="text" name="btn" value="form_default"/>
                <input class="text" type="text" name="txt" value="'.$_SESSION['user_id'][0].'" disabled/>
                <label class="label">Nombre</label>
				<input class="text" type="text" name="txtname" value="'.$_SESSION['teacher_name'][0].'" autofocus disabled/>
				<label class="label">Apellidos</label>
				<input class="text" type="text" name="txtsurnames" value="'.$_SESSION['teacher_surnames'][0].'" disabled/>
                <label class="label">CURP</label>
                <input class="text" type="text" name="txtcurp" value="'.$_SESSION['teacher_curp'][0].'" disabled/>
                <label class="label">RFC</label>
                <input class="text" type="text" name="txtrfc" value="'.$_SESSION['teacher_rfc'][0].'" disabled/>
			</div>
			<div class="last">
				<label class="label">Telefono</label>
                <input class="text" type="text" name="txtphone" value="'.$_SESSION['teacher_phone'][0].'" disabled/>
                <label class="label">Domicilio</label>
                <input class="text" type="text" name="txtaddress" value="'.$_SESSION['teacher_address'][0].'" disabled/>
				<label class="label">Nivel de estudios</label>
				<select class="select" name="selectnivelestudios" disabled>
				';
					if ($_SESSION['teacher_level_studies'][0] == 'Licenciatura')
					{
						echo
						'
							<option value="Licenciatura">Licenciatura</option>
							<option value="Ingenieria">Ingenieria</option>
							<option value="Maestria">Maestria</option>
							<option value="Doctorado">Doctorado</option>
						';
					}
					elseif ($_SESSION['teacher_level_studies'][0] == 'Ingenieria')
					{
						echo
						'
							<option value="Ingenieria">Ingenieria</option>
							<option value="Licenciatura">Licenciatura</option>
							<option value="Maestria">Maestria</option>
							<option value="Doctorado">Doctorado</option>
						';
					}
					elseif ($_SESSION['teacher_level_studies'][0] == 'Maestria')
					{
						echo
						'
							<option value="Maestria">Maestria</option>
							<option value="Licenciatura">Licenciatura</option>
							<option value="Ingenieria">Ingenieria</option>
							<option value="Doctorado">Doctorado</option>
						';
					}
					elseif ($_SESSION['teacher_level_studies'][0] == 'Doctorado')
					{
						echo
						'
							<option value="Doctorado">Doctorado</option>
							<option value="Licenciatura">Licenciatura</option>
							<option value="Ingenieria">Ingenieria</option>
							<option value="Maestria">Maestria</option>
						';
					}
					echo'
				</select>
				<label class="label">Documentaci??n</label>
				<select class="select" name="selectdocumentation" disabled>
				';
					if ($_SESSION['teacher_documentation'][0] == 1)
					{
						echo
						'
							<option value="1">Si</option>
							<option value="0">No</option>
						';
					}
					elseif ($_SESSION['teacher_documentation'][0] == 0)
					{
						echo
						'
							<option value="0">No</option>
							<option value="1">Si</option>
						';
					}
					echo'
				</select>
				<label class="label">Observaci??n</label>
				<input class="text" type="text" name="txtobservation" value="'.$_SESSION['teacher_observation'][0].'" disabled/>
			</div>
			<button class="btn icon icon-confirm" type="submit"></button>
        </form>
    </div>
</div>
<div class="form-options">
	<div class="options">
		<form action="#" method="POST">
			<button class="btn disabled icon icon-plus" name="btn" value="form_add" type="submit" disabled></button>
		</form>
		<form action="#" method="POST">
			<button class="btn disabled icon icon-coding" name="btn" value="form_coding" type="submit" disabled></button>
		</form>
		<form action="#" method="POST">
			<button class="btn disabled icon icon-printer" name="btn" value="form_printer" type="submit" disabled></button>
		</form>
		<form action="#" method="POST">
			<button class="btnexit icon icon-exit" name="btn" value="form_default" type="submit"></button>
		</form>
	</div>
	<div class="search">
		<form name="form-search" action="#" method="POST">
			<p>
				<input type="text" class="text" name="search" placeholder="Buscar..." maxlength="50">
				<button class="btn-search icon  icon-search" type="submit"></button>
			</p>
		</form>
	</div>
</div>
';
?>