<?php 
require('mFormulario.php');
$obj=  new mFormulario();
$data=$obj->getDatos(); 

?>
<!DOCTYPE html>
<html lang="es" >
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Tabla</title>
</head>
<body>
		<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>EDAD</th>
                <th>SEXO</th>
                <th>CORREO</th>
                <th>TELÉFONO</th>
                <th>DIRECCION</th>
                <th># DIRECCIÓN</th>
                <th>ESTADO</th>
                <th>MUNICIPIO</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>


            <?php foreach($data as $row): ?>
                
                        <tr>
                            <td><?php echo($row['id']); ?></td>
                            <td><?php echo($row['nombre']); ?></td>
                            <td><?php echo($row['appaterno']); ?></td>
                            <td><?php echo($row['apmaterno']); ?></td>
                            <td><?php echo($row['edad']); ?></td>
                            <td><?php echo($row['sexo']); ?></td>
                            <td><?php echo($row['correo']); ?></td>
                            <td><?php echo($row['telefono']); ?></td>
                            <td><?php echo($row['direccion']); ?></td>
                            <td><?php echo($row['numDireccion']); ?></td>
                            <td><?php echo($row['estado']); ?></td>
                            <td><?php echo($row['municipio']); ?></td>

                            <td>
                            <a class="boton" href="<?php echo "mFormulario?";?>">Eliminar</a>
                            <a class="boton" href="<?php echo "mFormulario?";?>">Editar</a>
                            </td>
                        </tr>
            <?php

            endforeach;

            ?>

        </tbody>
    </table>
</div>
</body>
</html>