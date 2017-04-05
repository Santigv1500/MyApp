<!DOCTYPE html>
<html>
<head>
	<title>Signature List</title>
</head>
<body>
<h1>Lista de Cursos</h1>
<ul>
	<?php foreach ($cursos as $curso): ?>
		<li>
			<p><b>Código: </b><?= $curso['codigo']; ?></p>
			<p><b>Nombre: </b><?= $curso['nombre']; ?></p>
			<p><b>Aula: </b><?= $curso['aula']; ?></p>
			<p><b>Profesor: </b><?= $curso['profesor']['nombre']." ".$curso['profesor']['apellidos'];  ?></p>
			<p><b>Departamento: </b><?= $curso['profesor']['departamento']; ?></p>
			<hr>
		</li>
	<?php endforeach; ?>
</ul>		
			

</body>
</html>