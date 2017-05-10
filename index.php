 <?php
 
 if(isset($_POST['usuario']) && isset($_POST['contrasena'])){

 require_once('mAcceso.php');
 $obj=new mAcceso();
 $data= $obj->validarLogin($_POST['usuario'], $_POST['contrasena']);
}
?>

<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Unidad 4 PROG WEB</title>
</head>
<body>
	<div id="contenedor">
		<form method="POST">
			<h2>Inicie sesión</h2>
			<input type=text name='usuario' placeholder="Ingrese usuario" class="campo"> 
			<input type=password name='contrasena' placeholder="Ingrese contraseña" class="campo"> 
			<button class="boton" name="btnenviar">INGRESAR</button>
		</form> 
	</div>
</body>
</html>