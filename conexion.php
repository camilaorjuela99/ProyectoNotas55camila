<?php
class conexion
{

	protected $db;
	private $drive = "mysql";
	private $host = "localhost";
	private $dbname = "notas2023";
	private $user = "root";
	private $password = "";




public function_construct()
{
	try
	{
		$db = new PDO("{$this->drive}:host={$this->host};dbname={$this->dbname}",$this->user,$this->password);

		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $db;

		echo "Conexion realizada";
	
}catch(PDOException $e){

	echo "Se tiene problemas para conectar".$e->getMessage();
}


}


}


?>