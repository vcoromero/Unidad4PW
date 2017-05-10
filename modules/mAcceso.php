<?php

require_once('conexionDB.php');

class mAcceso
{
    public function validarLogin($usuario, $contrasena)
    {
        $cn=new conexionDB();
        $qr=$cn->prepare('SELECT * from usuario where usuario=:usuario and contrasena=:contrasena and estadoUsuario=1');
        $qr->bindParam(':usuario',$usuario);
        $qr->bindParam(':contrasena',$contrasena);
        $qr->execute();

        session_start();
        if($row=$qr->fetch())
        {
            $_SESSION['idUsuario']=$row['idUsuario'];
            $_SESSION['usuario']=$row['usuario'];
            header('location: principal.php');
            return true;
        }
        else
        {
            header('location: index.php');
            return false;
        }
    }

}