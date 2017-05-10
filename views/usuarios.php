<?php

require_once('modules/mUsuarios.php');

$obj= new mUsuarios();
$data=$obj->getUsuariosActivos();
if(isset($_GET['id']))
{
    $obj->inhabilitarUsuario($_GET['id']);
}
?>

<div id="contenedor">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>USUARIO</th>
                <th>CONTRASEÑA</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $row): ?>
            <tr>
                <td><?php echo ($row['idUsuario'])?></td>
                <td><?php echo ($row['usuario'])?></td>
                <td><?php echo (md5($row['contrasena']))?></td>
                <td>
                <a type="button" class="btn btn-warning" href='?sec=usuarios&id=<?php echo $row['idUsuario'] ?>'>Inhabilitar</a>
                </td>
            </tr>
             <?php endforeach; ?>
        </tbody>
    </table>
    
    <a type="button" class="btn btn-lg btn-success" href='?sec=formNuevoUsuario'>Nuevo</a>
    
</div>

