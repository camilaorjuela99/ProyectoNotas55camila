<?php

include_once('../../conexion.php');
class Docentes extends conexion
{
	public function_construct()
	{
		$this->db = parent::_construct();
	}
	//inserta un docente
	public function agregarad($Nombread,$Apellidoad,$Documentoad,$Materiasad,$NotasMatead)
	{
		$statement =$this->db->prepare("INSERT INTO docente(Nombredo,Apellidodo,Documentodo,Materiasdo,NotasMate)values(:Nombread,:Apellidoad,:Documentoad,:Materiasad,:NotasMatead)");

		$statement->bindParam(":Nombread",$Nombread);
		$statement->bindParam(":Apellidoad",$Apellidoad);
		$statement->bindParam(":Documentoad",$Documentoad);
		$statement->bindParam(":Materiasad",$Materiasad);
		$statement->bindParam(":NotasMatead",$NotasMatead);
		if ($statement->execute())
		 {
			echo "Docente registrado";
			header ("Location:../pages/index.php");
		}else
		{
			echo"No se puede realizar el registro";
			header("Location:../pages/agregar.php");
		}
	}
	public function getad()
	{
		$row =null;
		$statement =$this->db->prepare("SELECT * FROM docente WHERE Perfilu= 'Docentes'");
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
		$statement=$this->db->prepare("SELECT * FROM docente WHERE Perfilu='Docentes' AND id_docente=:Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();
		while($resul = $statement->fetch())
		{
			$row=$resul;
		}
		return $row;
	}

	public function updatead($Nombread,$Apellidoad,$Documentoad,$Materiasad,$NotasMatead);
	{
		$statement=$this->db->prepare("UPDATE docente SET Nombredo=:Nombread, Apellidodo=:Apellidoad, Documentodo=:Documentoad, Materiasdo=:Materiasad,NotasMate=NotasMatead WHERE id_docente=$Id");
		$statement->bindParam(':Id',$Id);
		$statement->bindParam(':Nombread',$Nombread);
		$statement->bindParam(':Apellidoad',$Apellidoad);
		$statement->bindParam(":Documentoad",$Documentoad);
		$statement->bindParam(":Materiasad",$Materiasad);
		$statement->bindParam(":NotasMatead",$NotasMatead);
		

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
		$statement=$this->db->prepare("DELETE * FROM docente WHERE id_docente=:Id");
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
