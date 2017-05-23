<?php

    if(isset($_POST['usuario']) && isset($_POST['contrasena']))
    {

        include ('modules/mAcceso.php');
        $obj= new mAcceso();
        $data=$obj->validarLogin($_POST['usuario'], $_POST['contrasena']);

    }

?>
<!DOCTYPE html>
<html lang="es">
<?php include('templates/head.php'); ?>
 <body class="jumbotron">
        <div class="container">
            <div class="row">   
                <div style="margin-top:7%" class="col-md-4 col-md-offset-4">
                    <div class="panel panel-success">
                        <div class="panel-body">
                        <form action="" method="POST" role="form">
                        <legend>Ingrese</legend>
                            <div class="form-group">
                                <label for="">Usuario</label>
                                <input type="text" class="form-control" name="usuario" placeholder="Ingresa tu usuario">
                            </div>    
                            <div class="form-group">
                                <label for="">Contraseña</label>
                                <input type="password" class="form-control" name="contrasena" placeholder="Ingresa tu contraseña">
                            </div>
              
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                        <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include('templates/footer.php'); ?>
</body>
</html>