<?php

require_once ('modules/mUsuarios.php');

$obj=new mUsuarios();
$row=$obj->getUsuario($_GET['id']);

if(isset($_POST['btnenviar']))
{
	$usuario=$_POST['usuario'];
	$contrasenaOld=$_POST['contrasenaOld'];
	$contrasenaNew1=$_POST['contrasenaNew1'];
    $contrasenaNew2=$_POST['contrasenaNew2'];

    $obj->updateUsuario($_GET['id'], $usuario, $contrasenaOld, $contrasenaNew1, $contrasenaNew2);
	
}
?>

<div id="contenedor">
    

<form action="" method="POST" role="form" oninput="range_edad_valor.value = edad.valueAsNumber">
    <legend>Editar usuario</legend>

    <div class="form-group">
        <label for="">Usuario</label>
        <input type="text" class="form-control" name="usuario" placeholder="Ingrese nombre" value="<?php echo($row['usuario']); ?>">
    </div>
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
    <button type="submit" class="btn btn-primary" name="btnenviar">Modificar</button>
</form>

</div>