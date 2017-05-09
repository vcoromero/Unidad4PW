<?php
require_once ('conexionDB.php');
class mFormulario {

	/*tabla formulario*/
	private $idFormulario;
	private $nombre;
	private $appaterno;
	private $apmaterno;
	private $edad;
	private $sexo;
	private $correo;
	private $telefono;
	private $direccion;
	private $numDireccion;
	private $municipio;
	private $estado;
	
	const mitabla = 'tablaFormulario';

	public function getDatos(){
		$cn=new conexionBD();
		$qr=$cn->prepare("select * from ".self::mitabla);
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
	public function insertFormulario($pnombre, $pappaterno, $papmaterno, $pedad, $psexo, $pcorreo, $ptelefono, $pdireccion, $pnumDireccion, $pmunicipio, $pestado){

		$cn = new conexionBD();
		$qr = $cn->prepare('INSERT INTO '.self::mitabla.' (nombre, appaterno, apmaterno, edad, sexo, correo, telefono, direccion, numDireccion, municipio, estado) VALUES(:nombre, :appaterno, :apmaterno, :edad, :sexo, :correo, :telefono, :direccion, :numDireccion, :municipio, :estado)');
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
		$conexion = null;
		return true;
		
	}
}
?>