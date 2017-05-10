<?php
include('auth.php');

require_once ('mFormulario.php');

$row=mFormulario::getPersona($_GET['id']);
if(isset($_POST['btnenviar']))
{
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


	$data=mFormulario::updatePersona($_GET['id'], $nombre, $appat, $apmat, $edad, $sexo, $correo, $telefono, $direccion, $numeroDireccion, $municipio, $estado);
	
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
<p>Bienvenido <strong><?php echo $_SESSION['usuario']?></strong></p>
<a href="salir.php">Cerrar sesion</a>
	<div id="contenedor">
		<form method="POST" oninput="range_edad_valor.value = edad.valueAsNumber">
			<!--Input del nombre-->
			<input type="text" name="nombre" placeholder="Nombre" class="campo" value="<?php echo($row['nombre']); ?>">
			<!--Input para los apellidos-->	
			<div class="campo">
				<input type="text" name="appat" placeholder="Apellido paterno" value="<?php echo($row['appaterno']); ?>">
				<input type="text" name="apmat" placeholder="Apellido materno" value="<?php echo($row['apmaterno']); ?>">
			</div>
			<!--Inputs para edad y sexo, por separado-->
			<div class="campo">
			Edad<input type="range" name="edad" min="0" max="100" value="<?php echo($row['edad']); ?>"><output for="edad" name="range_edad_valor"><?php echo($row['edad']);?></output>
			<?php
			if($row['sexo']=='m')
			{
				echo'Sexo<input type="radio" name="sexo" value="m" checked=""> M <input type="radio" name="sexo" value="f"> F';
			}
			else
			{
				echo'Sexo<input type="radio" name="sexo" value="m"> M <input type="radio" name="sexo" value="f" cheked=""> F';
			}
			?>
				
			</div>
			<!--Inputs para información de contacto-->
			<div class="campo">
				<input type="mail" name="correo" placeholder="Correo" value="<?php echo($row['correo']); ?>">
				<input type="tel" name="telefono" placeholder="Teléfono" value="<?php echo($row['telefono']); ?>">
			</div>
			<!--Inputs para las direccion-->
			<div class="campo">
				<input type="text" name="direccion" placeholder="Dirección" value="<?php echo($row['direccion']); ?>">
				<input type="text" name="numeroDireccion" placeholder="#" value="<?php echo($row['numDireccion']); ?>">
			</div>
			<!--Inputs y lista de datos para municipios y estados-->
			<div class="campo">
				<input type="text" name="municipio" placeholder="Municipio" list="listaMunicipios" value="<?php echo($row['municipio']); ?>">
				<datalist id="listaMunicipios">
					<option>Balancán</option>
					<option>Cárdenas</option>
					<option>Centla</option>
					<option>Centro</option>
				</datalist>
				<input type="text" name="estado" placeholder="Estado" list="listaEstados" value="<?php echo($row['estado']); ?>">
				<datalist id="listaEstados">
					<option>Tabasco</option>
					<option>Baja California</option>
					<option>Baja California Sur</option>
				</datalist>
			</div class="campo">
			<!-- Botones -->
			<input type="submit" class="boton" name="btnenviar">
			
			<a href="tabla.php" class="boton">Tabla</a>
			</a>
		</form>
	</div>
</body>

</html>