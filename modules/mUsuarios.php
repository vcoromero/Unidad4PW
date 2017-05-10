<?php

require_once('conexionDB.php');

class mUsuarios
{
    public function getUsuario($id)
    {
        $cn=new conexionDB();
		$qr=$cn->prepare('SELECT * FROM usuario where idUsuario=:id and estadoUsuario=1');
		$qr->bindParam(':id',$id);
		$qr->execute();
		if ($qr) 
		{
			return $qr->fetch();
		} 
		else 
		{
			return false;
		}
    }
    public function getUsuariosActivos()
    {
        $cn=new conexionDB();
		$qr=$cn->prepare('SELECT * FROM usuario where idUsuario !=:id and estadoUsuario=1');
        $qr->bindParam(':id', $_SESSION['idUsuario']);
		$qr->execute();
		if ($qr) 
		{
			return $qr->fetchAll();
		} 
		else 
		{
			return false;
		}
    }
    public function getUsuariosInactivos()
    {
        $cn=new conexionDB();
		$qr=$cn->prepare('SELECT * FROM usuario where idUsuario !=:id and estadoUsuario=0');
        $qr->bindParam(':id', $_SESSION['idUsuario']);
		$qr->execute();
		if ($qr) 
		{
			return $qr->fetchAll();
		} 
		else 
		{
			return false;
		}
    }
    public function inhabilitarUsuario($id)
    {
        $cn=new conexionDB();
		$qr=$cn->prepare('UPDATE usuario set estadoUsuario=0 where idUsuario=:id');
		$qr->bindParam(':id',$id);
		$qr->execute();

		if($qr)
		{
			header("location: ?sec=usuarios");
            return true;
		} 
    }
    public function insertUsuario($usuario, $contrasena)
    {
        $cn = new conexionDB();
		$qr = $cn->prepare('INSERT INTO usuario(usuario, contrasena, estadoUsuario) VALUES(:usuario, :contrasena, 1)');
		$qr->bindParam(':usuario', $usuario);
		$qr->bindParam(':contrasena', $contrasena);
		$qr->execute();
		if($qr)
		{
			header('location: ?sec=usuarios');
			return true;
		}
		else
		{
			return false;
		}
    }
    public function cambiarContrasena($contrasenaOld, $contrasenaNew1, $contrasenaNew2)
    {
        $cn = new conexionDB();
		$qr = $cn->prepare('SELECT contrasena FROM usuario where usuario=:usuario and contrasena=:contrasena');
        $qr->bindParam(':usuario',$_SESSION['usuario']);
        $qr->bindParam(':contrasena',$contrasenaOld);
		$qr->execute();
		if($qr)
		{
            if($contrasenaNew1 == $contrasenaNew2)
            {
				$cn2 = new conexionDB();
                $qr2=$cn2->prepare('UPDATE usuario SET contrasena=:contrasena WHERE idUsuario=:id');
				$qr2->bindParam(':id', $_SESSION['idUsuario']);
                $qr2->bindParam(':contrasena',$contrasenaNew1);
		        $qr2->execute();
                if($qr2)
                {
					include('salir.php');
    				return true;
                }
            }
		}
		else
		{
			return false;
		}
    }
}

?>