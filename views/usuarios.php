<?php

require_once('modules/mUsuarios.php');

$obj= new mUsuarios();
$data=$obj->getUsuariosActivos();
$n=1;
if(isset($_GET['id']))
{
    $obj->inhabilitarUsuario($_GET['id']);
}
?>

<div id="contenedor">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>USUARIO</th>                
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $row): ?>
            <tr>
                <td><?php echo $n++; ?></td>
                <td><a href="?sec=misDatosUsuarios&id=<?php echo $row['idUsuario'] ?>"><?php echo ($row['usuario'])?></a></td>
                <td>
                <a type="button" class="btn btn-danger" href='?sec=usuarios&id=<?php echo $row['idUsuario'] ?>'>Inhabilitar</a>
                <a type="button" class="btn btn-warning" href="?sec=formEditarUsuario&id=<?php echo $row['idUsuario'] ?>">Editar</a>
                
                </td>
            </tr>
             <?php endforeach; ?>
        </tbody>
    </table>
    
    <a type="button" class="btn btn-lg btn-block btn-success" href='?sec=formNuevoUsuario'>Nuevo</a>
    
    
    
</div>

