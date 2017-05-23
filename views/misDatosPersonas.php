<?php
require_once('modules/mPersonas.php');

$obj=new mPersonas();
$row=$obj->getPersona($_GET['id']);
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
            <label for="">Nombre</label>
            <p><?php echo $row['nombre']?></p>
        </div>
        <div class="form-group">
            <label for="">Apellido paterno</label>
            <p><?php echo $row['appaterno']?></p>
        </div>
        <div class="form-group">
            <label for="">Apellido materno</label>
            <p><?php echo $row['apmaterno']?></p>
        </div>
        <div class="form-group">
            <label for="">Edad</label>
            <p><?php echo $row['edad']?></p>
        </div>
        <div class="form-group">
            <label for="">Sexo</label>
            <p><?php echo $row['sexo']?></p>
        </div>
        <div class="form-group">
            <label for="">Correo eléctronico</label>
            <p><?php echo $row['correo']?></p>
        </div>
        <div class="form-group">
            <label for="">Teléfono</label>
            <p><?php echo $row['telefono']?></p>
        </div>
        <div class="form-group">
            <label for="">Dirección</label>
            <p><?php echo $row['direccion']?></p>
        </div>
        <div class="form-group">
            <label for=""># Dirección</label>
            <p><?php echo $row['numDireccion']?></p>
        </div>
        <div class="form-group">
            <label for="">Municipio</label>
            <p><?php echo $row['municipio']?></p>
        </div>
        <div class="form-group">
            <label for="">Estado</label>
            <p><?php echo $row['estado']?></p>
        </div>
      </div>
</div>

    
</div>
