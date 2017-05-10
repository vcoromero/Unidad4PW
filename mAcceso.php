<?php 
require('conexionDB.php');

class mAcceso{

	public function validarLogin($usuario, $contrasena){
        $cn=new conexionBD;
        $query=$cn-> prepare("select * from usuario where usuario=:usuario and contrasena=:contrasena LIMIT 1");
        $query->execute([
        	'usuario'=>$usuario,
        	'contrasena'=>$contrasena]);

            session_start();
        if($row=$query->fetch())
        {
            $_SESSION['usuario'] = $row['usuario'];	
        	
            header("location: formulario.php");  
            return true;
        }
        else
        {
        	header("location: index.php");  
            return false;
        }
    }
}
?>