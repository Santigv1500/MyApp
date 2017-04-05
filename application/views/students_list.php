<!DOCTYPE html>
<html>
<head>
	<title>Students List</title>
</head>
<body>
<h1>Lista de Estudiantes</h1>
<ul>
	<?php foreach ($estudiantes as $estudiante): ?>
		<li>
			<p><b>Nombre: </b><?= $estudiante['nombre']." ".$estudiante['apellidos']; ?></p>
			<p><b>Fecha de Nacimiento: </b><?= $estudiante['fecha_nacimiento']; ?></p>
			<p><b>Sexo: </b><?= $estudiante['sexo']; ?></p>
			<p><b>Correo Electrónico: </b><?= $estudiante['email']; ?></p>
			<p><b>Semestre: </b><?= $estudiante['semestre']; ?></p>
			<hr>
		</li>
	<?php endforeach; ?>
</ul>		
			

</body>
</html>