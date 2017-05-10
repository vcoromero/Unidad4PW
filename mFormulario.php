<?php
require_once ('conexionDB.php');
class mFormulario {
	
	const mitabla = 'persona';

	public function getPersona($id){
		$cn=new conexionBD();
		$qr=$cn->prepare("select * from ".self::mitabla." where idpersonas=:id and estadoPersona=1");
		$qr->bindParam(':id',$id);
		$qr->execute();
		if ($qr) 
		{
			return $qr->fetch();
		} 
		else 
		{
			return 0;
		}	

	}
	public function getPersonas(){
		$cn=new conexionBD();
		$qr=$cn->prepare("select * from ".self::mitabla." where estadoPersona=1");
		$qr->execute();
		if ($qr) 
		{
			return $qr->fetchAll();
		} 
		else 
		{
			return 0;
		}	

	}
	
	public function insertPersona($pnombre, $pappaterno, $papmaterno, $pedad, $psexo, $pcorreo, $ptelefono, $pdireccion, $pnumDireccion, $pmunicipio, $pestado){

		$cn = new conexionBD();
		$qr = $cn->prepare('INSERT INTO '.self::mitabla.' (nombre, appaterno, apmaterno, edad, sexo, correo, telefono, direccion, numDireccion, municipio, estado, estadoPersona) VALUES(:nombre, :appaterno, :apmaterno, :edad, :sexo, :correo, :telefono, :direccion, :numDireccion, :municipio, :estado, 1)');
		$qr->bindParam(':nombre', $pnombre);
		$qr->bindParam(':appaterno', $pappaterno);
		$qr->bindParam(':apmaterno', $papmaterno);
		$qr->bindParam(':edad', $pedad);
		$qr->bindParam(':sexo', $psexo);
		$qr->bindParam(':correo', $pcorreo);
		$qr->bindParam(':telefono', $ptelefono);
		$qr->bindParam(':direccion', $pdireccion);
		$qr->bindParam(':numDireccion', $pnumDireccion);
		$qr->bindParam(':municipio', $pmunicipio);
		$qr->bindParam(':estado', $pestado);
		$qr->execute();
		return true;
		
	}
	public function inhabilitarPersona($id)
	{
		$cn=new conexionBD();
		$qr=$cn->prepare("update ".self::mitabla." set estadoPersona=0 where idpersonas=:id");
		$qr->bindParam(':id',$id);
		$qr->execute();

		if($qr)
		{
			header("location: tabla.php");
            return true;
		}  
	}
	public function updatePersona($id, $pnombre, $pappaterno, $papmaterno, $pedad, $psexo, $pcorreo, $ptelefono, $pdireccion, $pnumDireccion, $pmunicipio, $pestado)
	{

		$cn = new conexionBD();
		$qr = $cn->prepare('update '.self::mitabla.' set nombre=:nombre, appaterno=:appaterno, apmaterno=:apmaterno, edad=:edad, 
		sexo=:sexo, correo=:correo, telefono=:telefono, direccion=:direccion, numDireccion=:numDireccion, municipio=:municipio, estado=:estado where idpersonas=:id');
		$qr->bindParam(':id', $id);
		$qr->bindParam(':nombre', $pnombre);
		$qr->bindParam(':appaterno', $pappaterno);
		$qr->bindParam(':apmaterno', $papmaterno);
		$qr->bindParam(':edad', $pedad);
		$qr->bindParam(':sexo', $psexo);
		$qr->bindParam(':correo', $pcorreo);
		$qr->bindParam(':telefono', $ptelefono);
		$qr->bindParam(':direccion', $pdireccion);
		$qr->bindParam(':numDireccion', $pnumDireccion);
		$qr->bindParam(':municipio', $pmunicipio);
		$qr->bindParam(':estado', $pestado);
		$qr->execute();

		if($qr)
		{
			header("location: tabla.php");
            return true;
		}  
		
	}
}
?>