<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuario</title>
</head>
<body>
<h1>Registro de usuario</h1>
<p style="color:#01DF01;"><?php if (isset($success)) { ?>Registro satisfactorio<?php } ?></p>
<p style="color:#FF0000;"><?php if (isset($error)) { ?>Error: <?php echo $error; } ?></p>
<?= form_open('registro/index'); ?>
<div>
	<?= form_label('Nombre ', 'nombre'); ?>
	<?= form_input('nombre', $this->input->post('nombre') , ['id' => 'nombre']); ?>
</div>
<div>
	<?= form_label('Salario ', 'salario'); ?>
	<?= form_input('salario', $this->input->post('salario'), ['id' => 'salario']); ?>
</div>
<div>
	<?= form_label('Sexo ', 'sexo'); ?>
	<?= form_input('sexo', $this->input->post('sexo') , ['id' => 'sexo']); ?>
</div>
<?= form_submit('registrar','Registrar'); ?>
<?= form_close(); ?>
</body>
</html>