<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<?php $this->load->view('partes/head'); ?>
<?php $this->load->view('partes/header'); ?>
<?php $this->load->view('partes/barSearch');?>
<body>
    <h1 class="titulo">¡Se ha detectado un error al actualizar!</h1><br>
    <h2 class="titulo">verfique los datos por favor</h2>
    <div class="error" style="text-align: center">
        <button class="botonError" href="<?= base_url() ?>/Datos/index"><a href="<?= base_url() ?>/Datos/index">volver</a></button>
    </div>
</body>
</html>