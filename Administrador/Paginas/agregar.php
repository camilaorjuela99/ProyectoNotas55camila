<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<div class="container">
		<h2>REGISTRO DE USUARIOS</h2>
		<form action="../controladores/agregarusuaios.php" method="post">
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" class="form-control" placeholder="Ingresar su nombre" name="txtnombre">
			</div>
			<div class="form-group">
				<label>Apellido</label>
				<input type="text" class="form-control"placeholder ="Ingresar su apellido" name="txtapellido">
			</div>
			<div class="form-group">
				<label>Usuario</label>
				<input type="text" class="form-control" placeholder="Ingresar usuario"name="txtusuario">
			</div>
			<div class="form-group">
				<label>Contraseña</label>
				<input type="text" class="form-control" placeholder="Ingresar contraseña" name="txrcontraseña">
			</div>
			<div class="form-group">
				<p>Perfil:</p>
				<label for="perfil"></label>
				<select class="form-select" name="txtperfil" aria-label ="Default select example">
					<option selected>Elegir opcion</option>
					<option value="Administrador">Administrador</option>
					<option value="Usuario">Usuario</option>

				</select>

			</div>
			<div class="form-group">
				<p>Estado</p>
				<label for="perfil"></label>
				<select class="form-select" name="txtestado" aria-label="Default select example">
					<option selected> Elegir opcion</option>
					<option value="Activo">Activo</option>
					<option value="No activo">No activo</option>

					<button>REGISTRAR</button>

				</select>

			</div>
		</form>
	</div>
	
</head>
<body>
	
</body>
</html>

