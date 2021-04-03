<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<?php $this->load->view('partes/head'); ?>
<?php $this->load->view('partes/header'); ?>

<body>
	<div class=contenForm>
		<form class="datosForm" name="datos" method="POST" action="<?php echo base_url(); ?>index.php/datos/insertUsuario">

			<label class=labelForm>Login</label> <br><input class=campoForm name="login" type="text" minlength="2" /><br><br>
			<label class=labelForm>Password</label><br> <input class=campoForm name="password" type="text" minlength="5" /><br /><br>
			<label class=labelForm>Role</label><br> <select class=campoForm name="rol">
				<option value="administrador">Administrador</option>
				<option value="jefe">Jefe</option>
				<option value="cliente" selected>Cliente</option>
			</select>
			<br /><br>
			<label class=labelForm>Email</label><br> <input class=campoForm name="email" type="email" /><br /><br>
			<input class=boton type="submit" value="registrar" /><br>
		</form>
	</div>
</body>
<?php $this->load->view('partes/foot'); ?>

</html>