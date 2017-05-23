<div class="container-fluid">

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <a class="navbar-brand" href="?sec=home">Programación web</a>
    <ul class="nav navbar-nav">
        <li><a href="?sec=usuarios">Usuarios</a></li>
        <li><a href="?sec=personas">Personas</a></li>
    </ul>
     <ul style="margin:0" class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  
			       <?php  echo $_SESSION['usuario']; ?>
                    
                 <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="?sec=misDatosUsuarios&id=<?php echo $_SESSION['idUsuario']?>">Mis datos</a></li>
                    <li><a href="?sec=contrasena">Cambiar contraseña</a></li>
                    <li><a href="salir.php">Cerrar Sesion</a></li>
                </ul>
            </li>
    </ul>
</nav>
</div>