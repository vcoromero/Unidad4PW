<?php 
require('controllers/conexionDB.php');

class mAcceso{

	function validarLogin($usuario, $contrasena){
        $cn=new conexionBD;
        $query=$cn-> prepare("select * from usuario where usuario=:usuario and contrasena=:contrasena LIMIT 1");
        $query->execute([
        	'usuario'=>$usuario,
        	'contrasena'=>$contrasena]);
        if($query->fetch())
        {
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