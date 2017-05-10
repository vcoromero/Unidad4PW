<?php

require_once ('modules/mPersonas.php');

$obj=new mPersonas();
$row=$obj->getPersona($_GET['id']);

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

    $obj->updatePersona($_GET['id'], $nombre, $appat, $apmat, $edad, $sexo, $correo, $telefono, $direccion, $numeroDireccion, $municipio, $estado);
	
}
?>

<div id="contenedor">
    

<form action="" method="POST" role="form" oninput="range_edad_valor.value = edad.valueAsNumber">
    <legend>Nueva persona</legend>

    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre" value="<?php echo($row['nombre']); ?>">
    </div>
    <div class="form-group">
        <label for="">Apellido paterno</label>
        <input type="text" class="form-control" name="appat" placeholder="Ingrese apellido" value="<?php echo($row['appaterno']); ?>">
    </div>
    <div class="form-group">
        <label for="">Apellido materno</label>
        <input type="text" class="form-control" name="apmat" placeholder="Ingrese apellido" value="<?php echo($row['apmaterno']); ?>">
    </div>
    <div class="form-group">
        <label for="">Edad</label>
        <input type="range" class="form-control" name="edad" min="0" max="100" value="<?php echo($row['edad']); ?>"><output for="edad" name="range_edad_valor"><?php echo($row['edad']); ?></output>
    </div>
        <?php
            if($row['sexo']=='m')
            {
                echo '<div class="form-group">';
                    echo '<label for="">Sexo</label>';
                    echo '<div class="radio">';
                        echo '<label>';
                        echo '<input type="radio" class="form-control" name="sexo" value="m" checked="">M';
                        echo '</label>';
                    echo '</div>';
                echo '</div>';
                echo '<div class="form-group">';
                    echo '<div class="radio">';
                        echo '<label>';
                        echo '<input type="radio" class="form-control" name="sexo" value="f">F';
                        echo '</label>';
                    echo '</div>';
                echo '</div>';
            }
            else
            {
              echo '<div class="form-group">';
                    echo '<label for="">Sexo</label>';
                    echo '<div class="radio">';
                        echo '<label>';
                        echo '<input type="radio" class="form-control" name="sexo" value="m">M';
                        echo '</label>';
                    echo '</div>';
                echo '</div>';
                echo '<div class="form-group">';
                    echo '<div class="radio">';
                        echo '<label>';
                        echo '<input type="radio" class="form-control" name="sexo" value="f" checked="">F';
                        echo '</label>';
                    echo '</div>';
                echo '</div>';  
            }
        ?>
     <div class="form-group">
        <label for="">Correo eléctronico</label>
        <input type="mail" class="form-control" name="correo" placeholder="Ingrese correo eléctronico" value="<?php echo($row['correo']); ?>">
    </div>
    <div class="form-group">
        <label for="">Teléfono</label>
        <input type="tel" class="form-control" name="telefono" placeholder="Ingrese número telefónico" value="<?php echo($row['telefono']); ?>">
    </div>
    <div class="form-group">
        <label for="">Dirección</label>
        <input type="text" class="form-control" name="direccion" placeholder="Ingrese dirección" value="<?php echo($row['direccion']); ?>">
    </div>
    <div class="form-group">
        <label for=""># Dirección</label>
        <input type="text" class="form-control" name="numeroDireccion" placeholder="Ingrese # de dirección" value="<?php echo($row['numDireccion']); ?>">
    </div>
    <div class="form-group">
        <label for="">Municipio</label>
        <input type="text" class="form-control" name="municipio" placeholder="Municipios" list="listaMunicipios" value="<?php echo($row['municipio']); ?>">
        <datalist id="listaMunicipios">
					<option>Balancán</option>
					<option>Cárdenas</option>
					<option>Centla</option>
					<option>Centro</option>
                    <option>Jalpa de Mendez</option>
                    <option>Tacotalpa</option>
		</datalist>
    </div>
    <div class="form-group">
        <label for="">Estados</label>
        <input type="text" class="form-control" name="estado" placeholder="Estados" list="listaEstados" value="<?php echo($row['estado']); ?>">
        <datalist id="listaEstados">
					<option>Tabasco</option>
					<option>Baja California</option>
					<option>Baja California Sur</option>
		</datalist>
    </div>
    <button type="submit" class="btn btn-primary" name="btnenviar">Modificar</button>
</form>

</div>