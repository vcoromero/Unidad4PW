<?php

    if(isset($_POST['usuario']) && isset($_POST['contrasena']))
    {

        include ('modules/mAcceso.php');
        $obj= new mAcceso();
        $data=$obj->validarLogin($_POST['usuario'], $_POST['contrasena']);

    }

?>
<?php include('templates/head.php'); ?>
<body>
    <div id="contenedorLogin">
    
    <form action="" method="POST" role="form">
        <legend>Ingrese</legend>
    
        <div class="form-group">
            <label for="">Usuario</label>
            <input type="text" class="form-control" name="usuario" placeholder="Ingresa tu usuario">
            <label for="">Contraseña</label>
            <input type="password" class="form-control" name="contrasena" placeholder="Ingresa tu contraseña">
        </div>
    
        
    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
</body>
<?php include('templates/footer.php'); ?>