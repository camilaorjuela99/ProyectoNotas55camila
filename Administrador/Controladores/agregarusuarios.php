<?php
require_once('../../conexion.php');
require_once('../modelos/administrador.php');

if($_POST)
{
	//Crear un objeto de la clase administrador

	$admin = new Administrador();
	$Nombreusu = $_POST['txtnombre'];
	$Apellidousu = $_POST['txtapellido'];
	$Usuariousu = $_POST['txtusuario'];
	$Passwordusu = MD5 ($_POST['txtcontraseña']);
	$Perfil = $_POST['txtperfil'];
	$Estadousu = $_POST['txtestado'];

	$admin->addadmi($Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$Estadousu);


}


?>