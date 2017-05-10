<?php

require_once ('modules/mUsuarios.php');

if(isset($_POST['btnenviar']))
{
	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];

	$obj= new mUsuarios();
    $obj->insertUsuario($usuario, $contrasena);
	
}
?>

<div id="contenedor">
    

<form action="" method="POST" role="form">
    <legend>Nuevo usuario</legend>

    <div class="form-group">
        <label for="">Usuario</label>
        <input type="text" class="form-control" name="usuario" placeholder="Ingrese usuario">
    </div>
    <div class="form-group">
        <label for="">Contraseña</label>
        <input type="password" class="form-control" name="contrasena" placeholder="Ingrese contraseña">
    </div>
    <button type="submit" class="btn btn-primary" name="btnenviar">Agregar</button>
    <button type="reset" class="btn btn-primary">Limpiar</button>
</form>

</div>