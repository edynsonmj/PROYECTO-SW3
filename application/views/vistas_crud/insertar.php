<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Bienvenido a Codeingniter</title>
	</head>
	<body>

		<form id="datos" name="datos" method="POST" action="<?php echo base_url(); ?>index.php/datos/registrar"> 

			Nombre de usuario <input name="login" type="text"/><br />
			password <input name="password" type="text"/><br />
			Rol <input name="rol" type="text"/><br />
			Correo electronico <input name="email" type="text"/><br />

			<input type="submit" value="registrar" />
		</form>

	</body>
</html>



