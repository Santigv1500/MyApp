<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<p>Bienvenido <?php echo $username; ?></p>
<a href="<?php echo site_url('login/logout') ?>">Cerrar Sesión</a><br>
<a href="<?php echo site_url('calculadora/index') ?>">Calculadora</a><br>
<a href="<?php echo site_url('registro/index') ?>">Registrar Personas</a><br>
</body>
</html>