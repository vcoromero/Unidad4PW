<?php

require_once ('mFormulario.php');

if(isset($_POST['btnenviar'])){


	$nombre=$_POST['nombre'];
	$appat=$_POST['appat'];
	$apmat=$_POST['apmat'];
	$edad=$_POST['edad'];
	$sexo=$_POST['sexo'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$numeroDireccion=$_POST['numeroDireccion'];
	$municipio=$_POST['municipio'];
	$estado=$_POST['estado'];


	$data=mFormulario::insertFormulario($nombre, $appat, $apmat, $edad, $sexo, $correo, $telefono, $direccion, $numeroDireccion, $municipio, $estado);
	
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Unidad 4 PROG WEB</title>
</head>

<body>
	<div id="contenedor">
		<form method="POST" oninput="range_edad_valor.value = edad.valueAsNumber">
			<!--Input del nombre-->
			<input type="text" name="nombre" placeholder="Nombre" class="campo">
			<!--Input para los apellidos-->	
			<div class="campo">
				<input type="text" name="appat" placeholder="Apellido paterno">
				<input type="text" name="apmat" placeholder="Apellido materno">
			</div>
			<!--Inputs para edad y sexo, por separado-->
			<div class="campo">
				Edad<input type="range" name="edad" min="0" max="100" value="0"><output for="edad" name="range_edad_valor">0</output>

				Sexo<input type="radio" name="sexo" value="m"> M <input type="radio" name="sexo" value="f"> F
			</div>
			<!--Inputs para información de contacto-->
			<div class="campo">
				<input type="mail" name="correo" placeholder="Correo">
				<input type="tel" name="telefono" placeholder="Teléfono">
			</div>
			<!--Inputs para las direccion-->
			<div class="campo">
				<input type="text" name="direccion" placeholder="Dirección">
				<input type="text" name="numeroDireccion" placeholder="#">
			</div>
			<!--Inputs y lista de datos para municipios y estados-->
			<div class="campo">
				<input type="text" name="municipio" placeholder="Municipio" list="listaMunicipios" >
				<datalist id="listaMunicipios">
					<option>Balancán</option>
					<option>Cárdenas</option>
					<option>Centla</option>
				</datalist>
				<input type="text" name="estado" placeholder="Estado" list="listaEstados" >
				<datalist id="listaEstados">
					<option>Tabasco</option>
					<option>Baja California</option>
					<option>Baja California Sur</option>
				</datalist>
			</div class="campo">
			<!-- Botones -->
			<input type="submit" class="boton" name="btnenviar">
			<input type="reset" class="boton">
			<a href="tabla.php" class="boton">Tabla</a>
			</a>
		</form>
	</div>
</body>

</html>