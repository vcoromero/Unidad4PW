<?php

require_once('conexionDB.php');

class mPersonas
{
    public function getPersona($id)
    {
        $cn=new conexionDB();
		$qr=$cn->prepare('SELECT * FROM persona where idpersona=:id and estadopersona=1');
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
    public function getPersonasActivos()
    {
        $cn=new conexionDB();
		$qr=$cn->prepare('SELECT * FROM persona where estadopersona=1');
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
    public function getPersonasInactivos()
    {
        $cn=new conexionDB();
		$qr=$cn->prepare('SELECT * FROM persona where estadopersona=0');
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
    public function inhabilitarPersona($id)
    {
        $cn=new conexionDB();
		$qr=$cn->prepare('UPDATE persona set estadopersona=0 where idpersona=:id');
		$qr->bindParam(':id',$id);
		$qr->execute();

		if($qr)
		{
			header("location: ?sec=personas");
            return true;
		} 
    }
    public function insertPersona($nombre, $appaterno, $apmaterno, $edad, $sexo, $correo, $telefono, $direccion, $numDireccion, $municipio, $estado)
    {
        $cn = new conexionDB();
		$qr = $cn->prepare('INSERT INTO persona(nombre, appaterno, apmaterno, edad, sexo, correo, telefono, direccion, numDireccion, municipio, estado, estadoPersona) 
                            VALUES(:nombre, :appaterno, :apmaterno, :edad, :sexo, :correo, :telefono, :direccion, :numDireccion, :municipio, :estado, 1)');
		$qr->bindParam(':nombre', $nombre);
		$qr->bindParam(':appaterno', $appaterno);
		$qr->bindParam(':apmaterno', $apmaterno);
		$qr->bindParam(':edad', $edad);
		$qr->bindParam(':sexo', $sexo);
		$qr->bindParam(':correo', $correo);
		$qr->bindParam(':telefono', $telefono);
		$qr->bindParam(':direccion', $direccion);
		$qr->bindParam(':numDireccion', $numDireccion);
		$qr->bindParam(':municipio', $municipio);
		$qr->bindParam(':estado', $estado);
		$qr->execute();
		if($qr)
		{
			header('location: ?sec=personas');
			return true;
		}
		else
		{
			return false;
		}

    }
    public function updatePersona($id, $nombre, $appaterno, $apmaterno, $edad, $sexo, $correo, $telefono, $direccion, $numDireccion, $municipio, $estado)
	{

		$cn = new conexionDB();
		$qr = $cn->prepare('UPDATE persona set nombre=:nombre, appaterno=:appaterno, apmaterno=:apmaterno, edad=:edad, sexo=:sexo, correo=:correo, telefono=:telefono, 
                            direccion=:direccion, numDireccion=:numDireccion, municipio=:municipio, estado=:estado where idpersona=:id');
		$qr->bindParam(':id', $id);
		$qr->bindParam(':nombre', $nombre);
		$qr->bindParam(':appaterno', $appaterno);
		$qr->bindParam(':apmaterno', $apmaterno);
		$qr->bindParam(':edad', $edad);
		$qr->bindParam(':sexo', $sexo);
		$qr->bindParam(':correo', $correo);
		$qr->bindParam(':telefono', $telefono);
		$qr->bindParam(':direccion', $direccion);
		$qr->bindParam(':numDireccion', $numDireccion);
		$qr->bindParam(':municipio', $municipio);
		$qr->bindParam(':estado', $estado);
		$qr->execute();

		if($qr)
		{
			header("location: ?sec=personas");
            return true;
		}  
		
	}
}

?>