<?php

require_once ('modules/mPersonas.php');

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


	$obj= new mPersonas();
    $obj->insertPersona($nombre, $appat, $apmat, $edad, $sexo, $correo, $telefono, $direccion, $numeroDireccion, $municipio, $estado);
	
}
?>

<div id="contenedor">
    

<form action="" method="POST" role="form" oninput="range_edad_valor.value = edad.valueAsNumber">
    <legend>Nueva persona</legend>

    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre">
    </div>
    <div class="form-group">
        <label for="">Apellido paterno</label>
        <input type="text" class="form-control" name="appat" placeholder="Ingrese apellido">
    </div>
    <div class="form-group">
        <label for="">Apellido materno</label>
        <input type="text" class="form-control" name="apmat" placeholder="Ingrese apellido">
    </div>
    <div class="form-group">
        <label for="">Edad</label>
        <input type="range" class="form-control" name="edad" min="0" max="100" value="0"><output for="edad" name="range_edad_valor">0</output>
    </div>
    <div class="form-group">
        <label for="">Sexo</label>
        
        <div class="radio">
            <label>
            <input type="radio" class="form-control" name="sexo" value="m">M
            </label>
        </div>   
    </div>
    <div class="form-group">
        <div class="radio">
            <label>
            <input type="radio" class="form-control" name="sexo" value="f">F
            </label>
        </div>   
    </div>
     <div class="form-group">
        <label for="">Correo eléctronico</label>
        <input type="mail" class="form-control" name="correo" placeholder="Ingrese correo eléctronico">
    </div>
    <div class="form-group">
        <label for="">Teléfono</label>
        <input type="tel" class="form-control" name="telefono" placeholder="Ingrese número telefónico">
    </div>
    <div class="form-group">
        <label for="">Dirección</label>
        <input type="text" class="form-control" name="direccion" placeholder="Ingrese dirección">
    </div>
    <div class="form-group">
        <label for=""># Dirección</label>
        <input type="text" class="form-control" name="numeroDireccion" placeholder="Ingrese # de dirección">
    </div>
    <div class="form-group">
        <label for="">Municipio</label>
        <input type="text" class="form-control" name="direccion" placeholder="Municipios" list="listaMunicipios">
        <datalist id="listaMunicipios">
					<option>Balancán</option>
					<option>Cárdenas</option>
					<option>Centla</option>
					<option>Centro</option>
		</datalist>
    </div>
    <div class="form-group">
        <label for="">Estados</label>
        <input type="text" class="form-control" name="direccion" placeholder="Municipios" list="listaEstados">
        <datalist id="listaEstados">
					<option>Tabasco</option>
					<option>Baja California</option>
					<option>Baja California Sur</option>
		</datalist>
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
    <button type="reset" class="btn btn-primary">Limpiar</button>
</form>

</div>