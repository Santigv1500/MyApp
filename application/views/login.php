<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
<h1>Iniciar Sesión</h1>
<p style="color:#FF0000;"><?php if(isset($error)) { echo $error; } ?></p>
<?= form_open('login/attempt_login'); ?>
<div>
	<?= form_label('Usuario ', 'username'); ?>
	<?= form_input('username', $this->input->post('username') , ['id' => 'username']); ?>
</div>
<div>
	<?= form_label('Contraseña ', 'password'); ?>
	<?= form_password('password', '' , ['id' => 'password']); ?>
</div>
<?= form_submit('','Entrar'); ?>
<? form_close(); ?>


</body>
</html>