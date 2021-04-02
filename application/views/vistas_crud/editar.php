<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('partes/header'); ?>
<body>
	<?php 
	foreach($usuarios as $usuario);
	//pasando id como parametro
	?>
	<h1>Editar Usuario: <?php $usuario->login?></h1>
	<form id="datos" name="datos" method="POST" action="<?php echo base_url(); ?>index.php/datos/updateUsuario">
		login <input name="login" type="text" minlength ="2" readonly required value="<?= (isset($usuario) ? $usuario->login : '') ?>">
		password <input name="password" type="text" minlength = "5" required value="<?= (isset($usuario) ? $usuario->password : '') ?>">
		email <input name="email" type="email" required value="<?= (isset($usuario) ? $usuario->email : '') ?>">
		Role <select name="rol">
			<option value="administrador">Administrador</option>
			<option value="jefe">Jefe</option>
			<option value="cliente" selected>Cliente</option>
		</select>
		<input type="submit" value="actualizar" />
	</form>
</body>

</html>