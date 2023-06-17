<?php
include_once('../../conexion.php');
class Estudiantes extends conexion
{
	public function_construct()
	{
		$this->db = parent::_construct();
	}
	//inserta un usuario
	public function agregarad($Nombread,$Apellidoad,$Documentoad,$Correoad,$Materiasad,$Docentead,$Promedioad,$fecha_registroad)
	{
		$statement = $this->db->prepare("INSERT INTO estudiante (Nombrees,Apellidoes,Documentoes,Correoes,Materiaes,Docente,Promedio,FECHA_REGISTRO)values(:Nombread,:Apellidoad,:Documentoad,:Correoad,:Materiasad,:Docentead,:Promedioad,:fecha_registroad)");

		$statement->bindParam(":Nombread",$Nombread);
		$statement->bindParam(":Apellidoad,$Apellidoad");
		$statement->bindParam(":Documentoad",$Documentoad);
		$statement->bindParam(":Correoad",$Correoad);
		$statement->bindParam(":Materiasad",$Materiasad);
		$statement->bindParam(":Docentead",$Docentead);
		$statement->bindParam(":Promedioad",$Promedioad);
		$statement->bindParam(":fecha_registroad",$fecha_registroad);
		if ($statement->execute())
		{
			echo "Estudiante registrado";
			header('Location: ../pages/index.php');
		}else
		{
			echo "No se puede realizar el registro";
			header('Location: ../pages/agregar.php');
		}
	}
	public function getad()
	{
		$row = null;
		$statement =$this->db->prepare("SELECT * FROM estudiante WHERE Perfilu='Estudiantes'");
		$statement->execute();
		while($resul =$statement->fetch())
		{
			$row[]=$resul;
		}
		return $row;
	}
	public function getidad($Id)
	{
		$row = null;
		$statement=$this->db->prepare("SELECT * FROM estudiante WHERE Perfilu='Estudiantes' AND id_usuario=:Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();
		while($resul = $statement->fetch())
		{
			$row=$resul;
		}
		return $row;

	}
	public function updatead($Id,$Nombread,$Apellidoad,$Documentoad,$Correoad,$Materiasad,$Docentead,$Promedioad,$fecha_registroad)
	{
		$statement=$this->db->prepare("UPDATE estudiante SET Nombrees=:Nombread, Apellidoes=:Apellidoad,Documentoes=:Documentoad,Correoes=:Correoad,Materiaes=:Materiasad,Docente=:Docentead,Promedio=:Promedioad,FECHA_REGISTRO=:fecha_registroad WHERE id_estudiante=$Id");
		$statement->bindParam(':Id',$Id);
		$statement->bindParam(':Nombread',$Nombread);
		$statement->bindParam(':Apellidoad',$Apellidoad);
		$statement->bindParam(":Documentoad",$Documentoad);
		$statement->bindParam(":Correoad",$Correoad);
		$statement->bindParam(":Materiasad",$Materiasad);
		$statement->bindParam(":Docentead",$Docentead);
		$statement->bindParam(":Promedioad",$Promedioad);
		$statement->bindParam(":fecha_registroad",$fecha_registroad);
		if ($statement->execute)
		 {
			header('Location: ../pages/index.php');	
		}else
		{
			header('Location: ../pages/editar.php');
		}

	}
	public function deletead($Id)
	{
		$statement=$this->db->prepare("DELETE * FROM estudiante WHERE id_estudiante=:Id");
		$statement->bindParam(':Id',$Id);
		IF($statement->execute())
		{
			echo "Estudiante eliminado";
			header('Location:../pages/index.php');
		}else
		{
			echo "El Usuario no se puede eliminar";
			header('Location:../pages/eliminar.php');
		}
	}

}
?>