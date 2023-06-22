<?php

include_once('../../conexion.php');
class Materias extends conexion
{
	public function_construct()
	{
		$this->db = parent::_construct();
	}
public function agregarad($NombreMa)
	{
		$statement = $this->db->prepare("INSERT INTO materias(NombreMa)values (:NombreMaad)");

		$statement->bindParam(":NombreMaad",$NombreMaad);
		
		if ($statement->execute())
		 {
			echo "Materia registrada";
			header('Location: ../pages/index.php');
		}else
		{
			echo "No se puede realizar el registro";
			header('Location: ../pages/agregar.php');
		}
	}
	public function deletead($Id)
	{
		$statement=$this->db->prepare("DELETE * FROM materias WHERE id_materia=:Id");
		$statement->bindParam(':Id',$Id);
		IF($statement->execute())
		{
			echo "Materia eliminada";
			header('Location:../pages/index.php');
		}else
		{
			echo "El Usuario no se puede eliminar";
			header('Location:../pages/eliminar.php');
		}
	}

?>