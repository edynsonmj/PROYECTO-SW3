<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<?php $this->load->view('partes/head'); ?>
<?php $this->load->view('partes/header'); ?>

<body>
	<?php
	foreach ($usuarios as $usuario);
	//pasando id como parametro
	?>
	<h1>Editar Usuario: <?php $usuario->login ?></h1>
	<div class=contenForm>
		<form class=datosForm name="datos" method="POST" action="<?php echo base_url(); ?>index.php/datos/updateUsuario">
			<label class=labelForm>Login</label><br> <input class=campoForm name="login" type="text" minlength="2" readonly required value="<?= (isset($usuario) ? $usuario->login : '') ?>"><br><br>
			<label class=labelForm>Password</label><br> <input class=campoForm name="password" type="text" minlength="5" required value="<?= (isset($usuario) ? $usuario->password : '') ?>"><br><br>
			<label class=labelForm>Email</label><br> <input class=campoForm name="email" type="email" required value="<?= (isset($usuario) ? $usuario->email : '') ?>"><br><br>
			<label class=labelForm>Role</label><br> <select class=campoForm name="rol"><br><br>
				<option value="administrador">Administrador</option><br>
				<option value="jefe">Jefe</option>
				<option value="cliente" selected>Cliente</option>
			</select><br><br>
			<input class=boton type="submit" value="actualizar" />
		</form>
	</div>
</body>
<?php $this->load->view('partes/foot'); ?>

</html>