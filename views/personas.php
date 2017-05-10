<?php

require_once('modules/mPersonas.php');

$obj= new mPersonas();
$data=$obj->getPersonasActivos();
if(isset($_GET['id']))
{
    $obj->inhabilitarPersona($_GET['id']);
}
?>

<div id="contenedor">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $row): ?>
            <tr>
                <td><?php echo ($row['idpersona'])?></td>
                <td><?php echo ($row['nombre'].' '.$row['appaterno'].' '.$row['apmaterno'])?></td>
                <td>
                <a type="button" class="btn btn-danger" href='?sec=personas&id=<?php echo $row['idpersona'] ?>'>Inhabilitar</a>
                <a type="button" class="btn btn-warning" href="?sec=formEditarPersona&id=<?php echo $row['idpersona'] ?>">Editar</a>
                </td>
            </tr>
             <?php endforeach; ?>
        </tbody>
    </table>
    
    <a type="button" class="btn btn-lg btn-success" href='?sec=formNuevaPersona'>Nuevo</a>
    
</div>

