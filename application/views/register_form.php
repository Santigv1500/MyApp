<!DOCTYPE html>
<html>
<head>
	<title>Student Register</title>
</head>
<body>
<h1>Registro de Estudiantes</h1>
<p style="color:#01DF01;"><?php if (isset($success) && $success) { ?>Registro satisfactorio<?php } ?></p>
<p style="color:#FF0000;"><?php if (isset($error)) { ?>Error: <?php echo $error; } ?></p>
<?= form_open('student_register/attempt_register'); ?>
<div>
	<p><b><?= form_label('Nombre* ', 'nombre'); ?></b>
	<?= form_input('nombre', $this->input->post('nombre'), ['maxlength' => 50,'required' => 'required']); ?>
	</p>
</div>
<div>
	<p><b><?= form_label('Apellidos* ', 'apellidos'); ?></b>
	<?= form_input('apellidos', $this->input->post('apellidos'), ['maxlength' => 50,'required' => 'required']); ?>
	</p>
</div>
<div>
	<p><b><?= form_label('Sexo* ', 'sexo'); ?></b>
	<?= form_input('sexo', $this->input->post('sexo'), ['required' => 'required']); ?>
	</p>
</div>
<div>
	<p><b><?= form_label('Correo Electrónico* ', 'email'); ?></b>
	<?= form_input('email', $this->input->post('email'), ['required' => 'required']); ?>
	</p>
</div>
<div>
	<p><b><?= form_label('Fecha Nacimiento ', 'fecha_nacimiento'); ?></b>
	<?= form_input('fecha_nacimiento', $this->input->post('fecha_nacimiento')); ?>
	</p>
</div>
<p style="color:#FF0000;">* Campos Obligatorios</p>
<?= form_submit('registrar','Registrar'); ?>
<?= form_close(); ?>

</body>
</html>