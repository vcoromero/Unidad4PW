<?php

require_once ('modules/mUsuarios.php');

if(isset($_POST['btnenviar']))
{
	$contrasenaOld=$_POST['contrasenaOld'];
	$contrasenaNew1=$_POST['contrasenaNew1'];
    $contrasenaNew2=$_POST['contrasenaNew2'];

	$obj= new mUsuarios();
    $obj->cambiarContrasena($contrasenaOld, $contrasenaNew1, $contrasenaNew2);
}
?>

<div id="contenedor">
    

<form action="" method="POST" role="form">
    <legend>Cambiar contraseña</legend>

    <div class="form-group">
        <label for="">Contraseña actual</label>
        <input type="password" class="form-control" name="contrasenaOld" placeholder="Ingrese contraseña actual">
    </div>
    <div class="form-group">
        <label for="">Nueva contraseña</label>
        <input type="password" class="form-control" name="contrasenaNew1" placeholder="Ingrese nueva contraseña">
    </div>
    <div class="form-group">
        <label for="">Confirmar nueva contraseña</label>
        <input type="password" class="form-control" name="contrasenaNew2" placeholder="Confirme nueva contraseña">
    </div>
    <button type="submit" class="btn btn-primary" name="btnenviar">Cambiar</button>
    <button type="reset" class="btn btn-primary">Limpiar</button>
</form>

</div>