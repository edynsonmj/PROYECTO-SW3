<body>
<div id="container">
	<table id="tabla_usuarios">
		<thead>
			<tr>
				<th>LOGIN</th>
				<th>PASSWORD</th>
				<th>EMAIL</th>
				<th>ROL</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				//hay contenido en el arreglo usuarios?
				if($usuarios){
					//cierro clausla php para trabajar tabla en html
					foreach($usuarios as $usuario){ ?>
						<tr>
							<td><?= $usuario -> login ?></td>
							<td><?= $usuario -> password ?></td>
							<td><?= $usuario -> email ?></td>
							<td><?= $usuario -> rol ?></td>
                            <td><a href="<?= base_url('Datos/datosUpdate/'.$usuario->login) ?>">Editar</a></td>
                            <td><a href="<?= base_url('Datos/deleteUsuario/'.$usuario->login) ?>">Eliminar</a></td>
						</tr>
						<?php
						//abro clausula php para poner el cierre del foreach y el else del if (estos son comandos propios de php)
					}
				}
				else{ ?>
					<td class="text-center" colspan="6">NO SE ENCONTRARON USUARIOS</td>
				<?php } ?>
		</tbody>
	</table>
</div>

</body>
