<?php
require_once('modules/mUsuarios.php');

$obj=new mUsuarios();
$row=$obj->getUsuario($_GET['id']);
?>

<div class="col-md-6 col-md-offset-3">

<div class="panel panel-success">
      <div class="panel-heading">
            <h3 class="panel-title">Mis datos</h3>
      </div>
      <div class="panel-body">
        <div class="form-group">
        </div>
        <div class="form-group">
            <label for="">Usuario</label>
            <p><?php echo $row['usuario']?></p>
        </div>
        <div class="form-group">
            <label for="">Contraseña</label>
            <p><?php echo md5($row['contrasena'])?></p>
        </div>
      </div>
</div>
</div>
