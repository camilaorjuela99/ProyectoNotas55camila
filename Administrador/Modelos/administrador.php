<?php
include_once('../../conexion.php');
class Administrador extends conexion
{
	public function_construct()
	{
		$this->db = parent::_construct();
	}

	public function agregarad($Nombread,$Apellidoad,$Usuarioad,$Password,$Perfilad,$Estadoad)
	{
		$statement = $this->db->prepare("INSERT INTO usuarios(Nombreu,Apellidou,Usuario,Passwordu,Perfilu,Estadou)values(Nombread,:Apellidoad,:Usuarioad,:Passwordad,:Perfilad,:Estadoad)");


	}
}
?>
