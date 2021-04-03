<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<?php $this->load->view('partes/head'); ?>
<?php $this->load->view('partes/header'); ?>

<body>

	<form id="datos" name="datos" method="POST" action="<?php echo base_url(); ?>index.php/datos/insertUsuario">

		Nombre de usuario <input name="login" type="text" minlength="2" /><br />
		password <input name="password" type="text" minlength="5" /><br />
		Role <select name="rol">
			<option value="administrador">Administrador</option>
			<option value="jefe">Jefe</option>
			<option value="cliente" selected>Cliente</option>
		</select>
		<br/>
		Correo electronico <input name="email" type="email" /><br />
		<input type="submit" value="registrar" />
	</form>

</body>
<?php $this->load->view('partes/foot'); ?>
</html>