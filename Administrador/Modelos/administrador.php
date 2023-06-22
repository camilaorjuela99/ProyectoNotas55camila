<?php
include_once('../../conexion.php');
class Administrador extends conexion
{
	public function_construct()
	{
		$this->db = parent::_construct();
	}
	//inserta un usuario
	public function addadmi($Nombread,$Apellidoad,$Usuarioad,$Password,$Perfilad,$Estadoad)
	{
		$statement = $this->db->prepare("INSERT INTO usuarios(Nombreu,Apellidou,Usuario,Passwordusu,Perfil,Estadousu)values(:Nombread,:Apellidoad,:Usuarioad,:Passwordad,:Perfilad,:Estadoad)");

		$statement->bindParam(':Nombread',$Nombread);
		$statement->bindParam(':Apellidoad',$Apellidoad);
		$statement->bindParam(':Usuarioad',$Usuarioad);
		$statement->bindParam(':Passwordad',$Passwordad);
		$statement->bindParam(':Perfilad',$Perfilad);
		$statement->bindParam(':Estadoad',$Estadoad);
		if ($statement->execute())
		 {
			echo "Usuario registrado";
			header('Location: ../pages/index.php');
		}else
		{
			echo "No se puede realizar el registro";
			header('Location: ../pages/agregar.php');
		}
	}
	//funcion para seleccionar todos los usuarios con el rol administrador
	public function getad()
	{
		$row = null;
		$statement =$this->db->prepare("SELECT * FROM usuarios WHERE Perfilu='Administrador'");
		$statement->execute();
		while($resul =$statement->fetch())
		{
			$row[]=$resul;
		}
		return $row;
	}
	//funcion para seleccionar un usuario por su id
	public function getidad($Id)
	{
		$row = null;
		$statement=$this->db->prepare("SELECT * FROM usuarios WHERE Perfilu='Administrador' AND id_usuario=:Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();
		while($resul = $statement->fetch())
		{
			$row=$resul;
		}
		return $row;

	}
	//funcion para actualizar los datos del usuario
	public function updatead($Id,$Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Estadoad)
	{
		$statement=$this->db->prepare("UPDATE usuarios SET Nombreu=:Nombread, Apellidou=:Apellidoad,Usuario=:Usuarioad,Passwordu=:Passwordad,Estadou=:Estadoad WHERE id_usuario=$Id");
		$statement->bindParam(':Id',$Id);
		$statement->bindParam(':Nombread',$Nombread);
		$statement->bindParam(':Apellidoad',$Apellidoad);
		$statement->bindParam(':Usuarioad',$Usuarioad);
		$statement->bindParam(':Passwordad',$Passwordad);
		$statement->bindParam(':Estadoad',$Estadoad);

		if ($statement->execute)
		 {
			header('Location: ../pages/index.php');	
		}else
		{
			header('Location: ../pages/editar.php');
		}

	}
	//funcion para eliminar un usuario
	public function deletead($Id)
	{
		$statement=$this->db->prepare("DELETE * FROM usuarios WHERE id_usuario=:Id");
		$statement->bindParam(':Id',$Id);
		IF($statement->execute())
		{
			echo "Usuario eliminado";
			header('Location:../pages/index.php');
		}else
		{
			echo "El Usuario no se puede eliminar";
			header('Location:../pages/eliminar.php');
		}
	}

}

?>
