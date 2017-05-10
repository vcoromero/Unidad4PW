<?php 
require_once('mFormulario.php');

$data=mFormulario::getPersonas(); 
if(isset($_GET['id']))
{
    $data=mFormulario::inhabilitarPersona($_GET['id']);
}

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
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $row): ?>
                
                        <tr>
                            <td><?php echo($row['idpersonas']); ?></td>
                            <td><a href="misdatos.php"><?php echo($row['nombre'])." ".$row['appaterno']." ".$row['apmaterno']?></a></td>
                            <td>
                            <a class="botonNuevo" href="?sec=persona&id=<?php echo $row['idpersonas'] ?>">Inhabilitar</a>
                            <!--<a class="botonNuevo" href="formularioEditar.php">Editar</a>-->
                            <a class="botonNuevo" href="formularioEditar.php?id=<?php echo $row['idpersonas'] ?>">Editar</a>
                            </td>
                        </tr>
            <?php

            endforeach;
            ?>
        </tbody>
    </table>
    <a href="formulario.php" class="botonNuevo" name="btnNuevoTutorado">Nuevo</a>
</div>
</body>
</html>