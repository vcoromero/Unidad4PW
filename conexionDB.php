<?php 
class ConexionBD extends PDO { 

	private $db_host    = 'localhost';
	private $db_user    = 'root';
	private $db_pass    = '';
	private $db_database   = 'formulariophp'; 



	public function __construct() {

		try{
			parent::__construct('mysql:host='.$this->db_host.';dbname='.$this->db_database, $this->db_user, $this->db_pass ,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
		}
		catch(PDOException $e){
			echo "No se pudo conectar a la base de datos.Error:".$e;

		} 
	} 
}
?>